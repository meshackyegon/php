<?php
  // First start a session which allow's to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "include/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <!-- Here is the header including the login form for this. -->
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="images/logo.png" alt="mmtuts logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Me</a></li>
          <li><a href="contacts.php">Contact</a></li>
        </ul>
      </nav>
      <div class="header-login">
        <!--
        Notice that the "method" is set to "post" because the data we send is sensitive data.


        Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if user is logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file
        -->
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="include/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="include/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>