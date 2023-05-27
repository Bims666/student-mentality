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
    <style>
    .oval-button {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 70px;
        background-color: #FFEB3B;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .oval-button:hover {
        background-color: #333;
        color: #fff;
    }
    </style>
</head>

<body>


    <!-- Navbar start -->
    <header>
        <nav class="navbar">
            <img src="image/logoweb.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
            <a href="#" class="navbar-logo">Student<span>Mentality</span>.</a>

            <div class="navbar-nav">
                <a href="home.php">Home</a>
                <a href="insight.php">Daily Insight</a>
                <a href="forum.php">Forum Mahasiswa</a>
                <a href="service.php">Service</a>
                <a href="logout.php">Log Out</a>
            </div>
            <div class="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </nav>
    </header>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <main class="content">
            <h2>Selamat Datang Di,</h2>
            <h1>Student Mentality <span>Health Servis.</span></h1>
            <p>Website Mental Health ini adalah sebuah web yang dirancang khusus untuk membantu para mahasiswa
                dalam
                mengatasi masalah kesehatan mental mereka. Website ini memiliki fitur-fitur yang dapat membantu
                mengidentifikasi masalah kesehatan mental yang umum dihadapi oleh mahasiswa dan memberikan saran
                untuk
                mengatasi masalah tersebut.</p>
            <a href="#" class="oval-button">Baca Selengkapnya</a>
            <img src="image/home.png" />
        </main>
    </section>
    <!-- Hero Section end -->

    <div id=" contents">
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
                case 'forum':
                    include "forum.php";
                    break;
                case 'service':
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