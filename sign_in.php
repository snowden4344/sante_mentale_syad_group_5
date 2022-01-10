<?php

    include "include/config.php";


    $user_name = $password = "";
    $user_name_error = $password_error = "";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user_name = $GLOBALS['purify']->strip_quotes($_POST['user_name']);
        $password = $GLOBALS['purify']->strip_quotes($_POST['password']);
        $user_name_error = $GLOBALS['purify']->generate_empty_error($user_name);
        $password_error = $GLOBALS['purify']->generate_empty_error($password);


        if(empty($user_name_error) && empty($password_error)){
            if($GLOBALS['methods']->compare_elements($user_name, "password", $password, "user_name", "users" )){
                $_SESSION['user_name'] = $user_name;
                $_SESSION['logged_in'] = true;
                header("Location: home.php");
                exit();
            }
            else
                $password_error = "Wrong username or password";
        }

    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <?php include "include/metas.php"; ?>
        <title>Login | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
        <?php include "include/nav2.php"; ?>
        <!-- Navigation ends -->

        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 col-12 mt-5 mx-auto">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="col-12 box_shadowed py-4 mx-auto">
                <h2 class="primary_color text-center pt-5 pb-2">Sign In</h2>
                <div class=" form-group px-0 my-2 py-1 col-11 mx-auto">
                    <input type="text" name="user_name" class="form-control py-2 <?php echo !empty($user_name_error) ? 'is-invalid' : '' ?>" value = "<?php echo $user_name ?>" placeholder="Username">
                    <div class="invalid-feedback"> <?php echo $user_name_error?> </div>
                </div>
                <div class="form-group px-0 my-2 py-1 col-11 mx-auto">
                    <input type="password" name="password" class="form-control py-2 <?php echo !empty($password_error) ? 'is-invalid' : '' ?>" value = '<?php echo "$password" ?>' placeholder="Password">
                    <div class="invalid-feedback"> <?php echo $password_error?> </div>
                </div>
                <div class="form-group my-3 pt-1 pb-3 col-11 mx-auto px-0">
                    <input type="submit" name="submit" value="Sign In" class="form-control btn btn-primary primary_outline primary_bgcolor mb-4 py-2">
                    <div class="form_links">
                        <p class="text-center text-dark">Don't have an account? <a href="sign_up.php" class="primary_color">Register</a> </p>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>

