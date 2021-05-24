<?php

require __DIR__ . "/vendor/autoload.php";

use Embed\Embed;

$current_links = json_decode(file_get_contents("links.json"), true);

foreach($current_links as $l)
{
  $info = Embed::create($l);
  echo $info->images . "\n";
}
