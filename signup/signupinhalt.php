<?php
    session_start();
    ob_start();
    $email = $_POST['emailR'];
    $username = $_POST['usernameR'];
    $password = $_POST['passwordR'];

    $con = new mysqli('sql304.epizy.com', 	'epiz_31910323', 'K3FXEzNspxk9i', 'epiz_31910323_User');
    if($con->connect_error) {
        die('Failed to connect: '.$con->connect_error);
    } else {
        $stmt = $con->prepare("insert into User(email, username, password) values(?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $password);
        $stmt->execute();
        $stmt->close();
        $con->close();
        ob_end_flush();
        header("Location: ../index.php");
    }
?>