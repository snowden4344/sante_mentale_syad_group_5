<?php
    include "include/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "include/metas.php"; ?>
        <title>Forums | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
        <?php include "include/navigation.php"; ?>
        <h5 class="primary_color text-capitalize"><a href="story_page.php" class="primary_color"><?php echo $GLOBALS['methods']->get_different_element($_SESSION['user_name'], "user_name", "full_name", "users") ?></a></h5>
            </div>
            <i class="fa fa-navicon d-xl-none d-lg-none text-center" id="navOpen"></i>
        </nav>
        <!-- Navigation ends -->

        <!-- Discussion formum begins -->
        <div class="container">
            <div class=" py-2">
                <h2 class="text-center card-title primary_color">Support Communities</h2>
            </div>
            <p class="text-center"><a href="discussion_forum_upload.php" class="primary_color">Create your own forum</a></p>
            <div class="row mx-auto justify-content-around">
                <?php

                    $global_forum_methods = $GLOBALS['methods'];

                    $numbers_array = $global_forum_methods->create_content_shuffled_by_id('forum_tb', 'forum_id', 'forum_title');

                    for ($k = 0; $k < sizeof($numbers_array); ++$k){
                        echo ' <div class="col-xl-5 col-lg-5 col-md-5 col-11 my-2 py-3 rounded px-3 text-xl-left text-lg-left text-md-left text-center secondary_bgcolor">
                            <div class=" ">
                            <h4 class="direct_forum_link" ><a href="#" onclick="log_element_value(this)" class="text_grey">'. $global_forum_methods->get_different_element($numbers_array[$k], "forum_id", "forum_title", "forum_tb") . '</a></h4>
                            <p class="text-white lead py-2">'. $global_forum_methods->get_different_element($numbers_array[$k], "forum_id", "forum_description", "forum_tb") .'</p>
                            <p class="card-text text-white">By ' . $global_forum_methods->get_different_element($numbers_array[$k], "forum_id", "user_name", "forum_tb") . '</p>
                            </div>
                            </div>' ;
                    }
                ?>
            </div>
        </div>
            <!-- Discussion forum ends here -->

        <?php include "include/footer.php"; ?>
        <?php include "include/js.php"; ?>
        <script src="src/js/forum_page.js"></script>
    </body>
</html>

