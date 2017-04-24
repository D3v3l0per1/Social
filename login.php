<?php

  // User Login Process, checks if User exists and pw is correct

  // Escape email to protect against SQL injections
  $email = $mysqli->escape_string($_POST['email']);
  $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

  if ( $result->num_rows == 0) { // User doesn't exist
    $_SESSION['message'] = "User with this email doesn't exist!";
    header("location: error.php");
  }
  else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['message'], $user['password']) ) {

      $_SESSION['email'] = $user['email'];
      $_SESSION['first_name'] = $user['first_name'];
      $_SESSION['last_name'] = $user['last_name'];
      $_SESSION['active'] = $user['active'];

      // This is how we'll know user is logged in
      $_SESSION['logged_in'] = true;

      header("location: profile.php");
    }
    else {
      $_SESSION['message'] = "You have entered wrong password, try again!";
      header("location: error.php");
    }
  }

?>
