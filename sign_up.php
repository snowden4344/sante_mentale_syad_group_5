<?php



    include "include/config.php";
    
    $user_name = $full_name = $password = $email = $confirm_password = "";
    $user_name_error = $full_name_error = $password_error = $email_error = $confirm_password_error = "";
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $full_name = $GLOBALS['purify']->strip_quotes($_POST['full_name']);
        $user_name = $GLOBALS['purify']->strip_quotes($_POST['user_name']);
        $email = $GLOBALS['purify']->strip_quotes($_POST['email']);
        $password = $GLOBALS['purify']->strip_quotes($_POST['password']);
        $confirm_password = $GLOBALS['purify']->strip_quotes($_POST['confirm_password']);
        $full_name_error = $GLOBALS['purify']->generate_empty_error($full_name);
        $user_name_error = $GLOBALS['purify']->generate_empty_error($user_name);
        $password_error = $GLOBALS['purify']->generate_empty_error($password);
        $confirm_password_error = $GLOBALS['purify']->generate_empty_error($confirm_password);
        $email_error = $GLOBALS['purify']->generate_empty_error($email);

        if(empty($full_name_error) && empty($user_name_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error)){
            if($GLOBALS['methods']->check_if_exists($user_name, "user_name", "users") && ($password === $confirm_password)){
                $sql = "INSERT INTO `users` (user_name, full_name, password, email) VALUES ('$user_name', '$full_name', '$password','$email')";

                $GLOBALS['connection']->query($sql);

                header("Location: sign_in.php");
                exit();
            }
            elseif ($GLOBALS['methods']->check_if_exists($user_name, "user_name", "users") && ($password !== $confirm_password)){
                $confirm_password_error = " doesn't match with password";
            }
            else
                $user_name_error = " already exists";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include "include/metas.php"; ?>
        <title>Register | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
        <?php include "include/nav2.php"; ?>
        <!-- Navigation ends -->
        <div class="container mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="col-xl-8 col-lg-9 col-11 box_shadowed pt-4 pb-2 mx-auto" method="post">
                <h2 class="primary_color text-center">Sign Up</h2>
                <div class="row justify-content-between col-11 mx-auto">
                    <div class=" form-group px-0 my-2 py-1 col-xl-5 col-lg-5 col-11 mx-lg-0 mx-xl-0 mx-auto">
                        <input type="text" name="full_name" class="form-control py-2 <?php echo !empty($full_name_error) ? 'is-invalid' : '' ?>" value = '<?php echo "$full_name" ?>' placeholder="Full Name">
                        <div class="invalid-feedback"> <?php echo "Full Name". $full_name_error ?> </div>
                    </div>
                    <div class=" form-group px-0 my-2 py-1 col-xl-5 col-lg-5 col-11 mx-lg-0 mx-xl-0 mx-auto">
                        <input type="text" name="user_name" class="form-control py-2 <?php echo !empty($user_name_error) ? 'is-invalid' : '' ?>" value = '<?php echo "$user_name" ?>' placeholder="Username">
                        <div class="invalid-feedback"> <?php echo "Username". $user_name_error ?> </div>
                    </div>
                    <div class="form-group px-0 my-2 py-1 col-xl-5 col-lg-5 col-11 mx-lg-0 mx-xl-0 mx-auto">
                        <input type="email" name="email" class="form-control py-2 <?php echo !empty($email_error) ? 'is-invalid' : '' ?>" value = '<?php echo "$email" ?>' placeholder="Email">
                        <div class="invalid-feedback"> <?php echo "Email". $email_error ?> </div>
                    </div>
                    <div class="form-group px-0 my-2 py-1 col-xl-5 col-lg-5 col-11 mx-lg-0 mx-xl-0 mx-auto">
                        <input type="password" name="password" class="form-control py-2 <?php echo !empty($password_error) ? 'is-invalid' : '' ?>" value = '<?php echo "$password" ?>' placeholder="Password">
                        <div class="invalid-feedback"> <?php echo "Password". $password_error?> </div>
                    </div>
                    <div class="form-group px-0 my-2 py-1 col-xl-5 col-lg-5 col-11 mx-lg-0 mx-xl-0 mx-auto">
                        <input type="password" name="confirm_password" class="form-control py-2 <?php echo !empty($confirm_password_error) ? 'is-invalid' : '' ?>" value = '<?php echo "$confirm_password" ?>' placeholder="Confirm Password">
                        <div class="invalid-feedback"> <?php echo "Confirmed password". $confirm_password_error ?> </div>
                    </div>
                </div>
                <div class="form-group my-3 pt-1 pb-2 col-xl-7 col-lg-7 col-10 mx-auto">
                    <input type="submit" value="Sign Up" class="form-control btn btn-primary primary_outline primary_bgcolor mb-4 py-2">
                    <div class="form_links">
                        <p class="text-center text-dark">Already a member? <a href="sign_in.php" class="primary_color">Login</a> </p>
                    </div>
                </div>

            </form>
        </div>
        <?php include "include/js.php"; ?>
    </body>
</html>
