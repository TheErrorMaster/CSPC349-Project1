<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scripts/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <section class="container">
        <div class="left-half">
            <img class="dog" src="Images/dog-register.jpg">
        </div>
        <div class="right-half">
            <div class="register">
                <h1>Let's take it one paw at a time!</h1>
                <p>Let's first start off with your basic profile info.</p>
        
                <form action="registerVerify.php" method="post">
                    <input type="email" for="regEmail" name="email" placeholder="Email" required><br><br>
        
                    <input type="text" id="regFName" name="fName" placeholder="First Name" required><br><br>
        
                    <input type="text" id="regLName" name="lName" placeholder="Last Name" required><br><br>
        
                    <input type="text" id="regUserName" name="username" placeholder="Username" required><br><br>
        
                    <input type="password" id="regPassWord" name="password" placeholder="Password" required><br><br>
        
                    <input type="tel" id="regPhoneNum" name="phone" placeholder="Phone Number" required maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits"><br><br>
        
                    <input type="submit" name="submit" value="Register">
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