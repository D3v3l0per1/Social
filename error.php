<?php

  // Display all error messages
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Social Network</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/include.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600">
  </head>
  <body>
    <div class="form">
      <h1>Error</h1>
      <p>
        <?php

          if ( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
            echo $_SESSION['message'];
          else:
            header("location: index.php");
          endif;

        ?>
      </p>
      <a href="index.php"><button class="button button-block">Home</button></a>
    </div>
  </body>
</html>
