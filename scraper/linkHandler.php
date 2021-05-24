<?php

require "../vendor/autoload.php";

use Embed\Embed;

$q = $_GET["q"];

exec("php DuckDuckGo.php ${q}");

$current_links = json_decode(file_get_contents("links.json"), true);

$titles = [];
$urls = [];



foreach($current_links as $l)
{
  $info = Embed::create("https://" . $l);
  //print_r($info->images);
  foreach($info->images as $imgd)
  {
      $img = $imgd["url"];
      echo "<img src='https://external-hit.riverside.rocks/${img}' />";
  }
}
