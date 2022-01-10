<?php include "include/config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "include/metas.php"; ?>
        <title>Welcome | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>

    <?php include "include/nav2.php"; ?>

    <!-- Main landing area -->
            <div class="container col-xl-12 py-4 mt-4">
                <div class="carousel slide py-4" id="theCarousel" data-ride = "carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="display-5 text-center primary_color">Welcome to <i class="primary_color">santementale</i></h1>
                            <p class="my-3 text-dark text-center" id="welcome_words"></p>
                            <div class="proceed col-xl-4 col-lg-5 col-md-6 col-8 mx-auto my-5">
                                <a href="#theCarousel" id="yes_btn" data-slide="next" class="btn btn-primary primary_bgcolor primary_outline badge-pill py-3 my-2 col-12 carousel-control" >Yes!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-5 text-center primary_color">What's it like on the home page?</h1>
                            <div class="image_preview col-7 mx-auto my-3">
                                <img src="images/presentation/home.png" alt="Home page" class="img-fluid">
                            </div>
                            <p class="my-3 text-dark col-9 mx-auto">Our home page is packed with a user friendly presentationduction to mental health care.
                             It show-casts a snapshot of everything we have to offer as a community.
                            </p>
                            <div class="proceed col-xl-4 col-lg-5 col-md-6 col-8 mx-auto my-5">
                                <a href="#theCarousel" data-slide="next" class="btn btn-primary primary_bgcolor primary_outline badge-pill py-3 my-2 col-12 carousel-control" >Proceed!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-5 text-center primary_color">How about the about page?</h1>
                            <div class="image_preview col-7 mx-auto my-3">
                                <img src="images/presentation/about.png" alt="About page" class="img-fluid">
                            </div>
                            <p class="my-3 text-dark col-9 mx-auto">
                                Our about page stands to tell you everything you need to know about us and everything you want to know about the
                                various mental illnesses we'd gladly help with.
                            </p>
                            <div class="proceed col-xl-4 col-lg-5 col-md-6 col-8 mx-auto my-5">
                                <a href="#theCarousel" data-slide="next" class="btn btn-primary primary_bgcolor primary_outline badge-pill py-3 my-2 col-12 carousel-control" >Proceed!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-5 text-center primary_color">What of the stories page?</h1>
                            <div class="image_preview col-7 mx-auto my-3">
                                <img src="images/presentation/story_page.png" alt="Story page" class="img-fluid">
                            </div>
                            <p class="my-3 text-dark col-9 mx-auto">
                                We know, and you know too, that everyone has a story to tell. We provide a platform to let your voice be heard.
                                It doesn't matter what you've been holding in. Your story is welcome to our page, just as you are.
                            </p>
                            <div class="proceed col-xl-4 col-lg-5 col-md-6 col-8 mx-auto my-5">
                                <a href="#theCarousel" data-slide="next" class="btn btn-primary primary_bgcolor primary_outline badge-pill py-3 my-2 col-12 carousel-control" >Proceed!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-5 text-center primary_color">A forums page?</h1>
                            <div class="image_preview col-7 mx-auto my-3">
                                <img src="images/presentation/direct_forum.png" alt="Story page" class="img-fluid">
                            </div>
                            <p class="my-3 text-dark col-9 mx-auto">
                                There are often times when we all just want to discuss some issues. The forum page contains links to forums
                                like the shown above to allow discussions.
                            </p>
                            <div class="proceed col-xl-4 col-lg-5 col-md-6 col-8 mx-auto my-5">
                                <a href="#theCarousel" data-slide="next" class="btn btn-primary primary_bgcolor primary_outline badge-pill py-3 my-2 col-12 carousel-control" >Proceed!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-5 text-center primary_color">Where will I write my story?</h1>
                            <div class="image_preview col-7 mx-auto my-3">
                                <img src="images/presentation/story_page.png" alt="Write page" class="img-fluid">
                            </div>
                            <p class="my-3 text-dark col-9 mx-auto">
                                We've got a page just for you. We want everyone to be heard. You can speak your mind at your own free will. Nobody's gonna
                                stop you. To do all this, press the button below to sign in if you have an account or sign up to create one.
                            </p>
                            <div class="proceed col-xl-4 col-lg-5 col-md-6 col-8 mx-auto my-5">
                                <a href="sign_in.php" class="btn btn-primary primary_bgcolor primary_outline badge-pill py-3 my-2 col-12 carousel-control" >Sign Me Up!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Main landing area end -->
        <script src="src/js/textWriter.js" charset="utf-8"></script>
        <?php include "include/js.php"; ?>
    </body>
</html>
