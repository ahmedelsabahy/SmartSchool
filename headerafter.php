<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>
    <div class="super_container">

        <header class="header d-flex flex-row" style="margin-top: 5px;">
            <div class="header_content d-flex flex-row align-items-center">

                <div class="logo_container">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                        <span>course</span>
                    </div>
                </div>

                <nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="index.php">home</a></li>
                            <li class="nav-item dropdown main_nav_item">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                courses
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    include_once "admissions.php";
                                    $admiss = new addmissions();
                                    $val = $admiss->getdate();
                                    while ($row = mysqli_fetch_assoc($val)) {
                                    ?>
                                        <a class="dropdown-item" href="courses.php?id=<?php echo $row["adid"] ?>"><?php echo $row["addname"]; ?></a>

                                    <?php } ?>
                                </div>
                            </li>
                            <li class="main_nav_item"><a href="applysmart.php">admissions</a></li>
                            <li class="main_nav_item"><a href="contact.php">contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header_side d-flex flex-row justify-content-around align-items-center">
                <li class="main_nav_item "> <a href="profile.php" style="color:#3A3A3A; margin-left: 20px;"> <?php echo $_SESSION["name"]  ?> </a> </li>
                <li class="main_nav_item"> <a style="color:#3A3A3A; margin-right: 20px; " href="logout.php">LOG OUT</a></li>
            </div>

            <div class="hamburger_container">
                <i class="fas fa-bars trans_200"></i>
            </div>
        </header>






        <div class="menu_container menu_mm">

            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                    <li class="main_nav_item"><a href="index.php">home</a></li>
                            <li class="nav-item dropdown main_nav_item">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    courses
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    include_once "admissions.php";
                                    $admiss = new addmissions();
                                    $val = $admiss->getdate();
                                    while ($row = mysqli_fetch_assoc($val)) {
                                    ?>
                                        <a class="dropdown-item" href="courses.php?id=<?php echo $row["adid"] ?>"><?php echo $row["addname"]; ?></a>

                                    <?php } ?>
                                </div>
                            </li>
                            <li class="main_nav_item"><a href="applysmart.php">admissions</a></li>
                            <li class="main_nav_item"><a href="contact.php">contact</a></li>
                    </ul>

                    <div class="menu_social_container menu_mm">
                        <ul class="menu_social menu_mm">
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
                </div>
            </div>
        </div>