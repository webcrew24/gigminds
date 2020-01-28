<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Gigminds | Career &middot; Marketplace &middot; News | for Salesforce Professionals</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="theme/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="theme/css/style.css" rel="stylesheet">
	<link href="theme/color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="theme/img/favicon.ico">
<script>var w=window;var p = w.location.protocol;if(p.indexOf("http") < 0){p = "http"+":";}var d = document;var f = d.getElementsByTagName('script')[0],s = d.createElement('script');s.type = 'text/javascript'; s.async = false; if (s.readyState){s.onreadystatechange = function(){if (s.readyState=="loaded"||s.readyState == "complete"){s.onreadystatechange = null;try{loadwaprops("27218d28c96aa859e2d9c0443c2a9bb02","237071a7fd129979b6a73058460b2a736","21117946d9b8091ca7d368b73e6647610894375f7a7d2d66f","2b9ea10025cbdf220153d8b9ef45f11e2","0.0");}catch(e){}}};}else {s.onload = function(){try{loadwaprops("27218d28c96aa859e2d9c0443c2a9bb02","237071a7fd129979b6a73058460b2a736","21117946d9b8091ca7d368b73e6647610894375f7a7d2d66f","2b9ea10025cbdf220153d8b9ef45f11e2","0.0");}catch(e){}};};s.src =p+"//marketinghub.zoho.com/hub/js/WebsiteAutomation.js";f.parentNode.insertBefore(s, f);</script>
</head>

<body style="background-color: #3279be;">
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="/"><img src="images/gm-text-transparent-white.png" style="height: 40px;" /></a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
                            <li><a href="/login">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="images/gm-face-transparent-white.png" alt="" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										for <strong>Salesforce</strong> professionals
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										enhance your <strong>career</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										freelancer <strong>marketplace</strong>
									</p>
                                </li>
								<li>
									<p class="home-slide-content">
										and much <strong>more</strong>
									</p>
                                </li>   
								<li>
									<p class="home-slide-content">
										get <strong>early</strong> access
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										coming in <strong>2020</strong>
									</p>
								</li>
                                                             
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>

	<section class="spacer" style="background-color: #327ABE;">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft animated fadeInLeftBig">
					<div style="color: #fff; font-size: 56px; line-height: 60px; font-weight: 800; padding-bottom: 12px;">AI based hiring for the new generation</div>
					<div style="color: #fff; font-size: 40px; line-height: 44px; font-weight: 200; padding-bottom: 12px;">Our technology is helping organizations and candidates find a perfect <strong>match</strong></div>
					<div style="font-size: 20px; line-height: 22px;"><em>* Currently available only for organizations and candidates requiring and/or having Salesforce technology skills</em></div>
				</div>
				<div class="span6 aligncenter flyRight animated fadeInRightBig">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>



	<section class="spacer bg3">
		<div class="container">
			<div class="blankdivider60"></div>
			<div class="row">
				<div class="span12 aligncenter flyLeft animated fadeInLeftBig">
					<blockquote class="large">
						Fulfill your need for full-time Salesforce professionals to freelancers/remote workers and everything in between.
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight animated fadeInRightBig">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
			<div class="blankdivider60"></div>
		</div>
	</section>


	<div>
		<!-- section: contact -->
		<section id="contact" class="section green">
			<div class="container">
				<h4>Join our early access program</h4>
				<div style="color: #fff; padding-bottom: 40px;">
					<center>Sign up to join our early access program where you will be able to connect with your fellow Salesforce profressionals. Early access program provisioning will be performed on first come first served basis.</center>
				</div>
				<div class="row">
					<div class="span12">
						<div class="cform" id="contact-form">
							<div id="sendmessage">Your message has been sent. Thank you!</div>
							<div id="errormessage"></div>
							<form action="signup" method="post">
								<div class="row">
									<div class="span4">
										<div class="field your-name form-group">
											<input type="text" name="first_name" class="form-control" id="first_name" placeholder="Your First Name" data-rule="minlen:2" data-msg="Please enter at least 2 chars" value="{{ old('first_name') }}" />
											@csrf
											<div>@error('first_name') {{ $message }} @enderror</div>
										</div>
									</div>
									<div class="span4">
										<div class="field your-role form-group">
											<select name="role" class="form-control" id="role" placeholder="Your Role" style="height: 60px; margin-bottom:30px; width: 100%; font-size: 16px;"  value="{{ old('role') }}">
												<option value="">Select your Role</option>
												<option value="Job Seeker">Job Seeker</option>
												<option value="Recruiter">Recruiter</option>
												<option value="Hiring Manager">Hiring Manager</option>
												<option value="Staffing">Staffing/Consulting Organization</option>
												<option value="Freelancer">Freelancer</option>
											</select>
											<div>@error('role') {{ $message }} @enderror</div>
										</div>
									</div>
									<div class="span4">
										<div class="field your-email form-group">
											<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  value="{{ old('email') }}" />
											<div>@error('email') {{ $message }} @enderror</div>
										</div>
									</div>
									<div class="span12">
										<center><input type="submit" value="Sign-up" class="btn btn-theme"></center>
										<div style="color: #ffffff; padding-top: 30px;"><center>(Note: Due to high volume of of early access subscribers, your access may be delayed as we are<br/>provisioning the account based on first come first serve basis.)</center></div>
									</div>
								</div>
							</form>
							
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
    <main>
        @yield('content')
    </main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<p class="copyright">
                        <small>&copy; 2019 Gigminds®. All rights reserved.<br/>
                        Gigminds® and the face logo service marks are owned by Cloudely, Inc.</small>
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="theme/js/jquery.js"></script>
	<script src="theme/js/jquery.scrollTo.js"></script>
	<script src="theme/js/jquery.nav.js"></script>
	<script src="theme/js/jquery.localScroll.js"></script>
	<script src="theme/js/bootstrap.js"></script>
	<script src="theme/js/jquery.prettyPhoto.js"></script>
	<script src="theme/js/isotope.js"></script>
	<script src="theme/js/jquery.flexslider.js"></script>
	<script src="theme/js/inview.js"></script>
	<script src="theme/js/animate.js"></script>
	<script src="theme/js/custom.js"></script>
	<script src="theme/contactform/contactform.js"></script>

</body>

</html>
