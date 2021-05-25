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
