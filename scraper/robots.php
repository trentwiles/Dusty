<?php

function robots($input){
        $site = parse_url($input)["host"];
	$robots = $site . "/robots.txt";
	return $robots;
}

// test
echo robots("https://www.google.com");
