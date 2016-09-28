<?php
$xml = "<error>\n  <message>".$error->getMessage()."</message>\n";
if ($verboseMode) {
	do {
		$xml .= "  <error>\n";
		$xml .= "    <type>" . get_class($error) . "</type>\n";
		$xml .= "    <code>" . $error->getCode() . "</code>\n";
		$xml .= "    <message>" . sprintf('<![CDATA[%s]]>', str_replace(']]>', ']]]]><![CDATA[>', $error->getMessage())) . "</message>\n";
		$xml .= "    <file>" . $error->getFile() . "</file>\n";
		$xml .= "    <line>" . $error->getLine() . "</line>\n";
		$xml .= "    <trace>" . sprintf('<![CDATA[%s]]>', str_replace(']]>', ']]]]><![CDATA[>', $error->getTraceAsString())) . "</trace>\n";
		$xml .= "  </error>\n";
	} while ($error = $error->getPrevious());
}
$xml .= "</error>";

echo $xml;