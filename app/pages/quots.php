<?php
  $url = "https://api.quotable.io/random";
  $json    = file_get_contents( $url );
  $data    = json_decode( $json, true );

  echo $data['content']; 
?>

