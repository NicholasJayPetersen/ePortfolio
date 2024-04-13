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

	<!--Tuition calculator script-->
	<script src="js/tuitioncalc.js"></script>

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
					In-District Credit:&ensp; &emsp; &ensp;$111<br> 
					Out of District Credit:&emsp;$194<br>
					Out of State Credit:&ensp; &emsp;$281<br>
					International Credit:&emsp; &ensp;$281</p>
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
					Service Fee Per Credit Hour:&nbsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;$18<br>
					Technology Investment Fee Per Credit Hour: &emsp;$4<br>
					Student Activity Fee Per Credit Hour:&ensp; &emsp; &emsp;&emsp;$2</p>

			</div>
			<br>
			<p><strong>Enter the information below for a tuition estimate:</strong></p>
			
			<div class=tuition-form>
				<form action="js/tuitioncalc.js" id="calculateTuition" method="get">
					<div class="input-box">
						<p>Lower Level Credits:
						<select id="lowerCredits" name="lowerCredits">
							<option label ="Choose Credits" value="" selected disabled ></option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select></p>
					</div> 

					<div>
						<p>Upper Level Credits:
						<select id="upperCredits" name="upperCredits">
							<option label="Choose credits" value="" selected disabled ></option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select></p>
					</div>

					<div class="input-box">
						<p>Student Type:
						<select id="studentType" name="studentType">
							<option label ="Choose Type" value="" selected disabled ></option>
							<option value="inDistrict">In District</option>
							<option value="outDistrict">Out of District</option>
							<option value="outState">Out of State</option>
							<option value="International">International Student</option>
						</select>
						</p>
					</div>

					<div class="submit-button">
						<button type="submit">Calculate</button>
					</div>

				</form>
			</div>
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
						<td id="tuition"></td>
					</tr>
					<tr>
						<td>Registration Fee:</td>
						<td id="regFee"></td>
					</tr>
					<tr>
						<td>Technology Fee:</td>
						<td id="techFeeHour"></td>
					</tr>
					<tr>
						<td>Service Fee:</td>
						<td id="ServiceFeeHour"></td>
					</tr>
					<tr>
						<td>Student Activity Fee:</td>
						<td id="activityFeeHour"></td>
					</tr>
					<tr>
						<td><strong>Estimated Total:</strong></td>
						<td><strong id="estimate"></strong></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

    <?php include("footer.php"); ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>