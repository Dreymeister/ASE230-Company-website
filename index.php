<?php
    require_once('./lib/readPlain.php');
    require_once('./lib/readJSON.php');
    require_once('./lib/readCSV.php');

    $overview = readPlain('./data/overview.txt');
    $missionStatement = readPlain('./data/mission.txt');
    $team = readCSV('./data/team.csv');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Qexal - Responsive Bootstrap 5 Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
        <meta content="Themesbrand" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />

        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="20">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                  </div>
            </div>
        </div>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index-1.html">
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="28" />
                    <img src="images/logo-light.png" alt="" class="logo-light" height="28" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end container -->
        </nav>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="hero-3 bg-center position-relative" style="background-image: url(images/hero-3-bg.png);" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="font-weight-semibold mb-4 hero-3-title">Orion Aerospace Dynamics</h1>
                            <p class="mb-5 text-muted subtitle w-75 mx-auto"><?php echo $missionStatement; ?></p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </section>
        <!-- Hero End -->

        <!-- Services start -->
        <section class="section" id="services">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Who we are</h2>
                        <p class="text-muted"><?php echo $overview; ?></p>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- Services end -->

        <!-- Features start -->
        <section class="section bg-light" id="features">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Features</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
                        <h2 class="mb-4">Perfect Solution For Small Businesses</h2>
                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis..</p>
                        <a href="javascript: void(0);" class="btn btn-primary">Find out more <i class="icon-xs ms-2" data-feather="arrow-right"></i></a>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6 ms-md-auto order-1 order-md-2">
                        <div class="position-relative">
                            <div class="ms-5 features-img">
                                <img src="images/features-1.jpg" alt="" class="img-fluid d-block mx-auto rounded shadow" />
                            </div>
                            <img src="images/dot-img.png" alt="" class="dot-img-left" />
                        </div>
                    </div>
                    <!-- end col -->
                </div> 
                <!-- end row -->
                <div class="row align-items-center section pb-0">
                    <div class="col-md-6">
                        <div class="position-relative mb-md-0 mb-5">
                            <div class="me-5 features-img">
                                <img src="images/features-2.jpg" alt="" class="img-fluid d-block mx-auto rounded shadow" />
                            </div>
                            <img src="images/dot-img.png" alt="" class="dot-img-right" />
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-5 ms-md-auto">
                        <h2 class="mb-4">Build community & conversion with our suite of social tool</h2>
                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis..</p>
                        <a href="javascript: void(0);" class="btn btn-primary">Find out more <i class="icon-xs ms-2" data-feather="arrow-right"></i></a>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Features end -->

        <section class="section bg-gradient-primary">
            <div class="bg-overlay-img" style="background-image: url(images/demos.png);"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h1 class="text-white mb-4">Build your dream website today</h1>
                            <p class="text-white mb-5 font-size-16">Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totamrem aperiam eaque inventore veritatis quasi.</p>
                            <a href="#" class="btn btn-lg btn-light">Ask for Demonstration</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Cta end -->

        <!-- Team start -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Team Members</h2>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <?php print_r($team);?>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                            <div class="position-relative overflow-hidden">
                                <img src="images/team/1.jpg" alt="" class="img-fluid d-block mx-auto" />
                                <ul class="list-inline p-3 mb-0 team-social-item">
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <h5 class="font-size-19 mb-1">Frances Thompson</h5>
                                <p class="text-muted text-uppercase font-size-14 mb-0">Developer</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                            <div class="position-relative overflow-hidden">
                                <img src="images/team/2.jpg" alt="" class="img-fluid d-block mx-auto" />
                                <ul class="list-inline p-3 mb-0 team-social-item">
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <h5 class="font-size-19 mb-1">John Jones</h5>
                                <p class="text-muted text-uppercase font-size-14 mb-0">Ceo</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                            <div class="position-relative overflow-hidden">
                                <img src="images/team/3.jpg" alt="" class="img-fluid d-block mx-auto" />
                                <ul class="list-inline p-3 mb-0 team-social-item">
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <h5 class="font-size-19 mb-1">Della Hobbs</h5>
                                <p class="text-muted text-uppercase font-size-14 mb-0">Designer</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                            <div class="position-relative overflow-hidden">
                                <img src="images/team/4.jpg" alt="" class="img-fluid d-block mx-auto" />
                                <ul class="list-inline p-3 mb-0 team-social-item">
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm" data-feather="facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm" data-feather="twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-3">
                                        <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm" data-feather="instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <h5 class="font-size-19 mb-1">Troy Jordon</h5>
                                <p class="text-muted text-uppercase font-size-14 mb-0">Developer</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Team end -->

        <!-- Blog start -->
        <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold">Our Blog</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem ab illo inventore.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mt-4 border-0 shadow">
                            <div class="card-body p-4">
                                <span class="badge badge-soft-primary">UI & UX Design</span>
                                <h4 class="font-size-22 my-4"><a href="javascript: void(0);">Step bt step to conduct usability testing</a></h4>
                                <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                <div class="d-flex align-items-center mt-4 pt-2">
                                    <img src="images/user/img-2.jpg" class="rounded-circle avatar-sm me-3" alt="..." />
                                    <div class="flex-body">
                                        <h5 class="font-size-17 mb-0">John Yeager</h5>
                                        <p class="text-muted mb-0 font-size-14">Designer, New York</p>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="card mt-4 border-0 shadow">
                            <div class="card-body p-4">
                                <span class="badge badge-soft-primary">CEO</span>
                                <h4 class="font-size-22 my-4"><a href="javascript: void(0);">Increase conversion rate from ad to landing page</a></h4>
                                <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                <div class="d-flex align-items-center mt-4 pt-2">
                                    <img src="images/user/img-3.jpg" class="rounded-circle avatar-sm me-3" alt="..." />
                                    <div class="flex-body">
                                        <h5 class="font-size-17 mb-0">Berneice Harris</h5>
                                        <p class="text-muted mb-0 font-size-14">Designer, New York</p>
                                    </div>
                                </div>
                            </div><!-- end cradbody -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card mt-4 border-0 shadow">
                            <div class="card-body p-4">
                                <span class="badge badge-soft-primary">Developer</span>
                                <h4 class="font-size-22 my-4"><a href="javascript: void(0);">Why small business should start marketing</a></h4>
                                <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                <div class="d-flex align-items-center mt-4 pt-2">
                                    <img src="images/user/img-1.jpg" class="rounded-circle avatar-sm me-3" alt="..." />
                                    <div class="flex-body">
                                        <h5 class="font-size-17 mb-0">Sarah Pettway</h5>
                                        <p class="text-muted mb-0 font-size-14">Designer, New York</p>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Blog end -->

        <!-- CTA start -->
        <section class="section bg-center w-100 bg-light" style="background-image: url(images/cta-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-gradient-primary text-center border-0">
                            <div class="bg-overlay-img" style="background-image: url(images/demos.png);"></div>
                            <div class="card-body mx-auto p-sm-5 p-4">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="p-3">
                                            <h2 class="text-white mb-4">Join our Growing Community</h2>
                                            <p class="text-white-70 font-size-16 mb-4 pb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <a href="javascript: void(0);" class="btn btn-light rounded-pill">Sign Up for free</a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- CTA end -->

        <!-- Footer Start -->
        <footer class="footer" style="background-image: url(images/footer-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <a href="index-1.html"><img src="images/logo-light.png" alt="" class="" height="30" /></a>
                            <p class="text-white-50 my-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Customer</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Works</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Strategy</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Releases</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Press</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Mission</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Product</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Trending</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Popular</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Customers</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Features</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Information</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">Developers</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Support</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Customer Service</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Get Started</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Guide</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-6">
                                <div class="mt-4 mt-lg-0">
                                    <h4 class="text-white font-size-18 mb-3">Support</h4>
                                    <ul class="list-unstyled footer-sub-menu">
                                        <li><a href="javascript: void(0);" class="footer-link">FAQ</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Contact</a></li>
                                        <li><a href="javascript: void(0);" class="footer-link">Disscusion</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-5">
                            <p class="text-white-50 f-15 mb-0">
                                <script>
                                document.write(new Date().getFullYear())
                            </script> © Qexal. Design By Themesbrand</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- Footer End -->

        <!-- Style switcher -->
        <div id="style-switcher">
            <div class="bottom">
                <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                    <i class="mdi mdi-white-balance-sunny mode-light"></i>
                    <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
                </a>
                <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i class="mdi mdi-cog  mdi-spin"></i></a>
            </div>
        </div>

        <!-- javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/smooth-scroll.polyfills.min.js"></script>

        <script src="https://unpkg.com/feather-icons"></script>

        <!-- App Js -->
        <script src="js/app.js"></script>
    </body>
</html>
