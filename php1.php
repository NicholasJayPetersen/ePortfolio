<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Basic PHP</title>  
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

	  <!-- prism scripts -->   
	  <link href="css/prism.css" rel="stylesheet">   
	  <script src="js/prism.js"></script>   
	  <!-- end prism scripts --> 

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
			<h1>Basic PHP examples</h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">

			<h3>PHP Example 1: Basic PHP Output, Concatenation, and Built-in Fucntions</h3>
			<pre><code class="language-php">
				&lt;?php 
				echo "&lt;p>Hello World!&lt;/p>";
				echo "&lt;p>\"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.\" - Linus Torvalds&lt;/p>";
				echo "&lt;p>Today is " . date("l") . ", " . date("m/d/Y") . ".&lt;/p>";

				$url="https://www.w3schools.com/css/";
				echo "&lt;p>Go to &lt;a href='$url'>W3CSchools CSS Tutorial&lt;/a>&lt;/p>";
				?>
			</code></pre>
			<a href="ex1.php"><button>Run it now</button></a>


			<h3><br><br>PHP Example #2: Simple Variables, Math, and a Function</h3>
			<pre><code class="language-php">
				&lt;?php
				$num1= random_int(1, 12);
				$num2= random_int(1, 12);	
				$product = $num1 * $num2;

				echo "&lt;p> Random times table Example: $num1 * $num2 = &lt;button type='button' id='showAnswer'>Show Answer&lt;/button> &lt;/p>";
				?>

				&lt;div id="result">&lt;/div>
				&lt;br>
				&lt;button type = "button" onClick="window.location.reload()">Another one!&lt;/button>

				&lt;script>
					const phpvar = &lt;?php echo $product ?>;
					const element = document.getElementById("showAnswer");
					element.addEventListener("click", returnResult)
					function returnResult(){
						document.getElementById("result").innerHTML = phpvar ;
					}
				&lt;/script>
			</code></pre>
			<a href="ex2.php"><button>Run it now</button></a>

			

			<h3><br><br>PHP Example #3: Use of Single Quotes</h3>
			<pre><code class="language-php">
				&lt;?php
				echo '&lt;p>Ethics and Responsibility in IT&lt;/p>
					&lt;ol>
						&lt;li>&lt;a href ="https://www.computer.org/education/code-of-ethics">Code of Ethics for Software Engineers (IEEE/ACM)&lt;/a>&lt;/li>
						&lt;li>&lt;a href ="https://www.bcs.org/membership-and-registrations/become-a-member/bcs-code-of-conduct/">BCS Code of Conduct&lt;/a>&lt;/li>
						&lt;li>&lt;a href ="https://www.ieee.org/about/corporate/governance/p7-8.html">IEEE Code of Ethics&lt;/a>&lt;/li>
					&lt;/ol>	

					';
				?>
			</code></pre>
			<a href="ex3.php"><button>Run it now</button></a>

			<h3><br><br>PHP Example #4: Use of if-else statements</h3>
			<pre><code class="language-php">
				&lt;?php
					$battingAverage = .4;
					if ($battingAverage >= .27) {
						echo"&lt;p>You are a good batter!&lt;/p>";
					}
					else {
						echo "&lt;p>You are a terrible batter!&lt;/p>";
					}
				?>
			</code></pre>
			<a href="ex4.php"><button>Run it now</button></a>

			<h3><br><br>PHP Example #5: Use of logical operators</h3>
			<pre><code class="language-php">
				&lt;?php
					$checking = 5000;
					if ($checking >1000000){
						echo "&lt;p>You are rich!&lt;/p>";
					}
					elseif ($checking > 1000 && $checking &lt;= 999999) {
						echo "&lt;p>You are pretty ok!&lt;/p>";
					}
					elseif ($checking >0 && $checking &lt;= 999) {
						echo "&lt;p>Well you're not broke yet!&lt;/p>";
					}
					else {
						echo "&lt;p>You are in debt!&lt;/p>";
					}
				?>
			</code></pre>
			<a href="ex5.php"><button>Run it now</button></a>

			<h3><br><br>PHP Example #6: Use of user defined functions</h3>
			<pre><code class="language-php">
				&lt;?php
					$gasPrice = 3.25;
					$threshold = 3;

					function buyGas(){
						global $gasPrice;
						echo '&lt;p>Gas is cheap go buy now! It only costs' . $gasPrice . ' right now.&lt;/p>'; }
						
					function dontBuyGas() {
						global $gasPrice;
						echo '&lt;p>Gas is expensive today, better check again tomorrow... It costs ' . $gasPrice . ' right now.&lt;/p>'; }
					
					if ($gasPrice &lt; $threshold) {
						buyGas(); }
					
					else {
						dontBuyGas(); }		
				?>
			</code></pre>
			<a href="ex6.php"><button>Run it now</button></a>

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