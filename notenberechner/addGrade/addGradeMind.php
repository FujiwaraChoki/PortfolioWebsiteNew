<?php
    session_start();
    $grade = $_POST['grade'];
    $userid = $_SESSION['UserID'];

    $con = new mysqli('sql304.epizy.com', 'epiz_31910323', 'K3FXEzNspxk9i', 'Grade');
    if($con->connect_error) {
        die('Failed to connect : ' . $con->connect_error);
    } else {
        $stmt = $con->prepare("insert into Grade(UserID, Grade) values(?, ?)");
        $stmt->bind_param("is", $userid, $grade);
        $stmt->execute();
        $stmt->close();
        $con->close();
    }
?>