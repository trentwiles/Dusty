<?php

require "../vendor/autoload.php";

use Embed\Embed;

$current_links = json_decode(file_get_contents("links.json"), true);

foreach($current_links as $l)
{
  echo $l;
}
