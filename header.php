<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nano Nest</title>

    <!--owl-carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <?php
    require('function.php');
    ?>

    <?php

    session_start();
    // USER AUTHENTICATION
    $u = 0;
    if (isset($_SESSION['id'])) {
        $sql = "SELECT * FROM user WHERE id = " . $_SESSION['id'];
        $u = ($db->query($sql))->fetch_assoc();
    }

    ?>


</head>

<body>


    <!-- Main-->
    <main id="main-site">


        <!-- Header-->
        <header id="header">
            <div class="strip flex justify-between items-center p-4 py-1 bg-gray-100">
                <p class="font-body text-xs text-gray-500 m-0">Brac UniversityKha 224 Bir Uttam Rafiqul Islam AvenueMerul BaddaDhaka 1212. cont:01700000001</p>
            </div>


            <!-- #|@navbar -->
            <div class="header-m">
                <div class="header-left-search">
                    <form action="" class="header-search-form" method="get" action="search.php">
                        <input type="text" class="header-search-input form-control" id="searchInput" placeholder="Search">
                        <button class="header-search-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <div id="searchSuggestions" class="searchCart"></div>
                    </form>
                </div>


                <div class="header-mid-logo">
                    <div class="main-logo">
                        <a href="http://localhost/nanonestphp/NanoNestPro/index.php?">
                            <img src="./assets/logo.svg" class="logo">
                        </a>
                    </div>
                </div>

                <div class="header-right-widget">
                    <ul class="widget-icon">
                        <?php if ($u == 0) { ?>
                            <li class="widget-item">
                                <a href="login.php" class="widget-link">
                                    <i class="fa-regular fa-user"></i>
                                    <span>LOG IN</span>
                                </a>
                            </li>

                        <?php } else { ?>
                            <div class="dropdown">
                                <button class="dropbtn"><?= $u['full_name'] ?> &#9662;</button>
                                <div class="dropdown-content">
                                    <a href="profile.php">Profile</a>
                                    <?php

                                    if (isset($_POST['btn_logout'])) {
                                        $u = 0;
                                        unset($_SESSION['id']);
                                        header("Location: login.php");
                                    }

                                    ?>
                                    <form method="POST">
                                        <button class="btn btn-danger w-75 mx-4" class="dropdown-item" type="submit" name="btn_logout">Logout</button>
                                    </form>
                                </div>
                            </div>

                        <?php } ?>


                        <?php

                        ?>

                        <li class="widget-item">


                            <?php if ($u == 0) { ?>
                                <a href="login.php" class="widget-link">
                                    <i class="fa-regular fa-heart fa-fw"></i>
                                    <span>WISHLIST</span>
                                </a>
                            <?php } else {; ?>

                                <a href="wishlist.php" class="widget-link">
                                    <i class="fa-regular fa-heart fa-fw"></i>
                                    <span>WISHLIST</span>
                                </a>

                            <?php } ?>
                        </li>
                        <li class="widget-item">
                            <a href="cart.php" class="widget-link">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>CART</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav id="navigation" class="header-navbar flex flex-row #items-center justify-center max-w-full w-full border-b-gray-300 h-[59px]">
                <ul class="justify-center items-stretch flex flex-row flex-nowrap list-none">
                    <li class="first:pl-0 px-[15px]"><a href="whatsnew.php" class="text-[13px] p-0 nav-li-hov"><span class="inner-link">What's New</span></a></li>
                    <li class="px-[15px]"><a href="./trending.php" class="text-[13px] p-0 nav-li-hov">Trending</a></li>
                    <li class="px-[15px]"><a href="brands.php" class="text-[13px] p-0 nav-li-hov">Brands</a></li>
                    <li class="px-[15px]"><a href="#" class="text-[13px] p-0 nav-li-hov">Outlets</a></li>

                </ul>
            </nav>

            <!-- #|@navbar -->


        </header>
        <!-- Header-->