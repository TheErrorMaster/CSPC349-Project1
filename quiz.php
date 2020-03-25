<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scripts/quiz.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pet Connect Quiz</title>
</head>
<body>
    <section class="container">
        <div class="left-half">
            <img class="dog" src="Images/dog-quiz.jpg">
        </div>
        <div class="right-half">
            <div class="quiz">
                <h1>Time to get into the ruff of it!</h1>
                <p>Now were going to have you answer a few questions about your beloved pooch. Please be as
                    honest as possible to ensure a better match process for your best friend.
                </p>
                <form action="quizVerify.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000000">
                    <input type="text" id="dogName" name="dogName" placeholder="Name" required autofocus><br><br>
        
                    <label for="dogGender">Gender</label><br>
                    <input type="radio" id="male" name="dogGender" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="dogGender" value="female" required>
                    <label for="female">Female</label><br><br>
        
                    <label for="dogSize">Size</label><br>
                    <input type="radio" id="small" name="dogSize" value="small" required>
                    <label for="small">Small</label>
                    <input type="radio" id="medium" name="dogSize" value="medium" required>
                    <label for="medium">Medium</label>
                    <input type="radio" id="large" name="dogSize" value="large" required>
                    <label for="large">Large</label><br><br>
        
                    <label for="Breed">Breed</label><br>
                    <select id="Breed" name="dogBreed" required>
                        <option value="yorkie">Yorkshire Terrier</option>
                        <option value="germShep">German Shepherd</option>
                        <option value="goldenRet">Golden Retriever</option>
                        <option value="bulldog">Bulldog</option>
                        <option value="frenchBull">French Bulldog</option>
                        <option value="pug">Pug</option>
                        <option value="poodle">Poodle</option>
                        <option value="greatDane">Great Dane</option>
                        <option value="boxer">Boxer</option>
                        <option value="beagle">Beagle</option>
                    </select>
                    <br><br>

                    <label>Picture</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
                    <input type="submit" name="submit" value="Start Connecting">
                </form>
            </div>
        </div>
    </section>

    <!-- scripts -->
    <script src="scripts/mainpage.js" charset="UTF-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
