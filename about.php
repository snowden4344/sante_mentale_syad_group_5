<?php
    include "include/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "include/metas.php"; ?>
        <title>About | Sante Mentale</title>
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

        <!-- Main landing area -->
        <main class="container row align-items-center mx-auto mt-5 py-3">
            <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <h1 class="display-5 text-xl-left text-lg-left text-md-center text-sm-center text-center primary_color">Are you looking for assistance?</h1>
                <h3 class="display-6 py-3 text-dark">Below are some types of mental illness and challenges being faced by most individuals.   </h3>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-9 mx-auto">
                <img class="img-fluid" src="images/illnesses.png" alt="">
            </div>
        </main>

        <!-- cards for common mental illnesses -->
        <section class="infocards py-4 my-5 primary_bgcolor">
            <h2 class="text-center text-light">Common Mental Illnesses</h2>
            <div class="row container mx-auto justify-content-between">
                <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-12 mx-auto col-12 my-2">
                    <div class="card-body row align-items-center">
                        <div class="card-image col-4">
                            <img src="images/infodark0.svg" class="w-75" alt="">
                        </div>
                        <div class="card_words col-8">
                            <h3 class="primary_color">Depression</h3>
                            <p class="card-text">The persistent feeling of sadness or loss of interest that can lead to physical symptoms</p>
                            <a href="https://en.m.wikipedia.org/wiki/Depression_(mood)" target="_blank" class="btn btn-primary primary_bgcolor primary_outline col-xl-5 col-lg-5 col-md-6 col-12 py-2">More</a>
                        </div>
                    </div>
                </div>
                <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-12 mx-auto col-12 my-2">
                    <div class="card-body row align-items-center">
                        <div class="card-image col-4">
                            <img src="images/infodark0.svg" class="w-75" alt="">
                        </div>
                        <div class="card_words col-8">
                            <h3 class="primary_color">Bipolar Disorder</h3>
                            <p class="card-text">A disorder associated with episodes of mood swings ranging from depressive lows to highs</p>
                            <a href="https://en.m.wikipedia.org/wiki/Bipolar_disorder" target="_blank" class="btn btn-primary primary_bgcolor primary_outline col-xl-5 col-lg-5 col-md-6 col- py-2">More</a>
                        </div>
                    </div>
                </div>
                <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-12 mx-auto col-12 my-2">
                    <div class="card-body row align-items-center">
                        <div class="card-image col-4">
                            <img src="images/infodark0.svg" class="w-75" alt="">
                        </div>
                        <div class="card_words col-8">
                            <h3 class="primary_color">Stress</h3>
                            <p class="card-text">A biological feeling of emotional or physical tension from frustrating or angering events</p>
                            <a href="https://en.m.wikipedia.org/wiki/Stress" target="_blank" class="btn btn-primary primary_bgcolor primary_outline col-xl-5 col-lg-5 col-md-6 col- py-2">More</a>
                        </div>
                    </div>
                </div>
                <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-12 mx-auto col-12 my-2">
                    <div class="card-body row align-items-center">
                        <div class="card-image col-4">
                            <img src="images/infodark0.svg" class="w-75" alt="">
                        </div>
                        <div class="card_words col-8">
                            <h3 class="primary_color">Social Anxiety</h3>
                            <p class="card-text">A chronic mental health condition in which social interactions cause irrational anxiety</p>
                            <a href="https://en.m.wikipedia.org/wiki/Social_anxiety_disorder" target="_blank" class="btn btn-primary primary_bgcolor primary_outline col-xl-5 col-lg-5 col-md-6 col- py-2">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cards for common mental illnesses -->

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

        <!-- sliding activities section for specialists -->
        <section class = " primary_bgcolor py-5">
            <h1 class="text-center text-light display-5">Our Professional Doctors</h1>
            <div class="row align-items-center justify-content-between cards mx-auto">
                <i class="fa fa-angle-left left d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none carousel-control text-light" href = "#theCarousel" data-slide = "prev"></i>
                <div class="carousel slide col-xl-11 col-lg-11 col-md-10 col-sm-10 col-12" id="theCarousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target = "#theCarousel" data-slide-to = "0"></li>
                        <li data-target = "#theCarousel" data-slide-to = "1"></li>
                        <li data-target = "#theCarousel" data-slide-to = "2"></li>
                        <li data-target = "#theCarousel" data-slide-to = "3"></li>
                        <li data-target = "#theCarousel" data-slide-to = "4"></li>
                        <li data-target = "#theCarousel" data-slide-to = "5"></li>
                    </ol>
                    <div class="carousel-inner col-12 mx-auto">
                        <!-- only active carousel-item is visible, keeps switching using javascript from bootstrap -->
                        <div class="carousel-item active">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/doctor.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Max Mkutumula</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/doctor.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Precious Kamkwete</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/doctor.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Kimberly Mukwindiza</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/doctor.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Yankho Kamtukulo</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/doctor.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Orelha Thodi</h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container row align-items-center mx-auto py-2">
                                <div class="cool_image col-xl-6 col-lg-6 col-md-9 mx-auto">
                                    <img class="w-75" src="images/doctor.svg" alt="">
                                </div>
                                <div class="jumbotron col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1 class="display-5 text-light text-center">Khumbo Kaunda</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="fa fa-angle-right right carousel-control d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none text-right text-light" href = "#theCarousel" data-slide = "next"></i>
            </div>
        </section>
        <!-- sliding activities end for specialists -->

        <!-- meet team -->
        <section class="container mx-auto mt-5 team pt-2">
            <h2 class="display-5 primary_color text-center"> OUR TEAM OF MENTAL PROFESSIONALS </h2>
            <img src="images/doctors.png" class="w-50 mb-0" alt="">
        </section>
        <!-- meet team end -->


        <?php include "include/footer.php"; ?>
        <?php include "include/js.php"; ?>
    </body>
</html>

