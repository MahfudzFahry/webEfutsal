<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body  ng-app="">


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form action="addBooking.php" method="post" class="contact100-form" name="myForm">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" ng-model="name" placeholder="Enter full name" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone:</span>
					<input class="input100" type="phone" required name="phone" ng-model="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Field number is required">
					<span class="label-input100" >Field Number:</span>
					<select required name="field" ng-model="field">
					<?php 
											   // Fetch Department
											 	include "../config.php";
											   $sql_department = "SELECT * FROM tablelapangan where status='Available'";
											   $department_data = mysqli_query($koneksi,$sql_department);
											   while($row = mysqli_fetch_assoc($department_data) ){
											      $departid = $row['id'];
											      $depart_name = $row['nomorLapangan'];
											      
											      // Option
											      echo "<option value='".$departid."' >".$depart_name."</option>";
											   }
											  ?>


					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Date:</span>
					<input class="input100" type="Date" ng-model="bookingDate" name="bookingDate" placeholder="Enter Booking Date" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Start Time is required">
					<span class="label-input100">Start Time:</span>
					<input class="input100" required type="Time" ng-model="startTime" name="startTime" placeholder="Enter Start Time">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="End Time is required">
					<span class="label-input100">End Time:</span>
					<input class="input100" required type="Time" name="endTime" ng-model="endTime" placeholder="Enter End Time">
					<span class="focus-input100"></span>
				</div>

					<input class="input100" required type="hidden" ng-model="status" name="status" value="Active" placeholder="Enter End Time">


				<div class="wrap-input100>
					<span class="label-input100"><p>The input's valid state is:</p>
						</span>
						<p>Name: {{myForm.name.$valid}}</p>
						<p>Phone: {{myForm.phone.$valid}}</p>
						<p>No Lapangan: {{myForm.field.$valid}}</p>
						<p>Dates: {{myForm.bookingDate.$valid}}</p>
						<p>Start Time: {{myForm.startTime.$valid}}</p>
						<p>End Time: {{myForm.endTime.$valid}}</p>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

				<div class="container-contact100-form-btn">
					<a href="../index.php" class="contact100-form-btn">
						<span>
							Back to Menu
						</span>
					</a>
				</div>

			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===========================================11111111====================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
