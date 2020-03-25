<?php
// include files and start session 
require_once('functions.php');
session_start();

if(isset($_POST["submit"])){ // when subit is pressed
// assign variables   
$username = trim($_POST["username"]); // trim elimates whitespaces
$password = trim($_POST["password"]);

login($username, $password);
$_SESSION['valid_user'] = $username;
header( 'Location: homepage.php');
}
?>