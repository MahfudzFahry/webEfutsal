	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
				<?php 
				session_start();
				if($_SESSION['status']!="login"){
					header("location:../login_cust.php?pesan=belum_login");
				}
				?>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Mon-Fri: 8am to 2pm
				  					</li>
				  					<li>
				  						Sat-Sun: 11am to 4pm
				  					</li>
				  					<li>
				  						<a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#about">About</a></li>
				          <li><a href="#coffee">Coffee</a></li>
				          <li><a href="#review">Review</a></li>
				          <li><a href="order.php">Order</a></li>
				          <li><a href="logout.php">Logout</a>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">Now you can feel the Energy of Love</h6>
							<h1>
								A Cup of Coffee <br>				
							</h1>
							<a href="order.php" class="primary-btn text-uppercase">Booking Now</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->
			<section class="video-sec-area pb-100 pt-40" id="about">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 justify-content-center align-items-center d-flex">
							<!-- <div class="overlay overlay-bg"></div> -->
							<!-- <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
							<a href="kopi.jpg" class="img-pop-home">
										<img class="img-fluid" src="kopi.jpg" alt="">
							</a>
						</div>						
						<div class="col-lg-6 video-left">
							<h6>Live Coffee making process.</h6>
							<h1>We Making our Coffee <br>
							with Love</h1>
							<p><span>We are here to listen from you deliver exellence</span></p>
							<p>
								We make sure everything we do honors that connection – from our commitment to the highest quality coffee in the world, to the way we engage with our customers and communities to do business responsibly. From our beginnings as a single store over forty years ago, in every place that we’ve been, and every place that we touch, we've tried to make it a little better than we found it.
							</p>
							<img class="img-fluid" src="img/signature.png" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="coffee">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title">
										<img src="images/satu.jpg" style="width: 100%; height: 200px; margin-bottom: 30px">
									</div>
								<div class="title-div justify-content-between d-flex">
								
									<<h4>Cappuccino</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title">
										<img src="images/dua.jpg" style="width: 100%; height: 200px; margin-bottom: 30px">
									</div>	
								<div class="title-div justify-content-between d-flex">
									<h4>Americano</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title">
										<img src="images/tiga.jpg" style="width: 100%; height: 200px; margin-bottom: 30px">
									</div>	
								<div class="title-div justify-content-between d-flex">
									<h4>Espresso</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-menu"><div class="title">
										<img src="images/lima.jpg" style="width: 100%; height: 200px; margin-bottom: 30px">
									</div>	
								<div class="title-div justify-content-between d-flex">
									<h4>Macchiato</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title">
										<img src="images/delapan.jpg" style="width: 100%; height: 200px; margin-bottom: 30px">
									</div>	
								<div class="title-div justify-content-between d-flex">
									<h4>Mocha</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title">
										<img src="images/enam	.jpg" style="width: 100%; height: 200px; margin-bottom: 30px">
									</div>	
								<div class="title-div justify-content-between d-flex">

									<h4>Coffee Latte</h4>
									<p class="price float-right">
										$49
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
																					
					</div>
				</div>	
			</section>
			<!-- End menu Area -->
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Gallery of our Coffe Shop</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<a href="1.jpg" class="img-pop-home">
								<img class="img-fluid" src="1.jpg" alt="">
							</a>	
							<a href="4.jpg" class="img-pop-home">
								<img class="img-fluid" src="5.jpg" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href="3.jpg" class="img-pop-home">
								<img class="img-fluid" src="3.jpg" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href="2.jpg" class="img-pop-home">
										<img class="img-fluid" src="2.jpg" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href="4.jpg" class="img-pop-home">
										<img class="img-fluid" src="4.jpg" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Testimoni</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r1.png" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r2.png" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
					</div>
				</div>	
			</section>
			<!-- End review Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									We make sure everything we do honors that connection – from our commitment to the highest quality coffee in the world, to the way we engage with our customers and communities to do business responsibly. From our beginnings as a single store over forty years ago, in every place that we’ve been, and every place that we touch, we've tried to make it a little better than we found it.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info pt-20"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



