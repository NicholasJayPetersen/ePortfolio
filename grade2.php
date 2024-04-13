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

            <?php
            #assignment scores
            $hw1 = mb_substr($_POST['hw1'],0,2);
            $hw2 = mb_substr($_POST['hw2'],0,2);
            $hw3 = mb_substr($_POST['hw3'],0,2);
            $hw4 = mb_substr($_POST['hw4'],0,2);
            $hw5 = null;
            $hw6 = null;
            $qz1 = mb_substr($_POST['qz1'],0,2);
            $qz2 = mb_substr($_POST['qz2'],0,2);
            $qz3 = mb_substr($_POST['qz3'],0,2);
            $qz4 = mb_substr($_POST['qz4'],0,2);
            $qz5 = mb_substr($_POST['qz5'],0,2);
            $qz6 = mb_substr($_POST['qz6'],0,2);
            $qz7 = null;
            $qz8 = null;
            $qz9 = null;
            $ds1 = mb_substr($_POST['ds1'],0,2);
            $ds2 = mb_substr($_POST['ds2'],0,2);
            $ds3 = null;
            $ds4 = null;
            $ex1 = mb_substr($_POST['ex1'],0,3);
            $ex2 = null;
            $fe1 = null;
            $attendance = null;
            $totalPossible = 525; #1000 points by end of semester

            #category totals for furture enhancements
            $hwTotal = $hw1 + $hw2 + $hw3 + $hw4 + $hw5 + $hw6;
            $qzTotal = $qz1 + $qz2 + $qz3 + $qz4 + $qz5 + $qz6;
            $dsTotal = $ds1 + $ds2 + $ds3 + $ds4;
            $exTotal = $ex1 + $ex2 + $fe1; 
            $grandTotal = $hwTotal + $qzTotal + $dsTotal + $exTotal;

            #calculate grade
            $grade = ceil(100 * $grandTotal / $totalPossible);

            #output
            echo("<h2>Your current grade is %". $grade . ", which is ");

            if ($grade >= 90) {
                echo("an A.<br><br></h2>");
            }
            elseif ($grade >= 80) {
                echo("an B.<br><br></h2>");
            }
            elseif ($grade >= 70) {
                echo("an C.<br><br></h2>");
            }
            elseif ($grade >= 60) {
                echo("an D.<br><br></h2>");
            }
            else {
                echo("an E.<br><br></h2>");
            }


            echo("<h3>Grading Scale</h3>
            <table class=\"grade-table\">
                <tr>
                    <td>A</td>
                    <td>90+</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>80-89</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>70-79</td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>60-69</td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>0-59</td>
                </tr>
        </table>");

        echo("<h3>Scoring Breakdown</h3>
        <table class=\"grade-table\">
            <tr>
                <td>Homework 1</td>
                <td>$hw1</td>
            </tr>
            <tr>
                <td>Homework 2</td>
                <td>$hw2</td>
            </tr>
            <tr>
                <td>Homework 3</td>
                <td>$hw3</td>
            </tr>
            <tr>
                <td>Homework 4</td>
                <td>$hw4</td>
            </tr>
            <tr>
                <td>Homework 5</td>
                <td>$hw5</td>
            </tr>
            <tr>
                <td>Homework 6</td>
                <td>$hw6</td>
            </tr>
            <tr>
            <td>Quiz 1</td>
                <td>$qz1</td>
            </tr>
            <tr>
                <td>Quiz 2</td>
                <td>$qz2</td>
            </tr>
            <tr>
                <td>Quiz 3</td>
                <td>$qz3</td>
            </tr>
            <tr>
                <td>Quiz 4</td>
                <td$qz4</td>
            </tr>
            <tr>
                <td>Quiz 5</td>
                <td>$qz5</td>
            </tr>
            <tr>
                <td>Quiz 6</td>
                <td>$qz6</td>
            </tr>
            <tr>
                <td>Quiz 7</td>
                <td>$qz7</td>
            </tr>
            <tr>
                <td>Quiz 8</td>
                <td>$qz8</td>
            </tr>
            <tr>
                <td>Quiz 9</td>
                <td>$qz9</td>
            </tr>
            <tr>
                <td>Discussion Board 1</td>
                <td>$ds1</td>
            </tr>
            <tr>
                <td>Discussion Board 2</td>
                <td>$ds2</td>
            </tr>
            <tr>
                <td>Discussion Board 3</td>
                <td>$ds3</td>
            </tr>
            <tr>
                <td>Discussion Board 4</td>
                <td>$ds4</td>
            </tr>
            <tr>
                <td>Exam 1</td>
                <td>$ex1</td>
            </tr>
            <tr>
                <td>Exam 2</td>
                <td>$ex2</td>
            </tr>
            <tr>
                <td>Final Exam</td>
                <td>$fe1</td>
            </tr>
            <tr>
                <td>Attendance</td>
                <td>$attendance</td>
            </tr>
            <tr>
                <td>Total Earned</td>
                <td>$grandTotal</td>
            </tr>
            <tr>
                <td>Total Possible</td>
                <td>$totalPossible</td>
            </tr>
        </table>");

        ?>

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