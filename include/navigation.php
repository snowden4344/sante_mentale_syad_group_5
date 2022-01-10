<?php
    include "include/config.php";
?>

<nav class = "navbar navbar-expand-lg navbar-expand-xl pt-2 col-12 mx-auto bg-white sticky-top">
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-5 mx-auto">
        <a href="home.php" class="col-12">
            <img src="images/sante_mentale.png" class="img-fluid" alt="">
        </a>
    </div>
    <div class="navbar-collapse justify-content-center col-xl-7 col-lg-7" id="navSide">
        <i class="fa fa-times d-xl-none d-lg-none text-center" id="navClose"></i>
        <ul class = "nav">
            <li class="nav-item px-2"> <a href="home.php" class = "primary_color nav-link px-4">Home</a> </li>
            <li class="nav-item px-2"> <a href="about.php" class = "primary_color nav-link px-4">About</a> </li>
            <li class="nav-item px-2 hover_list_parent"> <a href="#" class = "primary_color nav-link px-4">Stories  </a>
                <ul class="primary_color hover_list list-unstyled col-12 text-center box_shadowed_light">
                  <li> <a href="story_page.php" class="nav-link">Read</a> </li>
                  <li> <a href="write.php" class="nav-link">Write</a> </li>
                </ul>
            </li>
            <li class="nav-item px-2"> <a href="forum.php" class = "primary_color nav-link px-4">Forums</a> </li>
        </ul>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-5">
        <h5 class="primary_color text-capitalize"><a href="story_page.php" class="primary_color"><?php echo $GLOBALS['methods']->get_different_element($_SESSION['user_name'], "user_name", "full_name", "users") ?></a></h5>
    </div>
    <i class="fa fa-navicon d-xl-none d-lg-none text-center" id="navOpen"></i>
</nav>
