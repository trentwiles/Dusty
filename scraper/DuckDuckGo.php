<?php

require "../vendor/autoload.php";

use DiDom\Document;

$document = new Document('https://html.duckduckgo.com/html/?q=roblox', true);

$posts = $document->find('.result__url');

$links = [];

foreach($posts as $post) {
    array_push($links, trim($post->text()));
}

$api = json_encode($links);
file_put_contents("links.json", $api);
