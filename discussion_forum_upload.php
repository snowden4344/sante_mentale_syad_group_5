<?php
    include "include/config.php";
    $forum_title = "";
    $forum_body = "";
    $forum_description = "";
    $forum_title_error = "";
    $forum_error = "";
    $GLOBALS['db_connect']->setTableName('forum_db');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $forum_body = $GLOBALS['purify']->strip_quotes($_POST['forum_body']);
        $forum_title = $GLOBALS['purify']->strip_quotes($_POST['forum_title']);
        $user_name = $_SESSION['user_name'];
        $forum_description = $GLOBALS['purify']->strip_quotes($_POST['forum_description']);
        $forum_title_error = $GLOBALS['purify']->generate_empty_error($forum_title);
        $forum_body_error = $GLOBALS['purify']->generate_empty_error($forum_body);
        $forum_description_error = $GLOBALS['purify']->generate_empty_error($forum_description);

    
        if(empty($forum_title_error) && empty($forum_error) && empty($forum_description_error)) {
            $sql = "INSERT INTO forum_tb (forum_title, forum_description, forum_body, user_name) VALUES ('$forum_title', '$forum_description' , '$forum_body', '$user_name')";
            if ($GLOBALS['connection']->query($sql) == true){
                header("location: direct_forum.php?forum_title=".$forum_title);
                exit();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include "include/metas.php"; ?>
        <title>Create forum | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
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
                        <ul class="primary_color hover_list list-unstyled col-12 text-center box_shadowed_light bg-white">
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
        <!-- Navigation ends -->
        <div>
            <div class="container" id="write">
                <h2 class="text-center primary_color">My Forum</h2>
                <div class=”input-group”>
                    <div class=”input-group-prepend”>
                        <h3 class="text-dark text-center">Type your forum here</h3>
                    </div>
        
               <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="col-xl-5 col-lg-6 col-md-9 col-11 mx-auto mt-5 py-2">
                        <div class="form-group my-3">
                            <label for="title">Title</label>
                            <input type="text" name="forum_title" class="form-control py-2 <?php echo !empty($forum_title_error) ? 'is-invalid' : '' ?> "  value='<?php echo "$forum_title"?>'>
                            <div class="invalid-feedback"><?php echo "forum title " . $forum_title_error ?></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="forum">Description</label>
                            <textarea class="form-control py-2 <?php echo !empty($forum_description_error) ? 'is-invalid' : '' ?>" name="forum_description" cols="30" rows="3"><?php echo "$forum_description"?></textarea>
                            <div class="invalid-feedback"><?php echo "forum " . $forum_description_error ?></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="forum">Body</label>
                            <textarea class="form-control py-2 <?php echo !empty($forum_body_error) ? 'is-invalid' : '' ?>" name="forum_body" cols="30" rows="10"><?php echo "$forum_body"?></textarea>
                            <div class="invalid-feedback"><?php echo "forum " . $forum_body_error ?></div>
                        </div>
                        <div class="form-group row justify-content-between my-3">
                            <input type="submit" value="Post" name="submit" class="btn btn-primary primary_bgcolor primary_outline col-5 badge-pill py-2 btn-primary">
                            <input type="reset" value="Clear" name="reset" class="btn btn-danger col-5 badge-pill py-2 btn-primary">
                        </div>
                    </form>
                </div>
        
            </div>
        </div>
        
        
        </section>
        
        <!-- footer -->
        <?php include "include/footer.php"; ?>
        <?php include "include/js.php"; ?>
    </body>
</html>

