<?php
    
    include "include/config.php";
    
    if (empty($_GET['forum_title'])){
        header("location: forum.php");
    }

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
        <?php include "include/navigation.php";?>
        <h5 class="primary_color text-capitalize"><a href="story_page.php" class="primary_color"><?php echo $GLOBALS['methods']->get_different_element($_SESSION['user_name'], "user_name", "full_name", "users") ?></a></h5>
            </div>
            <i class="fa fa-navicon d-xl-none d-lg-none text-center" id="navOpen"></i>
        </nav>
        <!-- Navigation ends -->
        <?php
        //    include "include/config.php";

//        $_SESSION['forum_title'] = "Depression";

        if (isset($_GET['forum_title'])){
            $_SESSION['forum_title'] = $_GET['forum_title'];
            $forum_title = $_GET['forum_title'];
        }
        else
            $forum_title = $_SESSION['forum_title'];


        $GLOBALS['forum_connection'] = new mysqli("localhost", "id18258730_sante_mentale_v2", "syadgroup5@SanteMentale", "id18258730_forum_comments");

        $current_comment = "";
        $current_user = "";
        $current_comment_error = "";

        function cleanse_table_name($table){
            $table_lower= strtolower($table);
            return preg_replace("/\s/","_",$table_lower);
        }

        function check_if_table_exists($proposed_name){
            $table_name = cleanse_table_name($proposed_name);

            $s_query = "SELECT 1 FROM `$table_name`";

            return $GLOBALS['forum_connection']->query($s_query);
        }

        function create_table($name_proposed){
            $name_to_use = cleanse_table_name($name_proposed);
            if(!check_if_table_exists($name_to_use)){
                $sql = "CREATE TABLE `$name_to_use`(
                        id INT(11) AUTO_INCREMENT PRIMARY KEY,
                        user_name VARCHAR(30),
                        user_comment MEDIUMTEXT 
                    )";
                $GLOBALS['forum_connection']->query($sql);
            }
        }

        function check_rows_existence($table_name) : int{
            $name_to_use = cleanse_table_name($table_name);

            $sql = "SELECT * FROM `$name_to_use`";

            if($GLOBALS['forum_connection']->query($sql) == true){
                return $GLOBALS['forum_connection']->query($sql)->num_rows;
            }
            else
                return 0;
        }

        function get_different_element($requested_element, $db_key, $field_wanted, $table_name) : string{
            $sql = "SELECT `$field_wanted` FROM `$table_name` WHERE `$db_key` = '$requested_element'";
            $result = $GLOBALS['forum_connection']->query($sql);

            return $result->fetch_assoc()[$field_wanted];
        }

        function create_content_shuffled_by_id_2($table_name, $db_key, $field_wanted) : array{
            $table_name_used = cleanse_table_name($table_name);
            $sql = "SELECT * FROM `$table_name_used`";

            $numbers = 0;

            if ($GLOBALS['forum_connection']->query($sql) == true)
                $numbers = $GLOBALS['forum_connection']->query($sql)->num_rows;

            $numbers_array = array();

            for($i = 1, $j = 0; $i <= $numbers; $i++, $j++){
                $my_sql = "SELECT `$field_wanted` FROM `$table_name` WHERE `$db_key` = '$i'";
                if($GLOBALS['forum_connection']->query($my_sql)->num_rows > 0){
                    $numbers_array[$j] = $i;
                }
                else{
                    $numbers++;
                    $j--;
                }
            }
            return $numbers_array;
        }

        $_SESSION['forum_title'] = $_GET['forum_title'] = $forum_title;

        ?>
        <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $current_comment = $GLOBALS['purify']->strip_quotes($_POST['written_comment']);
                $current_user = $_SESSION['user_name'];
                $current_comment_error = $GLOBALS['purify']->generate_empty_error($current_comment);
                $current_table = cleanse_table_name($forum_title);

                if(empty($current_comment_error)){
                    $sql = "INSERT INTO `$current_table` (user_name, user_comment) VALUES ('$current_user', '$current_comment')";
                    $GLOBALS['forum_connection']->query($sql);

                }
                else{
                    $current_comment_error = "Can't post blank comment";
                }


            }
        ?>
        <!-- Discussion formum begins -->
        <div class="forum col-12 mx-auto px-0">
            <div class="top_section col-12 py-5 bg-light">
                <p class="text-center"><a href="discussion_forum_upload.php" class="primary_color">Create your own forum</a></p>
                <div class="form_title col-9 mx-auto">
                    <h2 class="primary_color"><?php echo $GLOBALS['methods']->get_element($_GET['forum_title'], "forum_title", "forum_tb" ) ?></h2>
                    <p class="lead secondary_color forum_body">By <?php echo $GLOBALS['methods']->get_different_element($_GET['forum_title'], "forum_title", "user_name", "forum_tb" ) ?> </p>
                </div>
                <div class="forum_body col-9 mx-auto mt-4">
                    <p class="text-dark"><?php echo $GLOBALS['methods']->get_different_element($_GET['forum_title'], "forum_title", "forum_body", "forum_tb" ) ?></p>
                </div>
            </div>
            <div class="forum_comment_section py-4 bg-dark">
                <div class="comments col-10 mx-auto">
                    <h2 class="text_grey text-center">Comments</h2>
                    <ul class="comment_list list-unstyled col-12 overflow-auto pb-5">
                        <?php
                            create_table($forum_title);

                            if(check_rows_existence($forum_title) > 0){
                                $global_forum_methods = $GLOBALS['methods'];
                                $numbers_array = create_content_shuffled_by_id_2(cleanse_table_name($forum_title), 'id', 'user_name');

                                for($k = 0; $k < sizeof($numbers_array); ++$k){
                                    echo '
                                        <li class="badge-pill bg-grey py-2 my-3">
                                            <p class="col-11 mx-auto mb-0 primary_color">'. get_different_element($numbers_array[$k], "id", "user_name", cleanse_table_name($forum_title)) .'</p>
                                            <p class="comment_content col-11 mx-auto mb-0">'. get_different_element($numbers_array[$k], "id", "user_comment", cleanse_table_name($forum_title)) .'</p>
                                        </li>
                                    ';
                                }
                            }


                        ?>
                    </ul>
                </div>
                <div class="write_comment col-12 secondary_bgcolor">
                    <form action="<?php echo 'direct_forum.php?forum_title=' . $forum_title ?>" class="col-xl-7 col-lg-8 col-md-9 col-11 py-2 mx-auto" method="post">
                        <div class="form-group">
                            <div class="input_elements row">
                                <textarea name="written_comment" class="form-control bg-grey col-8 rounded-pill py-3 <?php echo empty($current_comment_error) ? '' : 'is-invalid'  ?> " rows="1"></textarea>
                                <input type="submit" value="Comment" class="col-4 py-3 btn badge-pill btn-primary primary_bgcolor primary_outline">
                                <div class="invalid-feedback col-12"><?php echo $current_comment_error ?></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Discussion forum ends here -->

        <?php include "include/js.php"; ?>
        <script src="src/js/comments.js"></script>
    </body>
</html>


