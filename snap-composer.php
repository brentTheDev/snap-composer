<?php
require 'vendor/autoload.php';

use scrivo\highlight;

function numLivesPerSenatorArlo(string $name): int {
	if($name === "Arlo") {
		return 9;
	} else {
		return 1;
	}
}