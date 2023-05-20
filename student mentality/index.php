<?php
session_start();

if (isset($_GET['page']) && $_GET['page'] === 'logout') {
    session_destroy();
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mentality</title>

    <!-- My Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logoweb.png">
</head>

<body>
    <!-- Navbar start -->
    <nav class=" navbar">
        <a href="#" class="navbar-logo">Student<span>Mentality</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#dailyinsight">Daily Insight</a>
            <a href="#service">Service</a>
            <a href="#logout">Log Out</a>
            <a href="#signup">Sign Up</a>
        </div>
        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
    <!-- Navbar end -->

    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'insight':
                    include "insight.php";
                    break;
                case 'serive':
                    include "service.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>

    </div>
</body>

</html>