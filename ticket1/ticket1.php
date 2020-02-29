<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Booking page</title>

	
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!--nav bar--->
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
	<div class="container">
	<!--nav bar--->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="vacation/index.html">Kietian<span>airlines</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item active"><a href="http://localhost/booking3/vacation/!airflight.php" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="http://localhost/booking3/vacation/about.html" class="nav-link">About</a></li>
            <!--   <li class="nav-item active"><a href="destination.html" class="nav-link">Destination</a></li>
              <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li> -->
              <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>

              <!--li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li-->

            </ul>
          </div>
        </div>
      </nav>
  </div>    
    <!-- END nav -->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">



				      <form action="http://localhost/booking2/table/table.php" method="POST">
				      	<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">trip type</span>
										<!--input class="form-control" type="text" placeholder="City or airport" name="from"-->
						<select class="form-control" name="trip" value="<?php if(isset($_POST['trip'])){echo $_POST['trip'];}?>" >
											<option>one-way</option>
											<option>Round-trip</option>
											
											</select>
										<span class="select-arrow"></span>
  

									
								</div>
							</div>
						</div>
						



							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying from</span>
										<!--input class="form-control" type="text" placeholder="City or airport" name="from"-->
		<select class="form-control" name="from" value="<?php if(isset($_POST['from'])){echo $_POST['from'];}?>" >

											<option>Agra</option>
											<option>Delhi</option>
											<option>Mumbai</option>
											<option>Goa</option>
											<option>Chennai</option>
											<option>Jaipur</option>
											</select>
										<span class="select-arrow"></span>
  

									
								</div>
							</div>

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flyning to</span>
										<!--input class="form-control" type="text" placeholder="City or airport" name="to"-->
		   <select class="form-control" name="to" value="<?php if(isset($_POST['To'])){echo $_POST['To'];}?>">
											<option>Agra</option>
											<option>Delhi</option>
											<option>Mumbai</option>
											<option>Goa</option>
											<option>Chennai</option>
											<option>Jaipur</option>
											</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
                                                                                                                                                            
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
<input class="form-control" type="date" required name="ddate" value="<?php if(isset($_POST['ddate'])){echo $_POST['ddate'];}?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
<input class="form-control" type="date" required name="rdate" value="<?php if(isset($_POST['rdate'])){echo $_POST['rdate'];}?>">
									</div>
								</div>
								<br>
								<br>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
		<select class="form-control" name="Adults" value="<?php if(isset($_POST['Adults'])){echo $_POST['Adults'];}?>">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
   <select class="form-control" name="children" value="<?php if(isset($_POST['children'])){echo $_POST['children'];}?>">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Travel class</span>
	<select class="form-control" name="class" value="<?php if(isset($_POST['class'])){echo $_POST['class'];}?>">
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow" ></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" >Show flights</button>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>
<!-- ------------ php code php code php code php code  php code  php code  php code  php code  php code  php code  -->


</html>