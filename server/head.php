<!doctype html>
<html>
<head>
<?php
if(isset($_GET["q"]))
{
   echo "<title>" . htmlspecialchars($_GET["q"]) . " - Dusty</title>";
}else{
   echo "<title>Dusty</title>";
}
?>
<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
<center>
<!-- rest of page contents -->
