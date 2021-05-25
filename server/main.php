<?php

require "../vendor/autoload.php";
require "head.php";
?>
<br><br><br>
<form method="get">
  <input type="text" id="q" name="q"><br>
  <input type="submit" value="Go!">
</form> 
<br><br><br>
<?php
$conf = json_decode(file_get_contents("../config.json"), true);
if($conf["custom_html"]){
  echo $conf["custom_html"];
}
?>
