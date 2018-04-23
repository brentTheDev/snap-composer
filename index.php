<?php
// Initialize your autoloader (this example is using composer)
require 'vendor/autoload.php';

// Instantiate the Highlighter.
$hl = new Highlight\Highlighter();

// Set the languages you want to detect automatically.
$hl->setAutodetectLanguages(['php', 'ruby']);

// Highlight some code.
$r = $hl->highlightAuto(file_get_contents('snap-composer.php'));

// Output the code using the default stylesheet:
?>

<html lang="en">
	<head>
		<title>Snap Challenge</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!-- Print the highlighted code: -->
		<pre class="hljs <?php $r->language ?>">
      <?php $r->value ?>
    	</pre>
	</body>
</html