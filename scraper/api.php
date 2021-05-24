<?php
die(print_r(parse_url($site)));
require "../vendor/autoload.php";
require "robots.php";

$site = $_GET["q"];

#die($site);
die(print_r(parse_url($site)));

#$r = robots($site);
$path = parse_url($site)["path"];
die($path);
$can = scan($r, $path);

if($can){
	echo "${r} said we can do the scan.";
}else{
	echo "${r} said we can't do the scan...";
}
