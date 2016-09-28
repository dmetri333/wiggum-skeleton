<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Wiggum Application Error</title>
		<style>
			body {
				margin: 0;
				padding: 30px;
				font: 12px/1.5 Helvetica, Arial, Verdana, sans-serif;
			}
			
			h1 {
				margin: 0;
				font-size: 48px;
				font-weight: normal;
				line-height: 48px;
			}
			
			strong {
				display: inline-block;
				width: 65px;
			}
		</style>
	</head>
	<body>
		<h1>Wiggum Application Error</h1>
		<?php if ($verboseMode) { ?>
			<p>The application could not run because of the following error:</p>
			<h2>Details</h2>
			
			<div><strong>Type:</strong> <?= get_class($error) ?></div>
	
			<?php if (($code = $error->getCode())) { ?>
				<div><strong>Code:</strong> <?= $code ?></div>
			<?php } ?>
		
			<?php if (($message = $error->getMessage())) { ?>
				<div><strong>Message:</strong> <?= htmlentities($message) ?></div>
			<?php } ?>
	
			<?php if (($file = $error->getFile())) { ?>
				<div><strong>File:</strong> <?= $file ?></div>
			<?php } ?>
		
			<?php if (($line = $error->getLine())) { ?>
				<div><strong>Line:</strong> <?= $line ?></div>
			<?php } ?>
		
			<?php if (($trace = $error->getTraceAsString())) { ?>
				<h3>Trace</h3>
				<pre><?= htmlentities($trace) ?></pre>
			<?php } ?>
	
			<?php while ($error = $error->getPrevious()) { ?>
				<h2>Previous error</h2>
				<div><strong>Type:</strong> <?= get_class($error) ?></div>
	
				<?php if (($code = $error->getCode())) { ?>
					<div><strong>Code:</strong> <?= $code ?></div>
				<?php } ?>
			
				<?php if (($message = $error->getMessage())) { ?>
					<div><strong>Message:</strong> <?= htmlentities($message) ?></div>
				<?php } ?>
		
				<?php if (($file = $error->getFile())) { ?>
					<div><strong>File:</strong> <?= $file ?></div>
				<?php } ?>
			
				<?php if (($line = $error->getLine())) { ?>
					<div><strong>Line:</strong> <?= $line ?></div>
				<?php } ?>
			
				<?php if (($trace = $error->getTraceAsString())) { ?>
					<h3>Trace</h3>
					<pre><?= htmlentities($trace) ?></pre>
				<?php } ?>
				
			<?php } ?>
		<?php } else { ?>
			<p>A website error has occurred. Sorry for the temporary inconvenience.</p>
		<?php } ?>
	</body>
</html>