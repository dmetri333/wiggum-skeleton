<?php
$xml = "<status>\n";
	$xml .= "<error>true</error>\n";
	$xml .= "<code>".$error->getCode()."</code>\n";
	$xml .= "<message>Wiggum Application Error</message>\n";
$xml .= "</status>";
$xml .= "<processTime>".microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']."</processTime>\n";

if ($verboseMode) {
	$xml = "   <status>\n";
	$xml .= "    <error>true</error>\n";
	$xml .= "    <type>" . get_class($error) . "</type>\n";
	$xml .= "    <code>" . $error->getCode() . "</code>\n";
	$xml .= "    <message>" . sprintf('<![CDATA[%s]]>', str_replace(']]>', ']]]]><![CDATA[>', $error->getMessage())) . "</message>\n";
	$xml .= "    <file>" . $error->getFile() . "</file>\n";
	$xml .= "    <line>" . $error->getLine() . "</line>\n";
	$xml .= "    <trace>" . sprintf('<![CDATA[%s]]>', str_replace(']]>', ']]]]><![CDATA[>', $error->getTraceAsString())) . "</trace>\n";
	$xml .= "  </status>\n";
	$xml .= "<processTime>".microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']."</processTime>\n";
}

echo $xml;