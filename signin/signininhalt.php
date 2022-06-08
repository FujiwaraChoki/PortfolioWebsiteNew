<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli('sql304.epizy.com', 	'epiz_31910323', 'K3FXEzNspxk9i', 'epiz_31910323_User');
    if($con->connect_error) {
        die('Failed to connect: ' . $con->connect_error);
    } else {
        $stmt = $con->prepare("select * from User where username = $username and password = $password");
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();
        if($stmt_result->num_rows = 1) {
            $stmt2 = $con->prepare("update User set loggedin = 1");
            $stmt2->execute();
            header("Location: ../index.php");
        }
        $stmt->close();
        $con->close();
        ob_end_flush();
    }
?>