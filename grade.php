<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Grade Calculator</title>  
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
				<h1>Grade Calculator</h1>
			</div>

			<div class=grades-form>
				<form action="grade2.php" id="calculateTuition" method="post">
                    
					<div class="grade-table">
						<table>
							<tr>
								<td>Homework 1</td>
								<td><input type="number" name="hw1" min="0" max="77" value="0"></td>
							</tr>
							<tr>
								<td>Homework 2</td>
								<td><input type="number" name="hw2" min="0" max="80" value="0"></td>
							</tr>
							<tr>
								<td>Homework 3</td>
								<td><input type="number" name="hw3" min="0" max="85" value="0"></td>
							</tr>
							<tr>
								<td>Homework 4</td>
								<td><input type="number" name="hw4" min="0" max="85" value="0"></td>
							</tr>
								<td>Syllabus Quiz</td>
									<td><input type="number" name="qz1" min="0" max="20" value="0"></td>
								</tr>
							<tr>
								<td>Client/Server Quiz</td>
								<td><input type="number" name="qz2" min="0" max="20" value="0"></td>
							</tr>
							<tr>
								<td>Internet/Web Domain Quiz</td>
								<td><input type="number" name="qz3" min="0" max="20" value="0"></td>
							</tr>
							<tr>
								<td>Web Development Process Quiz</td>
								<td><input type="number" name="qz4" min="0" max="20" value="0"></td>
							</tr>
							<tr>
								<td>HTML Quiz</td>
								<td><input type="number" name="qz5" min="0" max="20" value="0"></td>
							</tr>
							<tr>
								<td>CSS Quiz</td>
								<td><input type="number" name="qz6" min="0" max="20" value="0"></td>
							</tr>
							<tr>
								<td>Discussion Board 1</td>
								<td><input type="number" name="ds1" min="0" max="10" value="0"></td>
							</tr>
							<tr>
								<td>Discussion Board 2</td>
								<td><input type="number" name="ds2" min="0" max="10" value="0"></td>
							</tr>
							<tr>
								<td>Exam 1 Quiz</td>
								<td><input type="number" name="ex1" min="0" max="110" value="0"></td>
							</tr>
						</table>
					</div>

					<div class="submit-button">
						<button type="submit">Calculate</button>
					</div>

				</form>
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