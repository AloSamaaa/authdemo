<?php

session_start();

include 'dbconnect.php';

$username = $_POST["username"];
$password = $_POST["password"];
$conpass = $_POST["conpass"];

//validate if passwords match
if($password == $conpass){

    //validate duplicate user
    $sql = "SELECT username FROM users WHERE username = '{$username}';";
    $results = $conn->query($sql);
    if ($results->num_rows > 0){
        $_SESSION['error'] = "Oops! {$username} is already taken";
        header('location: ../register.php');
    }else{
         //hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES
     ('{$username}', '{$password}');";
    
    if($conn->query($sql)){
        $_SESSION['success'] = "Account succesfully created";
        header('location: ../index.php');
    }else{
        $_SESSION['error'] = "Oops! something went wrong";
        header('location: ../register.php');
    }
}

}else{
    $_SESSION['error'] = "Passwords do not match";
    header('location: ../register.php');
}


?>