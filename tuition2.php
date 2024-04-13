<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Tuition Calculator</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- JQuery external files-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="js/filter.js"></script> 

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
        <?php include('header.php');  ?> 
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Tuition Calculator</h1>
        </div><!-- end container -->
    </div><!-- end section -->

	<div id="overviews" class="section lb">
		<div class="container">
			<div class="title">
				<h1>Tuition Estimator</h1>
			</div>
			<div class="tuition-info">
				<h3>The information and costs below are correct as of Winter 2024</h3>
				<p><strong>Tuition is based on the following prices for 100 and 200 level courses:</strong><br>
					In-District Credit:&ensp; &emsp; &ensp;$115.50<br> 
					Out of District Credit:&emsp;$202<br>
					Out of State Credit:&ensp; &emsp;$292.50<br>
					International Credit:&emsp; &ensp;$292.50</p>
					<br>
				<p><strong>Tuition is based on the following prices for 300 and 400 level courses:</strong><br>
					In-District Credit:&ensp; &emsp; &ensp;$200<br>
					Out of District Credit:&emsp;$265<br>
					Out of State Credit:&ensp; &emsp;$350<br>
					International Credit:&ensp; &ensp;$350</p>
					<br>
				<p><strong>Fixed fees:</strong><br>
				Registration Fee Per Semester:&nbsp; &ensp; &emsp; &emsp;&emsp; &emsp; &emsp;$50<br>
					Infrastructure Fee Per Semester:&nbsp; &emsp; &emsp; &emsp;&emsp; &emsp;$60<br>
					Service Fee Per Credit Hour: &nbsp; &nbsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;$18<br>
					Technology Investment Fee Per Credit Hour: &emsp;$4<br>
					Student Activity Fee Per Credit Hour:&nbsp; &ensp; &emsp; &emsp;&emsp;$2</p>

			</div>
			<br>
			<p><strong>Enter the information below for a tuition estimate:</strong></p>
			
			<div id="results">
				<p>___________________________________________________________________</p>

				
					<?php

					#Tuition calculator for tuition.php

					$residency= mb_substr($_POST['residency'],0,1);
					$lowerCredits= mb_substr($_POST['lowerCredits'],0,2);
					$upperCredits= mb_substr($_POST['upperCredits'],0,2);
					$finInfo= mb_substr($_POST['finInfo'],0,3);

					$totalCreds= $lowerCredits + $upperCredits;
					$tuition= 0;
					$estimate= 0;
					$regFee = 50.00;
					$infraFee = 60.00;
					$techFeeHour = 4.00;
					$activityFeeHour = 2.00;
					$serviceFeeHour = 18.00;

					if($totalCreds == 0){
						$residency = null;
						$finInfo = null;
						$regFee = 0;
						$infraFee = 0;
						$techFeeHour = 0;
						$activityFeeHour = 0;
						$serviceFeeHour = 0;
					}

					elseif($residency == 0){
						$tuition = round(($lowerCredits * 115.50) + ($upperCredits * 200), 2);
						$estimate = round($tuition + ($serviceFeeHour * $totalCreds) + ($techFeeHour * $totalCreds) + ($activityFeeHour * $totalCreds) + $regFee + $infraFee, 2);
						$residency = "In District";
					}

					elseif($residency == 1){
						$tuition = round(($lowerCredits * 202) + ($upperCredits * 200), 2);
						$estimate = round($tuition + ($serviceFeeHour * $totalCreds) + ($techFeeHour * $totalCreds) + ($activityFeeHour * $totalCreds) + $regFee + $infraFee, 2);
						$residency = "Out of District";
					}

					else{
						$tuition = round(($lowerCredits * 292.50) + ($upperCredits * 200), 2);
						$estimate = round($tuition + ($serviceFeeHour * $totalCreds) + ($techFeeHour * $totalCreds) + ($activityFeeHour * $totalCreds) + $regFee + $infraFee, 2);
						if($residency == 2){
							$residency = "Out of State";
						}
						else{
							$residency = "International";
						}
					}				

					echo('
						<div class=tuition-form>
							<form>
								<div class="input-box">
									<p>Residency Status:
									<select id="residency" name="residency">
										<option selected disabled > '. $residency .' </option>
									</select>
									</p>
								</div>
								<div class="input-box">
									<p>Lower Level Credits:
									<input type="number" value="' . $lowerCredits . '" selected disabled>
									</p>
								</div> 
				
								<div>
									<p>Upper Level Credits:
									<input type="number" value="' . $upperCredits .'" selected disabled>
									</p>
								</div>
				
								<div>
									<p>Would you like finanical aid information:
									<select id ="finInfo" name="finInfo">
									<option selected disabled > ' . $finInfo . ' </option>
									</select>
									</p>
								</div>

				
							</form>
						</div>
						');

					echo('
						<div>
							<p>___________________________________________________________________</p>
			
							<table class="tuitionResults">
								<thead>
									<tr><th colspan="2">Tuition Estimite Breakdown</th></tr>
									<tr>
										<th>Fee Item:</th>
										<th>Cost</th>
									</tr>
								</thead>
								<tr>
									<td>Tuiton:</td>
									<td>$' . number_format($tuition, 2) . '</td>
								</tr>
								<tr>
									<td>Registration Fee:</td>
									<td>$' . number_format($regFee, 2) . '</td>
								</tr>
								<tr>
									<td>Technology Fee:</td>
									<td>$' . number_format($techFeeHour, 2) . '</td>
								</tr>
								<tr>
									<td>Service Fee:</td>
									<td>$' . number_format($serviceFeeHour, 2) . '</td>
								</tr>
								<tr>
									<td>Student Activity Fee:</td>
									<td>$' . number_format($activityFeeHour, 2) . '</td>
								</tr>
								<tr>
									<td><strong>Estimated Total:</strong></td>
									<td><strong>$' . number_format($estimate, 2) . '</strong></td>
								</tr>
							</table>
						</div>
					
					
						');

					
					if($totalCreds == 0){
						echo('<br><h3><strong>Your choice was invalid. Please entere at least one credit hour for either upper or lower credits:
						<a href="#" onClick="history.go(-1)">Start Over</a></strong></h3>');
					}	

					elseif($finInfo == "Yes"){
						echo('<br><p>Since you asked for financial aid information:</h2><p>Here is a link to the <a href="https:"//www.hfcc.edu/financial-aid">Financial Aid Office</a>
						<br>Here is a link to the <a href="https://studentaid.gov/">Federal Student Aid site (FAFSA)</a></p>');
					}

					else{
					};

					echo('<br><div class="start-over-button">
									<button><a href="tuition.php">Start Over</a></button>
								</div>

					')


					?>

			</div>
		</div>
	</div>

    <?php include("footer.php"); ?>

	<script>
	$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#results').offset().top
    }, 'slow');
	});
	</script>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>