<?php
    session_start();
    ob_start();
    $email = $_POST['emailR'];
    $username = $_POST['usernameR'];
    $password = $_POST['passwordR'];

    $con = new mysqli('sql304.epizy.com', 	'epiz_31910323', 'sami6344', 'epiz_31903093_User');    if($con->connect_error) {
        die('Failed to connect: '.$con->connect_error);
    } else {
        $stmt = $con->prepare("insert into User(Email, Username, Password) values(?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $password);
        $stmt->execute();
        $stmt->close();
        $con->close();
        ob_end_flush();
    }
?>