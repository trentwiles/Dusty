<?php

require "../vendor/autoload.php";
require "robots.php";

$site = $_GET["q"];

$r = robots($site);

