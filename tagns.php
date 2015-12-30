<?php
// tagns core file - remember to leave credit for me
// ItaySharon
// http://itaysharon.esy.es
// https://github.com/ItaySharon/
// need help? read the wiki
function tagns($tagns) {
  $ext = substr($tagns, (strlen($tagns) - 6), strlen($tagns));
  if($ext == ".tagns") {$f = fopen($tagns, "r");
  $code = fread($f, filesize($tagns));
  $elements = explode("\n", $code);
  echo("<tagns src=\"$tagns\"><style>");
  foreach($elements as $el) {
    $els = explode("=", $el);
    echo($els[0]." {".$els[1]."}");
    }
    echo("</style></tagns>");
  } else {
    die("not .tagns");
    }
  }
?>
