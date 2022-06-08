<?php
    session_start();
    $con = new mysqli('sql304.epizy.com', 	'epiz_31910323', 'K3FXEzNspxk9i', 'epiz_31910323_User');
    if($con->connect_error) {
        die('Failed to connect : ' . $con->connect_error);
    } else {
        $stmt = $con->prepare("update Grade set loggedIn = 0");
        $stmt->execute();
        $stmt->close();
        $con->close();
    }
    session_destroy();
    header("Location: ../index.php");
?>