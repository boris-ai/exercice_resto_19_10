<?php
    namespace App;
    require "src/Autoloader.php";
    Autoloader::register();

    $db = new Database('resto_19_10');

    if(isset($_GET['action'])) {
        if ($_GET['action'] == "home") {
            $menu = "template/home.php";
        } elseif ($_GET['action'] == "article") {
            if (isset($_GET['id_plat'])) {
                $menu = "template/article.php";
            } else {
                $menu = "template/404.php";
            }
        } elseif($_GET['action'] == "full"){
            $menu = "template/plats.php";
        }
    }else{
        $menu = "template/home.php";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/HTML/style.css">
    <link rel="stylesheet" href="script.js">
    <title>Sushi Restaurant</title>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
</head>
<body>
   <?php
        include("template/header.php");
        
        include($menu);

        include("template/footer.php");
   ?>
</body>
</html>