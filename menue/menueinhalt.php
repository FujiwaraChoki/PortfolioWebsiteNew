<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Menue</title>
</head>
<body id="menuebody">
    <h1><a href="../index.php" target="_top">Home</a></h1>
    <h1>Links</h1>
    <h2><a href="https://github.com/FujiwaraChoki" target="_blank">GitHub</a></h2>
    <h2><a href="https://www.youtube.com/channel/UC1ghEiTed2YQhLY1YNouzfQ" target="_blank">YouTube</a></h2>
    <h1><a href="../signup/index.php" target="_top">SignUp</a></h1>
    <h1><a href="../signin/index.php" target="_top">SignIn</a></h1>
    <?php
        if(isset($_SESSION['hasPaid']) && $_SESSION['hasPaid'] = 1) {
            echo '<h2><a href="../notenberechner/index.php" target="_top">Notenberechner (Kostenpflichtig)</a></h2>';
        }
    ?>
</body>
</html>