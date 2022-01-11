<?php

    include "include/config.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "include/metas.php"; ?>
        <title>Read Stories | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
        <?php include "include/navigation.php"; ?>
        <h5 class="primary_color text-capitalize"><a href="story_page.php" class="primary_color"><?php echo $GLOBALS['methods']->get_different_element($_SESSION['user_name'], "user_name", "full_name", "users") ?></a></h5>
            </div>
            <i class="fa fa-navicon d-xl-none d-lg-none text-center" id="navOpen"></i>
        </nav>
        
        <aside class="d-xl-none d-lg-none d-block col-12">
            <div class="col-12 mt-2 mx-auto align-items-center justify-content-around row">
                <div class="py-2 col-12 mx-auto">
                    <p class="col-10 mx-auto text-center"><a href="write.php" class="primary_color">Create Story</a></p>
                </div>
            </div>
        </aside>
        <!-- Navigation ends -->

        <!-- Main landing area -->
        <section class="story_section">
            <aside class="left_side d-xl-block d-lg-block d-none">
                <div class="profile col-12 pt-2 mx-auto secondary_bgcolor">
                    <h5 class="text-light text-center">My Profile</h5>
                    <div class="avatar_name py-2">
                        <div class="avatar col-5 mx-auto">
                            <img src="images/avatar.jpg" class="img-fluid" alt="">
                        </div>
                        <p class="text-white lead text-center col-12 py-4 text-capitalize"><?php echo $GLOBALS['methods']->get_different_element($_SESSION['user_name'], "user_name", "full_name", "users") ?></p>
                        <p class="col-10 mx-auto text-center"><a href="write.php" class="text-white">Create Story</a></p>
                    </div>
                    <hr>
                </div>
                <div class="py-2 col-10 mx-auto">
                    <a href="sign_in.php" class="col-12 btn btn-outline-secondary badge-pill py-3">Sign Out</a>
                </div>
            </aside>
            <main class="main_side">
                <section class="stories col-xl-10 col-lg-10 col-11 mx-auto py-3">
                    <?php

                        $global_story_methods = $GLOBALS['methods'];

                        $numbers_array = $global_story_methods->create_content_shuffled_by_id('story_tb', 'id', 'story_title');

                        for ($k = 0; $k < sizeof($numbers_array); ++$k){
                            echo '<div class="story_one col-12">
                            <div class="story_header py-2">
                                <h5 class="primary_color text-center">Anonymous</h5>
                            </div>
                            <div class="story_body py-3">
                                <h5 class="primary_color pb-2 text-center text-capitalize">'. $global_story_methods->get_different_element($numbers_array[$k], "id", "story_title", "story_tb") . ' </h5>
                                <p class="text-dark actual_story">'. nl2br($global_story_methods->get_different_element($numbers_array[$k], "id", "story", "story_tb")) . ' <span class="see_more invisible">...See More</span> </p>
                            </div>
                        </div>
                        <hr>
                        ';
                        }
                    ?>
                </section>
            </main>
        </section>
        <!-- Main landing area end -->

        <?php include "include/js.php"; ?>
    </body>
</html>

