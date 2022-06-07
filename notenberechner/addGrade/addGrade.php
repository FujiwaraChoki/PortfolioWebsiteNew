<?php
    session_start();
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../signup/style.css">
</head>
<body>
    <form action="addGradeMind.php" method="post">
        <input type="number" name="grade" id="number" placeholder="Grade">
        <br />
        <input type="submit" name="submitbuttonaddgrade" value="Add Grade">
    </form>
</body>
</html>