	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>  
		

			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body ng-app="">

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
				  			<div class="col-lg-6 col-sm-4 col-8 header-top-right no-padding">
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
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="index.php">About</a></li>
				          <li><a href="index.php">Coffee</a></li>
				          <li><a href="index.php">Review</a></li>
				          <li><a href="order.php">Order</a></li>
				          <li><a href="logout.php">Logout</a></li>
				          <!-- <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="generic.html">Generic</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li> -->
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->	

			<section class="generic-banner relative">	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Reserve Now</h2>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">
			

			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<h3 class="about-title mb-30">Reserve now to book your tables</h3>
					<div class="row">
						<div class="col-lg-12 col-md-12 single-blog">
							<!-- <img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p> -->

							
								<form name="myForm" method="post" action="tambah_booking.php">
									<div class="mt-10">
										<input type="hidden"  name="id_cust" placeholder="Enter First Name..." value="<?php echo $_SESSION['id']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter First Name...'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="hidden" name="status" placeholder="Enter First Name..." value="Active" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter First Name...'" required class="single-input">
									</div>
									<div class="mt-10">
										<label for="last_name">First Name</label>
										<input type="text" name="fn" placeholder="Enter Last Name..." value="<?php echo $_SESSION['usernameCust']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Last Name...'" disableed class="single-input" >
									</div>
									<div class="input-group-icon mt-10">
										<label">No Table</label>
										<div class="form-select" id="default-select"">
											<select id="no_table" name="no_table" required="">
												<option value="0">- Select -</option>
											 <?php 
											   // Fetch Department
											 	include "../config.php";
											   $sql_department = "SELECT * FROM tables where status='Available'";
											   $department_data = mysqli_query($koneksi,$sql_department);
											   while($row = mysqli_fetch_assoc($department_data) ){
											      $departid = $row['id'];
											      $depart_name = $row['no_table'];
											      
											      // Option
											      echo "<option value='".$departid."' >".$depart_name."</option>";
											   }
											  ?>
											</select>
										</div>
									</div>
									
                                      
									
									<div class="mt-10">
										<label for="Date">Date</label>
										<input type="Date" ng-model="dates" name="dates" placeholder="Enter Date..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Date...'" required class="single-input">
									</div>
									<div class="mt-10">
										<label for="Time">Time</label>
										<input type="Time" name="times" ng-model="times" placeholder="Enter Time..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Time...'" required class="single-input">
									</div>
									<div class="mt-10">
										<label for="notes">Notes</label>
										<textarea name="notes"  ng-model="notes" class="single-textarea" placeholder="Enter Additional Messages..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Additional Message...'" required></textarea>
									</div>
									<!-- For Gradient Border Use -->
									<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
									<div class="mt-10">
										
									<button class="genric-btn primary radius">Book Now</button>
									</div>
								</form>
								<p>The input's valid state is:</p>
									<h3 class="about-title mb-30">Times: {{myForm.times.$valid}}</h3>
									<h3 class="about-title mb-30">Dates: {{myForm.dates.$valid}}</h3>
									<h3 class="about-title mb-30">notes: {{myForm.notes.$valid}}</h3>
						</div>
				</div>
			</section>
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
				$(document).ready(function(){

    $("#sel_depart").change(function(){
        var deptid = $(this).val();

        $.ajax({
            url: 'data.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

});
			</script>
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
			<script src="js/mail-script.js"></script>				
			<script src="js/main.js"></script>	
		</body>
	</html>
