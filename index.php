<!DOCTYPE HTML>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Main Page</title>
 </head>
 <body>
   <?php
      include 'includes/header.inc.php';
   ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <?php
   /* session_start();
      if(isset($_SESSION["username"])){
         echo '<form action="includes/logout.inc.php" method="POST">
                  <button name="logout">Logout</button>
                  </form>
               ';
      }
  */ ?>
  <p> Hello </p>
 </body>
</html>