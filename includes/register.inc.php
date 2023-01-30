<?php
    if (isset($_POST["submit"]))
    {
        include 'functions.php';
        include 'db.inc.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];
        $email = $_POST["email"];
        if (emptyInputs($username,$password,$repeat_password,$email) == true)
	    {
		    header("Location: ../register.php?error=emptyinputs"); 
            exit();
	    }

        if (checkPassword ($password,$repeat_password)==false)
        {
            header("Location: ../register.php?error=password");
            exit();
        }

        if (checkUser($connection,$username)==true)
        {
            echo "Something";
            header("Location: ../register.php?error=checkUser"); 
            exit();
        }
        if (checkEmail($connection,$email)==true)
        {
            echo "Something";
            header("Location: ../register.php?error=checkEmail"); 
            exit();
        }
        
        createUser($connection,$username,$password,$email);
    }
    else
    {
        header("Location: ../register.php");
    }
    
?>
