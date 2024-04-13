<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Web Hosting</title>  
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
			<h1>Web Hosting and Domain Names</h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <h3>Three popular companies you can buy domain names from and host websites are:</h3>
            <ol>
                <li><a href="https://www.bluehost.com">Bluehost</a></li>
                <li><a href="https://www.dreamhost.com">DreamHost</a></li>
                <li><a href="https://www.godaddy.com">GoDaddy</a></li>
            </ol>
            <p>A .com cost $12.99 for 1 year at bluehost.com, private registration is an additional $11.88</p>
            <p>A .com cost $8.99 for 1 year at dreamhost.com and includes free private registration</p>
            <p>A .com cost $21.99 for 1 year at godaddy.com</p>
            <p>A .com cost $109.95 for 5 years at Godaddy.com</p>

            <h2>Nine Newer TLDs</h2>
            <table>
                <tr>
                    <th>TLD Name</th>
                    <th>TLD purpose</th>
                </tr>
                <tr>
                    <td>.dad</td>
                    <td>a google domain reserved for those sharing fatherhood content</td>
                </tr>
                <tr>
                    <td>.phd</td>
                    <td>a google domain bbreviated for anyone with a doctorate</td>
                </tr>
                <tr>
                    <td>.prof</td>
                    <td>an educational domain used by professors</td>
                </tr>
                <tr>
                    <td>.esq</td>
                    <td>abbreviated esquire for lawers</td>
                </tr>
                <tr>
                    <td>.foo</td>
                    <td>a domain for developers to use for anything at all</td>
                </tr>
                <tr>
                    <td>.pet</td>
                    <td>bought by animal lovers to show off their furry friends, or offer services</td>
                </tr>
                <tr>
                    <td>.mov</td>
                    <td>for moving pictures and video content</td>
                </tr>
                <tr>
                    <td>.nexus</td>
                    <td>A domain to bring multiple spaces together. A central hub.</td>
                </tr>
                <tr>
                    <td>.fan</td>
                    <td>a domian used to build a following</td>
                </tr>
            </table>
            <br>
            <p>Web Hosting ast Bluehost.com currently starts at $2.95 per month</p>
            <h3>Three factors That google search engine uses to rank web sites in its database are:</h3>
            <ol>
                <li>Relevance - The systems analyze the content to assess whether it contains information that might be relevant to what you are looking for.</li>
                <li>Quality - The systems aim to prioritize those that seem most helpful.</li>
                <li>Context - Information such as your location, past Search history, and Search settings determine useful results.</li>
            </ol>
            <h3>We support sub-domains. Three examples of sub-domains at Google are:</h3>
            <ul>
                <li><strong>mail</strong>.google.com - <a href="https://mail.google.com">gMail</a></li>
                <li><strong>maps</strong>.google.com - <a href="https://maps.google.com">Google Maps</a></li>
                <li><strong>images</strong>.google.com - <a href="https://images.google.com">Google Images</a></li>
            </ul>
            <h3>There may be a reason why you do not want search engines to add certain webpages, parts of your web site, or images on your website to their database. Three methods for doing this are:</h3>
            <ol>
                <li>Submit a request with the search engines to remove the page</li>
                <li>create a robots.txt file to block crawlers</li>
                <li>add a meta tag in your HTML file for the page</li>
            </ol>  
            <h3>Three major web site traffic analytics programs are:</h3>
            <ol>
                <li><a href="https://developers.google.com/analytics">Google Analytics</a></li>
                <li><a href="https://www.semrush.com/">Semrush</a></li>
                <li><a href="https://www.similarweb.com/">Similarweb</a></li>
            </ol>

            <h3>Three ways technology interacts with civil rights and civil liverites are:</h3>
            <ol>
                <li>Voting rights: You can easily register to vote online now in many states!</li>
                <li>ADA: W3 checker ensures sure site compatbility for those with disabilites.</li>
                <li>Free Speech: The Internet in the US is an open platform to promote whatever an indevidual sees fit.</li>
            </ol>

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