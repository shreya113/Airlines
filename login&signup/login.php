<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<!--nav bar-->
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
          <a class="navbar-brand" href="vacation/index.html">kietian<span>air lines</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <h2 class="form-title">Please login for booking✈</h2>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item active"><a href="http://localhost/booking3/vacation/1airflight.php" class="nav-link">Home</a></li>
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
    	  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                     <!-- <h2 class="form-title">Please login for booking✈</h2> -->
                        <h2 class="form-title">Login pages</h2>
                        <form method="POST" class="register-form" id="login-form" action="check.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
