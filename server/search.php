<?php

require "../vendor/autoload.php";

$search = $_POST["search"];

if(!$_POST){
  $search = $_GET["q"];
}

if($search == "")
{
   die(header("Location: /"));
}

$config = json_decode(file_get_contents("../config.json"));
$host = $config["host"];


$options = array('User-agent' => "Dusty (internal)");
$request = Requests::get('${host}/scraper/DuckDuckGo.php?q=${search}', $options);
