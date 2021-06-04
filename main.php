<?php
error_reporting(E_ERROR | E_PARSE); // don't show warnings from DOMDocument::loadHTML()
require('searchterm.php');
require('getrfc.php');
// 
// "MAIN FUNCTION"
//
if ( $argc < 2) {
	echo "missing paramter: specify rfc no. or search term to look up";
	exit;
}

if (is_numeric($argv[1])){ // if number entered, retrieve specific rfc
	getrfc($argv[1]);
} elseif (is_string($argv[1])) { // if string entered, search rfcs for string
	searchterm($argv[1]);
} else {
	echo "sorry, not understood";
}
