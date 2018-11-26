<?php

//connect to actual database
require 'dbh.inc.php';

$username = $_POST['uid'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];

/*checks if any fields were left blank, throws error message */
if(empty($username) || empty($password) || empty($passwordRepeat)) 
{
    header("Location: ../signup.php?error=emptyfields"); //send back to signup
    exit();
}


/*checks if any invalid characters were used for username, throws error message */
else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
{
    header("Location: ../signup.php?error=invaliduid");
    exit();
    
}

/*checks if passwords don't match, throws error message */
else if($password !== $passwordRepeat)
{
    header("Location: ../signup.php?error=passwordcheck");
    exit();
}

/*checks if username is already taken, throws error message */
else {
    $sql ="SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../signup.php?error=sqlerror");
    exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $username);
            //the "s" means the datatype passed is a string
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0)  //checks for username in database
        {
             header("Location: ../signup.php?error=usertaken");
             exit();
        }
        else {
            $sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?)"; //it worked Yay! store it in the database table
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../signup.php?error=sqlerror");
            exit();
            }
            else
            {
                //this encrypts the password! 
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                
                mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd); //the "ss" correspond with the (?,?) 
                mysqli_stmt_execute($stmt);
                header('Location:signupSuccess.php');
                exit();
            }
        }
    }
    
}

mysqli_stmt_close($stmt);
mysqli_close($conn);