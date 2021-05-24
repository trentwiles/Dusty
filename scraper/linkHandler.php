<?php

require "../vendor/autoload.php";
header("Content-type: application/json");
use Embed\Embed;

$current_links = json_decode(file_get_contents("links.json"), true);

$html = [];
$urls = [];



foreach($current_links as $l)
{
  try{
  	$info = Embed::create("https://" . $l);
  }catch (exception $e) {
      #echo $e;
  }
  //print_r($info->images);
  foreach($info->images as $imgd)
  {
      $img = $imgd["url"];
      array_push($html, $img);
      array_push($urls, "https://${l}");
  }
}

$final = array("links" => $urls, "images_raw" => $html);

echo json_encode($final);
