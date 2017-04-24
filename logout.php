<?php

  /* Logout Process, unsets and destroys session variables */
  session_start();
  session_unset();
  session_destroy();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Error</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/include.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600">
  </head>
  <body>
    <div class="form">
      <h1>Thanks for stopping by</h1>

      <p><?= 'You have been logged out!' ?></p>

      <a href="index.php"><button class="button button-block">Home</button></a>
    </div>
  </body>
</html>
