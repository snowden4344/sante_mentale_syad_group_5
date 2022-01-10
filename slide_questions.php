<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php include "include/metas.php"; ?>
    <title>Home | Sante Mentale</title>
    <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
        <?php include "include/navigation.php"; ?>

        <?php

            $GLOBALS['db_connect']->setTableName("questionnaire");
            $error = "";
            $user_gender = $user_trouble = $user_aid = $user_therapist_decision = $user_therapist_gender = $user_trouble_time = "";

            if(isset($_POST['submit'])){

                $user_gender = $_POST['gender_selection'];
                $user_trouble = $_POST['trouble_selection'];
                $user_trouble_time = $_POST['time_selection'];
                $user_aid = $_POST['aid_yourself'];
                $user_therapist_decision = $_POST['therapist'];
                $user_therapist_gender = $_POST['therapist_choice'];
                $user_name = $_SESSION['user_name'];

                if($GLOBALS['methods']->check_if_exists($_SESSION['user_name'], "user_name", "questionnaire")){
                    $sql = "INSERT INTO questionnaire (user_gender, user_trouble, user_trouble_time, user_aid, user_therapist, user_therapist_choice, user_name) 
                            VALUES ('$user_gender', '$user_trouble', '$user_trouble_time', '$user_aid', '$user_therapist_decision', '$user_therapist_gender', '$user_name')";
                    $GLOBALS['connection']->query($sql);
                    header("location: home.php");
                    exit();
                }
               else
                   $error = "You already submitted your questionnaire";
            }



        ?>
        <!-- Navigation ends -->

        <div class="submit_error <?php echo empty($error) ? '' : 'visible_error'; ?> ">
            <p class="lead text-danger text-center">You cannot submit a questionnaire twice</p>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="col-10 mt-4 py-4 row justify-content-between mx-auto" method="post" >
            <div class="form-group col-xl-5 col-lg-5 col-10 mx-xl-0 mx-lg-0 mx-auto my-3">
                <label for="Gender" class="d-block primary_color">Gender</label>
                <select name="gender_selection" class="form-control d-block" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-xl-5 col-lg-5 col-10 mx-xl-0 mx-lg-0 mx-auto my-3">
                <label for="Trouble" class="d-block primary_color">What seems to be the trouble?</label>
                <select name="trouble_selection" class="form-control d-block" id="">
                    <option value="stress">Stress</option>
                    <option value="anxiety">Anxiety</option>
                    <option value="depression">Depression</option>
                    <option value="idk">I don't know</option>
                </select>
            </div>
            <div class="form-group col-xl-5 col-lg-5 col-10 mx-xl-0 mx-lg-0 mx-auto my-3">
                <label for="TimeFelt" class="d-block primary_color">How long have you felt like this?</label>
                <select name="time_selection" class="form-control d-block" id="">
                    <option value="day">A day</option>
                    <option value="less_week">Less than a week</option>
                    <option value="more_week">More than a week</option>
                    <option value="more_month">More than a month</option>
                </select>
            </div>
            <div class="form-group col-xl-5 col-lg-5 col-10 mx-xl-0 mx-lg-0 mx-auto my-3">
                <label for="ingested" class="d-block primary_color">What did you use to aid yourself?</label>
                <select name="aid_yourself" class="form-control d-block" id="">
                    <option value="medicine">Medicine</option>
                    <option value="music">Music</option>
                    <option value="books">Books</option>
                    <option value="friends">Friends</option>
                    <option value="nothing">Nothing</option>
                </select>
            </div>
            <div class="form-group col-xl-5 col-lg-5 col-10 mx-xl-0 mx-lg-0 mx-auto my-3">
                <label for="therapist" class="d-block primary_color">Would you like to talk to a therapist?</label>
                <select name="therapist" class="form-control d-block" id="">
                    <option value="yes">Yes</option>
                    <option value="yes_later">Maybe later</option>
                    <option value="no">No</option>
                    <option value="not_decided">Not decided yet</option>
                </select>
            </div>
            <div class="form-group col-xl-5 col-lg-5 col-10 mx-xl-0 mx-lg-0 mx-auto my-3">
                <label for="therapist_choice" class="d-block primary_color">Choose the gender you're comfortable talking to</label>
                <select name="therapist_choice" class="form-control d-block" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="any">Any</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-xl-5 col-lg-5 col-10 my-3 mx-auto">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary primary_bgcolor col-12 primary_outline py-3">
            </div>
        </form>

        <?php include "include/js.php"; ?>
  </body>
</html>
