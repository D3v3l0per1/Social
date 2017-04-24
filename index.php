<?php

  /* Diplays User Information and some usefull messages */
  session_start();

  // Checl if user is logged in usinge the session variable
  if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");
  }
  else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
  }

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

  <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['login'])) { // user login
        require 'login.php';
      }

      if (isset($_POST['register'])) {  // user register
        require 'register.php';
      }

    }

  ?>

  <body>
    <div class="form">

      <h1>Welcome</h1>

      <p>
        <?php

          // Display message about account verification
          if ( isset($_SESSION['message']) ) {
            echo $_SESSION['message'];

            // Don't annoy the user with more messages upan page refresh
            unset( $_SESSION['message']);
          }

        ?>
      </p>

      <?php

        // Not Active until activation
        if ( !$active) {
          echo '<div class="info">Account is unverified, please confirm your email by clicking on the email link!</div>';
        }

      ?>

      <h2><?php echo $first_name.''.$last_name; ?></h2>
      <p><?= $email ?></p>

      <a href="logout.php"><button name="logout" class="button button-block">Log Out</button></a>

    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>

  </body>
</html>
