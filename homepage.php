<?php
    session_start();
    require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scripts/homepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pet Connect Homepage</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">
        <img src="Images/logo.png" height="100" alt="PetConnect">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class ="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="homepage.php" class="nav-item nav-link active">Home</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="logout.php" class="nav-item nav-link">Log out</a>
        </div>
    </div>
</nav>

<div class="homeRow">

<?php
//connect to db
$conn = db_connect();

// put info in db
$query = "SELECT * FROM dog";
$result = $conn->query($query);

// just in case somthing happens
if(!$result) {
    throw new Exception('Could not register dog info into db');
}

while($row = $result->fetch_row()){
    echo'<form action="profile.php" method="post">';
    echo '<div class="homeCol">';
        echo '<input type="image" src="'.$row[5].'" alt="submit" width="200" height="200"><br>';
        
        echo '<nobr>Name: '.$row[1].'</nobr><br>';
        echo '<nobr>Breed: '.$row[4].'</nobr>';;
    echo '</div>';
    echo '<input type="hidden" name="name" value="'.$row[1].'">';
    echo '<input type="hidden" name="gender" value="'.$row[2].'">';
    echo '<input type="hidden" name="size" value="'.$row[3].'">';
    echo '<input type="hidden" name="breed" value="'.$row[4].'">';
    echo '<input type="hidden" name="picture" value="'.$row[5].'">';
    echo '<input type="hidden" name="owner" value="'.$row[6].'">';
    echo '</form>';
}
$result->close();
$conn->close();
?>
 </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
