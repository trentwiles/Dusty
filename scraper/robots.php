<?php

require "../vendor/autoload.php";

function robots($input){
        $site = parse_url($input)["host"];
	$robots = $site . "/robots.txt";
	return $robots;
}

function scan($site, $path)
{
	$parser = new RobotsTxtParser(file_get_contents($site));
	$parser->setUserAgent('Dusty (+https://github.com/RiversideRocks/Dusty');

	if ($parser->isAllowed($path)) {
		return true;
	}else{
		return false;
	}
}
// test
//echo robots("https://www.google.com");
