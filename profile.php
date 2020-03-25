<?php
    session_start();
    require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scripts/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pet Connect Profile Page</title>
</head>

<body style>

<nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="Images/logo.png" height="90" alt="PetConnect">
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
<div id="container">
        <div class="image-container">
            <?php
            echo '<img src = "'.$_POST["picture"].'" style="width: 30%; height: 30%">';
            ?>
            <div class = "title">
            
                <h2><?php $_POST["name"] ?></h2>
            </div>
        </div>
        
        <div class = "main-container">
            <?php
            echo '<p>Gender: '.$_POST["gender"].'</p>';
            echo '<p>Size: '.$_POST["size"].'</p>';
            echo '<p>Breed: '.$_POST["breed"].'</p>';
            echo '<p>Owner Username: '.$_POST["owner"].'</p>';
            ?>
        </div>
        
 </div>
<!--scripts-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
