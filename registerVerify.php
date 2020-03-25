<?php 
// include files and start session 
require_once('functions.php');
session_start();

if(isset($_POST["submit"])){ // when submit is pressed
    // initial variables and trim elimates whitespaces
    $email = trim($_POST["email"]); 
    $fName = trim($_POST["fName"]);
    $lName = trim($_POST["lName"]); 
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $phone = trim($_POST["phone"]); // encrypt password

    // register here but function will be in a other file
    register($username, $email, $fName, $lName, $password, $phone);
    $_SESSION['valid_user'] = $username;
    header( 'Location: quiz.php');
}
?>

