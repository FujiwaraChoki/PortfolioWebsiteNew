<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../signup/style.css">
    <title>Document</title>
</head>
<body>
    <div id="divbg">
        <div id="signupbody">
            <h1 id="titleOfPage" class="text">SignUp Form</h1>
            <h2 id="descriptionOfSignUp" class="text">Please fill out all the boxes.</h2>

            <form action="signininhalt.php" method="post">
                <!--DIV for username enter-->
                <div id="usernamediv" class="signupdivs">
                    <input type="text" name="usernameR" placeholder="Username" id="usernameR" class="userInfo">
                </div>

                <!--DIV for password enter-->
                <div id="passworddiv" class="signupdivs">
                    <input type="password" name="passwordR" placeholder="Password" id="passwordR" class="userInfo">
                </div>

                <br />

                <!--DIV for submit button-->
                <div id="submitdiv" class="signupdivs">
                    <input type="submit" value="SignUp" id="signupbutton" class="buttons">
                </div>
            </form>
        </div>
    </div>
</body>
</html>