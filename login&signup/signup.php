<!DOCTYPE html>

<!--sign up page----sign up page----sign up page----sign up page----sign up page----sign up page-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="vacation/stylesheet">

    <link rel="stylesheet" href="vacation/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="vacation/css/animate.css">
    
    <link rel="stylesheet" href="vacation/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vacation/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="vacation/css/magnific-popup.css">

    <link rel="stylesheet" href="vacation/css/aos.css">

    <link rel="stylesheet" href="vacation/css/ionicons.min.css">

    <link rel="stylesheet" href="vacation/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="vacation/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="vacation/css/flaticon.css">
    <link rel="stylesheet" href="vacation/css/icomoon.css">
    <link rel="stylesheet" href="vacation/css/style.css">
</head>
<body>

     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="vacation/index.html">kietian<span>airlines</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item active"><a href="destination.html" class="nav-link">Destination</a></li>
              <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
              <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>

              <!--li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li-->

            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="signcheck.php" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>