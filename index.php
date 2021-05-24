<?php

require __DIR__ . "/vendor/autoload.php";


//Get content info

use Embed\Embed;

$info = Embed::create('https://riverside.rocks');

#echo $info->title; //The page title
#echo $info->description; //The page description
#echo $info->url; //The canonical url
#echo $info->keywords; //The page keywords
echo $info->type;
