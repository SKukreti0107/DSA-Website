<?php
session_start();

if($_SESSION['logged_in']!=true){
    header("Location:login.php");
    exit;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="sidebar.js"></script>
    <link rel="stylesheet" href="sidebar.css">
</head>



<body>

    <div class="bgImg"></div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Topics</a>
        <a href="logout.php">Logout</a>

    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()"><i class="fa-solid fa-bars"></i></span>


    <section class="Main">

        <ul class="Topics">
            <li><input class="cbox" type="checkbox" name="" id="1"><a href="../TOPICS/introduction.php"> I N T
                    R O D U C T I O N</a></li>
            <li><input class="cbox" type="checkbox" name="" id=""> A R R A Y S </li>
            <li><input class="cbox" type="checkbox" name="" id=""> L I N K E D L I S T</li>
            <li><input class="cbox" type="checkbox" name="" id=""> S T A C K S</li>
            <li><input class="cbox" type="checkbox" name="" id=""> Q U E U E S</li>
            <li><input class="cbox" type="checkbox" name="" id=""> T R E E S</li>
        </ul>




    </section>



</body>


</html>