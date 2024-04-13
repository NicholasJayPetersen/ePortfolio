<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Color Mixer</title>  
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
			<h1>Color Mixer</h1>
        </div><!-- end container -->
    </div><!-- end section -->

	<div id="overviews" class="section lb">
		<div class="container">
			<div class="title">
			</div>

			<div class="color-mixer">

				<style>
					.color-mixer{
						margin: 0 auto;
						padding: 150px;
						height: 150px;
						width: 80%;
						text-align: center;
						background-color: 				
						<?php

							//get inputs from form
							$color1 = mb_substr(filter_input(INPUT_POST, 'color1', FILTER_SANITIZE_STRING),0,1);
							$color2 = mb_substr(filter_input(INPUT_POST, 'color2', FILTER_SANITIZE_STRING),0,1);

							//mix the colors
							if ($color1 == $color2){
								if ($color1 == "r"){
									$mix = "#FF0000";
								}
								elseif ($color1 == "b"){
									$mix = "#0000FF";
								}
								elseif ($color1 == "g"){
									$mix = "#00FF00";
								}
							}
							elseif ($color1 == "b" and $color2 == "r"){
								$mix = "#FF00FF";
							}
							elseif ($color1 == "b" and $color2 == "g"){
								$mix = "#00FFFF";
							}
							elseif ($color1 == "r" and $color2 == "b"){
								$mix = "#FF00FF";
							}
							elseif ($color1 == "r" and $color2 == "g"){
								$mix = "#FFFF00";
							}
							elseif ($color1 == "g" and $color2 == "b"){
								$mix = "#00FFFF";
							}
							elseif ($color1 == "g" and $color2 == "r"){
								$mix = "#FFFF00";
							}

							echo("$mix");

							?>;
					}
				</style>

				<?php

				//get inputs from form
				$color1 = mb_substr(filter_input(INPUT_POST, 'color1', FILTER_SANITIZE_STRING),0,1);
				$color2 = mb_substr(filter_input(INPUT_POST, 'color2', FILTER_SANITIZE_STRING),0,1);

				//mix the colors
				if ($color1 == $color2){
					if ($color1 == "r"){
						$mix = "Red";
					}
					elseif ($color1 == "b"){
						$mix = "Blue";
					}
					elseif ($color1 == "g"){
						$mix = "Green";
					}
				}
				elseif ($color1 == "b" and $color2 == "r"){
					$mix = "Magenta";
				}
				elseif ($color1 == "b" and $color2 == "g"){
					$mix = "Cyan";
				}
				elseif ($color1 == "r" and $color2 == "b"){
					$mix = "Magenta";
				}
				elseif ($color1 == "r" and $color2 == "g"){
					$mix = "Yellow";
				}
				elseif ($color1 == "g" and $color2 == "b"){
					$mix = "Cyan";
				}
				elseif ($color1 == "g" and $color2 == "r"){
					$mix = "Yellow";
				}

				echo("<h2><strong>$mix is your mixed color</strong></h2>");

				?>

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