<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>QuickCloud - Hosting Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
						<form role="form" class="form-horizontal">
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
						<form role="form" class="form-horizontal">
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
			<h1>Pricing<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
    <div id="pricing-box" class="section wb">
        <div class="container">
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Standard</h3>
                            </span>
                            <span class="price-value">$15<span class="month">month</span> <span>Lorem ipsum </span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-adjust"></i>
                            <ul>
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>10 subdomains</li>
                                <li>50 Domains</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="hover-btn-new"><span>sign up</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Business</h3>
                            </span>
                            <span class="price-value">$30<span class="month">month</span> <span>Lorem ipsum</span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-briefcase"></i>
                            <ul>
                                <li>70GB Disk Space</li>
                                <li>70 Email Accounts</li>
                                <li>70GB Monthly Bandwidth</li>
                                <li>30 subdomains</li>
                                <li>70 Domains</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="hover-btn-new"><span>sign up</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Premium</h3>
                            </span>
                            <span class="price-value">$45<span class="month">month</span> <span>Lorem ipsum</span><span>Lorem ipsum dolor sit amet</span></span>
                        </div>

                        <div class="pricingContent">
                            <i class="fa fa-cube"></i>
                            <ul>
                                <li>80GB Disk Space</li>
                                <li>80 Email Accounts</li>
                                <li>80GB Monthly Bandwidth</li>
                                <li>40 subdomains</li>
                                <li>80 Domains</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="hover-btn-new"><span>sign up</span></a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
		</div>
    </div><!-- end section -->
	

    <div class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
				<div class="dmoain-pricing">
					<div class="table-responsive-sm">
						<table>
							<thead>
								<tr class="domain-head">
									<th scope="col">
										Domain Name
									</th>
									<th scope="col">
										Registration Pricing
									</th>
									<th scope="col">
										Renewal Pricing
									</th>
									<th scope="col">
										Transfer Pricing
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-label="DOMAIN NAME">.com</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$30 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="DOMAIN NAME">.net</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$20 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="DOMAIN NAME">.org</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$19 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="DOMAIN NAME">.in</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$18 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="DOMAIN NAME">.biz</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$17 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="Acount">.info</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$16 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="DOMAIN NAME">.co.uk</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$15 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
								<tr>
									<td data-label="DOMAIN NAME">.name</td>
									<td data-label="registration pricing">15.00 / yr</td>
									<td data-label="renewal pricing">$14 / yr</td>
									<td data-label="transfer-price">$45.00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
            </div><!-- end title -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid ">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<!-- Footer section-->
	<?php include('footer.php'); ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>