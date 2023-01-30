<!DOCTYPE HTML>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registration</title>
 </head>
 <body>
 <?php
      include 'includes/header.inc.php';
   ?>
   <div class="login register">
    <h1>Registration</h1>
    <?php
      if (isset($_GET["error"]))
      {
         if ($_GET["error"] == "emptyinputs")
         {
            echo "<font color=red><b>You hadn't fill all fields!</b></font>";
         }
         
         if ($_GET["error"] == "password")
         {
            echo  "<font color=red><b>Your passwords don't match!</b></font>";
         }
         
         if ($_GET["error"] == "checkUser")
         {
            echo  "<font color=red><b>Username already taken!</b></font>";
         }
         if ($_GET["error"] == "checkEmail")
         {
            echo  "<font color=red><b>Email already taken!</b></font>";
         }
      }
    ?>
    <form method="POST" action="includes/register.inc.php">
        <input name="username" placeholder="Enter username"> <br><br>
        <input name="password" placeholder="Enter password" type="password"> <br><br>
        <input name="repeat_password" placeholder="Confirm your password" type="password"> <br><br>
        <input name="email" placeholder="Enter email" type="email"> <br><br>
        <button name="submit">Register </button>
    </form>
   </div>
 </body>
</html>