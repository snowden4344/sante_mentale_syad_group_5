<?php
//    include "include/config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "include/metas.php"; ?>
        <title>Home | Sante Mentale</title>
        <?php include "include/css.php"; ?>
    </head>
    <body>
        <!-- Navigation begins -->
        <?php include "include/navigation.php"; ?>
        <!-- Navigation ends -->

        <!-- Main landing area -->
        <main class="container row align-items-center mx-auto mt-5 mb-5 py-4">
            <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <h1 class=" display-5 text-xl-left text-lg-left text-md-center text-sm-center text-center primary_color">Are you looking to feel better?</h1>
                <h3 class="display-6 py-3 text-dark">You made the right choice joining our caring community. Sante Mentale; "Your southing voice"!</h3>
                <div class="buttons pt-3  col-xl-6 col-lg-6 col-md-6 col-8 my-2 text-uppercase mx-xl-0 mx-lg-0 mx-md-0 mx-auto">
                    <a class="btn btn-primary badge-pill primary_outline primary_bgcolor p-3 col-12" href="slide_questions.php">Get Started</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-9 mx-auto">
                <img class="img-fluid" src="images/doctor.svg" alt="">
            </div>
        </main>
        <!-- Main landing area end -->

        <!-- cards for sample services -->
        <div class="primary_bgcolor py-5">
            <section class="container row mx-auto snippets my-4">
                <div class="chat col-xl-4 col-lg-4 col-md-6 col-10 mx-auto mb-3">
                    <img src="images/chat.svg" class="w-25" alt="">
                    <p class="w-75 mx-auto pt-3 text-light">We provide a platform for you to message our professional  therapists. As a bonus, you can message anyone in our community.</p>
                </div>
                <div class="info col-xl-4 col-lg-4 col-md-6 col-10 mx-auto mb-3">
                    <img src="images/info.svg" class="w-25" alt="">
                    <p class="w-75 mx-auto pt-3 text-light">Apart from messaging, our website provides an encyclopedia for you to look up common mental illnesses and phrases to use.</p>
                </div>
                <div class="face col-xl-4 col-lg-4 col-md-6 col-10 mx-auto mb-3">
                    <img src="images/face.svg" class="w-25" alt="">
                    <p class="w-75 mx-auto pt-3 text-light">This stands to show that this community was built for you and nobody else but you. We care and we understand your pain dear.</p>
                </div>
            </section>
        </div>
        <!-- sample card services end -->

        <!-- same jumbotron but for helping hand image -->
        <section class="py-2 mt-5 helping_hand">
            <div class="container row align-items-center mx-auto py-2">
                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="display-5 text-xl-left text-lg-left text-md-center text-sm-center text-center primary_color">We offer a helping hand</h1>
                    <p class="pt-3 text-dark">It takes a lot of courage to fight alone through your battles. But it takes even more courage to ask for help. We know it's never easy, but we know you made the right choice coming here. We're here for you.</p>
                </div>
                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                    <img class="w-50" src="images/helping_hand.png" alt="">
                </div>
            </div>
        </section>
        <!-- helping hand jumbotron end -->

        <!-- sliding activities section -->
        <section class = " primary_bgcolor py-5">
            <h1 class="text-center text-light display-5">We will help achieve</h1>
            <div class="row align-items-center justify-content-between cards mx-auto">
                <i class="fa fa-angle-left left carousel-control d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none text-light" href = "#theCarousel" data-slide = "prev"></i>
                <div class="carousel slide col-xl-11 col-lg-11 col-md-10 col-sm-10 col-12" id="theCarousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target = "#theCarousel" data-slide-to = "0"></li>
                        <li data-target = "#theCarousel" data-slide-to = "1"></li>
                        <li data-target = "#theCarousel" data-slide-to = "2"></li>
                    </ol>
                    <div class="carousel-inner col-12 mx-auto">
                        <!-- only active carousel-item is visible, keeps switching using javascript from bootstrap -->
                        <div class="carousel-item active">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/meditation.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Meditation</h1>
                                    <p class="pt-3">Meditation in it's simplest form can be so hard to achieve for anyone. Fortunately, our professionals can help you meditate to build your mind up</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/team_spirit.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Communication</h1>
                                    <p class="pt-3">Communication is key in any relationship. It doesn't have to be a romantic relationship. santementale will help break communication barriers you face</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/mindfulness.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Self Reflection</h1>
                                    <p class="pt-3">As a quick tip, during meditation, one gets to reflect on themselves. This helps you to fully understand why you are going through some things you face</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="fa fa-angle-right right carousel-control d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none text-right text-light" href = "#theCarousel" data-slide = "next"></i>
            </div>
        </section>
        <!-- sliding activities end -->

        <!-- meet team -->
        <section class="container mx-auto py-3 mt-5 team">
            <h1 class="display-5 primary_color text-center">Meet Our Team</h1>
            <img src="images/team_spirit.svg" class="w-50" alt="">
        </section>
        <!-- meet team end -->


        <?php include "include/footer.php"; ?>
        <?php include "include/js.php"; ?>
    </body>
</html>

