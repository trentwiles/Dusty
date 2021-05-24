<?php

$api = json_decode(file_get_contents("links.json"), true);

foreach($api as $l)
{
	echo $l;
}
