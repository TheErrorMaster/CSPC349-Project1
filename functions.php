<?php
// connection function
function db_connect() {
    $result = new mysqli('localhost', 'root', '', 'user');
    if(!$result) {
        throw new Exception('Could not connect to db server');
    } else {
        return $result;
    }
}

// register function
function register($username, $email, $fName, $lName, $password, $phone) 
{ 
    //connect to db
    $conn = db_connect();
    // check if username is unique 
    $result = $conn->query("SELECT * FROM user WHERE username='".$username."'");
    if(!$result) {
        throw new Exception('Could not execute query');
    }
    
    if($result->num_rows>0){
        throw new Exception('That username is taken');
    } 

    // else put in db
    $query = "INSERT INTO user(username, email, fName, lName, password, phone)
    VALUES ('$username','$email', '$fName', '$lName', sha1('".$password."'), '$phone')";
    $result = $conn->query($query);

    // just in case somthing happens
    if(!$result) {
        throw new Exception('Could not register into db please try again later');
    }
    return true;
    // $result->free_result();
    // $conn->close();
}

// login function
function login($username, $password) 
{
    // connect to db
    $conn = db_connect();

    // check if username is unique
    $result = $conn->query("SELECT * FROM user WHERE 
    username='".$username."' AND password=sha1('".$password."')");

    if(!$result) {
        throw new Exception('user is used already');
        exit;
    }

    if($result->num_rows>0) {
        return true;
    } else {
        throw new Exception('could not log you in');
        exit;
    }
    // $result->free_result();
    // $conn->close();
}
// adding Dog info here
function dogInfo($name, $gender, $size, $breed, $picture, $owner)
{
    //connect to db
    $conn = db_connect();

    // put info in db
    $query = "INSERT INTO dog (name, gender, size, breed, picture, owner)
    VALUES ('$name','$gender','$size','$breed','$picture','$owner')";
    $result = $conn->query($query);

    // just in case somthing happens
    if(!$result) {
        throw new Exception('Could not register dog info into db');
    }
    return true;
    // $result->free_result();
    // $conn->close();
}

// display all dogs
function search()
{
    //connect to db
    $conn = db_connect();

    // put info in db
    $query = "SELECT * FROM dog";
    $result = $conn->query($query);

    // just in case somthing happens
    if(!$result) {
        throw new Exception('Could not register dog info into db');
    }
    return $result;
}


?>