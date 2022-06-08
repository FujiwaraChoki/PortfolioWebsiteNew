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
    <link rel="stylesheet" href="../style.css">
    <title>Portfolio</title>
</head>
<body id="indexbody">
    <div id="website" align="center">
        <!--Kopfinhalt-->
        <div id="kopf">
            <object data="../kopf/kopfinhalt.html" target="_top"></object>
        </div>

        <!--Menueinhalt-->
        <div id="menue">
            <object data="../menue/menueinhalt.php" target="_top"></object>
        </div>

        <!--Inhalt-->
        <div id="inhalt">
            <object data="inhalt.php" target="_top"></object>
        </div>

        <!--Fussinhalt-->
        <div id="fuss">
            <object data="../fuss/fussinhalt.html" target="_top"></object>
        </div>
    </div>
</body>
</html>