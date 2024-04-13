<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Methodologies</title>  
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

	<!--  CanvasJS external files-->
	<script src="js/mypiechart.js"></script>
	<script src="js/canvasjs.min.js"></script> 

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
			<h1>JavaScript And The Web Development Process</h1>
		</div>
	</div>
	
	<div id="overviews" class="section lb">
        <div class="container">

            <h1>What is the Web Developement Process?</h1>
            <p>The web development process is a blueprint that designers follow in order to create a great website. 
                Similar to the application development lifecycle used by software engineers, web designers also follow a series of steps to create 
                and perfect their designs. Choosing not to follow a systematic process could result in a product that the customer 
                did not ask for, or does not meet the intended criteria outlined by the customer.
            </p>

            <h1>SDLCs and Project Management</h1>
            <p>SDLCs, or the Software Development Lifecycle is what a web development process draws its roots from. 
                Typically, there is a planning/requirements phase where the designers take into account the intended purpose of the 
                application or site. Next is the design phase, where several different blueprints are drafted to show to the client.
                The feedback is then used for the development/implementation phase. This the actual coding part where is where the chosen 
                design is built! Once it's built we need to make sure everything works. Enter the verification/testing phase. Here we test 
                and debug all parts of the product to ensure no critical problems will surface. That would be embarressing for a final product. 
                Finally, we will publish the product and maintain it in the final deployment phase. During maintenence, the cycle will repeat
                itself for any future updates and patches, and the cycle repeats. You can find more detailed information on all the different kinds 
                of SDLCs from <a href="https://datarob.com/essentials-software-development-life-cycle/">Datarob's article: Understanding the Software Development Life Cycle</a>.
            </p>

            <h3>Traditional Waterfall SDLC Methodology</h3>
            <p><img src="images/waterfall.png" alt="Waterfall SDLC" class="responsive"></p>
            <p>Image Source: <a href="https://en.wikipedia.org/wiki/Software_development_process">Wikipedia Software Development Process</a></p>

            <h3>Agile Methodology</h3>

			<img src="images/agile.png" alt="Agile workflow" class="responsive">
			<h1><br>Web Development Phases</h1>
			
			<!-- Javascript charts -->

			<div id="chartContainer" style="height: 450px; width: 95%; "></div> 

			<!-- PHP web search -->

			<h3>Examples of JavaScript</h3>

			<br> 
			<form class = "searchBox" target="_blank" action="search.php" method="get">
				<table>
					<tr>
						<th colspan="2">Search Sites</th>
					</tr>
					<tr>
						<td>Site to search:</td>
						<td>
							<select name="site">
								<option value="google">Google Web</option>
								<option value="googlei">Google Images</option>
								<option value="duck">DuckDuckGo</option>
								<option value="wiki">Wikipedia</option>

							</select>
						</td>
					</tr>          
					<tr>
						<td>Search term(s):</td>
						<td>
							<input type="text" name="terms" size="25" maxlength="25">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Submit" class="centercell">
						</td>
					</tr>
				</table>
			</form> 
			<br> 

			<!-- JavaScript search -->
			<table class="table1">
				<thead>	
					<tr>
						<th colspan="3"> Enter the elected official to search for: <input id="myInput" type="text" placeholder="Enter search text..."></th>
					</tr>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Contact</th>
					</tr>
				</thead>

				<tbody id="myTable">
					<tr>
						<td>Joseph Kuspa</td>
						<td>Mayor of Southgate</td>
						<td>jkuspa@southgatemi.gov</td>						
					</tr>
					<tr>
						<td>Shri Thanedar</td>
						<td>House Representative of Michigan</td>
						<td>313-880-2400 <br>400 Monroe St<br>Suite 420<br>Detroit, MI 48226</td>
					</tr>
					<tr>
						<td>Gary Peters</td>
						<td>Senator for Michigan</td>
						<td>Patric V. McNamara Federal Building<br>477 Michigagn Ave<br>Suite 1837<br>Detroit, MI 48226</td>
					</tr>
				</tbody>
			</table>
			<br>
			<h3>Test your knowledge with a <a href="jsquiz.php">JavaScript Quiz</a>!</h3>
			<h3>Try my <a href="tuitioncalculator.php">Tuition Calculator</a> for Henry Ford College!</h3>
			<h3>Learn more about notable figures of web development in this <a href="slideshow.php">Slideshow</a>!</h3>

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