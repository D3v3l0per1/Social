<?php

  // DB Connection Settings
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'seniorweb';
  $mysqli = new mysqli($host, $user, $pass, $db) or die ($mysqli->error);

?>
