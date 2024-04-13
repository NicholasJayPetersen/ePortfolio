<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>JavaScript Quiz</title>  
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
    <link rel="stylesheet" href="css/jsquiz.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--  CanvasJS external files-->
	<script src="js/mypiechart.js"></script>
	<script src="js/canvasjs.min.js"></script> 

	<!-- JQuery external files-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="js/filter.js"></script>

    <!--Javascript quiz files-->
    <script>function correct() {alert("You are correct!")}</script>
    <script>function incorrect() {alert("You are incorrect!")}</script>

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
			<h1>Test your JavaScript Knowledge!</h1>
		</div>
	</div>
    <div id="overviews" class="section lb">
        <div class="quizHeader">
                <h1>JavaScript Quiz</h2>
                <h2>Press the button to the left of each possible answer to select your choice.</h4>
                <br>
        </div>

        <div class="whiteSpace"></div>

        <div class="container">

            <div class="quizContainer">        
                <div class="questionContainer">
                    <h5>1. Which of the following statements is true?</h5>
                    <p><button onclick="correct()">A.</button> HTML is used to code the content of webpages, while JavaScript is used to make the page do interactive things</p>
                    <p><button onclick="incorrect()">B.</button> HTML is used to program the webpage to do things, while JavaScript is used to format content</p>
                    <p><button onclick="incorrect()">C.</button> PHP is the language used to make charts and animations, while Javascript is used to process webforms</p>
                    <p><button onclick="incorrect()">D.</button> CSS is used to code the content of the pages and JavaScript isued to make the page do interactive things</p>
                </div>
                
                    <div class="whiteSpace"></div>

                <div class="questionContainer">
                    <h5>2. JavaScript and Java are the same lanaguage.</h5>
                    <p><button onclick="incorrect()">A.</button> True</p>
                    <p><button onclick="correct()">B.</button> False</p>
                </div>

                <div class="whiteSpace"></div>

                <div class="questionContainer">
                    <h5>3. Which tags are used to include JavaScript inside the &ltbody&gt of and HTML file?</h5>
                    <p><button onclick="incorrect()">A.</button> &ltjava&gt &lt/java&gt</p>
                    <p><button onclick="incorrect()">B.</button> &ltjscode&gt &lt/jscode&gt</p>
                    <p><button onclick="correct()">C.</button> &ltscript&gt &lt/script&gt</p>
                    <p><button onclick="incorrect()">D.</button> &ltjscript&gt &lt/jscript&gt</p>
                </div>

                <div class="whiteSpace"></div>

                <div class="questionContainer">
                    <h5>4. Which JavaScript command displays a popup alert box when coded within JavaScript &#40not inside HTML or an HTML onlclick&#41?</h5>
                    <p><button onclick="incorrect()">A.</button> type.alert</p>
                    <p><button onclick="correct()">B.</button> window.alert</p>
                    <p><button onclick="incorrect()">C.</button> popup.alert</p>
                    <p><button onclick="incorrect()">D.</button> string.alert</p>
                </div>

                <div class="whiteSpace"></div>

                <div class="questionContainer">
                    <h5>5. Which of the following is the mathematical symbol for modulus in JavaScript?</h5>
                    <p><button onclick="incorrect()">A.</button> &</p>
                    <p><button onclick="incorrect()">B.</button> |</p>
                    <p><button onclick="incorrect()">C.</button> ^</p>
                    <p><button onclick="correct()">D.</button> %</p>
                </div>

                <div class="whiteSpace"></div>

                <div class="questionContainer">
                    <h5>6. Which of the following Javascript commands will diplay text "Hello, world!" to a webpage?</h5>
                    <p><button onclick="incorrect()">A.</button> print&#40"Hello, world!"&#41&#59</p>
                    <p><button onclick="incorrect()">B.</button> page.print&#40"Hello, world!"&#41&#59</p>
                    <p><button onclick="incorrect()">C.</button> document.print&#40"Hello, world!"&#41&#59</p>
                    <p><button onclick="correct()">D.</button> document.write&#40"Hello, world!"&#41&#59</p>
                </div>
         </div>

        </div><!-- end container -->
    </div><!-- end section -->

    <?php include("footer.php"); ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>