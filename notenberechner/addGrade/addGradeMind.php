<?php
    session_start();
    $userid = $_SESSION['UserID'];
    $grade = $_POST['grade'];

    $con = new mysqli('sql304.epizy.com', 	'epiz_31910323', 'K3FXEzNspxk9i', 'epiz_31903093_User');
    if($con->connect_error) {
        die('Failed to connect : ' . $con->connect_error);
    } else {
        $stmt = $con->prepare("insert into Grade(UserID, Grade) values(?, ?)");
        $stmt->bind_param("id", $userid, $grade);
        if(!($userid = NULL)) {
            $stmt->execute();
            $stmt->close();
            $con->close();
        }
    }
?>