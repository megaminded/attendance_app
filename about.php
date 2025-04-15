<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/base.css">
</head>
<body>
    <!-- Navigation -->
    <?php include "./inc/navbar.php" ?>


    <!-- loaderannimation -->
      <div class="loader bg-light">
  <i class="fa fa-spinner spinner "> </i>

</div>
     <!-- loader animination -->
      
    <!-- Hero Section -->
    <header class="bg-light py-5 mt-5">
        <div class="container text-center hero-content">
            <h1 class="display-4 primary-color fw-bold animate-slide-up">About Us</h1>
            <p class="lead animate-slide-up delay-1">Megamindset Attendance Management</p>
        </div>
    </header>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animate-slide-up delay-1">
                    <h2 class="primary-color mb-4">Who We Are</h2>
                    <p class="lead">Megamindset ict solution is a leading provider of innovative attendance management solutions.</p>
                    <p>Our mission is to deliver intuitive, reliable, and efficient tools that transform how to track and manage attendance.</p>
                </div>
                <div class="col-md-6 animate-scale delay-2">
                    <img src="assets/images/laptop-image.jpg" alt="About Us" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row message-form">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h3 class="primary-color">Give Us A Message</h3>
                <div class="line"></div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-user primary-color" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Your Name" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-envelope primary-color" aria-hidden="true"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@eg.com</span>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-mobile primary-color" aria-hidden="true"></i>
                    </span>
                    <input type="number" class="form-control" placeholder="Phone Number"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>


                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa fa-file primary-color" aria-hidden="true"></i>
                    </span>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
                </div>

                <div class="input-group mt-2 mb-5">
                    <input type="submit" value="SEND EMAIL" id="send-email">
                </div>

            </div>
        </div>
    </div>

    <!-- Features -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5 primary-color animate-fade delay-1">Features</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 feature-card delay-2">
                        <i class="fas fa-clock primary-color mb-3"></i>
                        <h4>Real-time Attendance</h4>
                        <p>Instant attendance monitoring</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 feature-card delay-2">
                        <i class="fas fa-shield-alt primary-color mb-3"></i>
                        <h4>Secure Platform</h4>
                        <p>Enterprise-grade security for your data</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 feature-card delay-2">
                        <i class="fas fa-chart-line primary-color mb-3"></i>
                        <h4>Advanced Analytics</h4>
                        <p>Comprehensive reporting and insights</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 primary-color animate-fade delay-2">Our Team</h2>
            <div class="row g-4 ">
                <div class="col-lg-4 col-md-4 col-sm-12 delay-3 mt-5">
                    <div class="card primary-bg-color text-light">
                        <img class="card-img-top" src="assets/images/team1.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Oga Hope</h4>
                            <p class="card-text">CEO & Founder</p>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 delay-3 mt-5">
                    <div class="card primary-bg-color text-light">
                        <img class="card-img-top" src="assets/images/victory.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Victory .G.X</h4>
                            <p class="card-text">Team Member</p>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 delay-3 mt-5">
                    <div class="card primary-bg-color text-light">
                        <img class="card-img-top" src="assets/images/Buharilife01.jpg" alt="buharilife01">
                        <div class="card-body text-center">
                            <h4 class="card-title">Buharilife01</h4>
                            <p class="card-text">Team Member</p>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"> BuHarilife</i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-4 ">
                <div class="col-lg-4 col-md-4 col-sm-12 delay-3 mt-5">
                    <div class="card primary-bg-color text-light">
                        <img class="card-img-top" src="assets/images/success.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Success</h4>
                            <p class="card-text">Team Member</p>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 delay-3 mt-5">
                    <div class="card primary-bg-color text-light">
                        <img class="card-img-top" src="assets/images/team2.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Unknown</h4>
                            <p class="card-text">Team Member</p>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 delay-3 mt-5">
                    <div class="card primary-bg-color text-light">
                        <img class="card-img-top" src="assets/images/team1.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Unknown</h4>
                            <p class="card-text">Team Member</p>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Contact Section -->
    <?php include "./inc/footer.php" ?>

    <!-- JS -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>