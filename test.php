<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Templating for My PWP Mk 2</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Custom CSS -->
		<link type="text/css" href="css/mystyle.css" rel="stylesheet" />

		<title>Alexander DuBois</title>
	</head>



	<body>
		<!--		 This is the main section; it acts as a navigation hub for the other sections -->
		<section class="section-main">
			<div class="container center-block text-center">
				<div class="row border">
					<div class="col-xs-2 col-xs-offset-5 text-center">
						<i class="fa fa-caret-up border" data-toggle="modal" data-target="#slideout-about-me"
							id="slideout-up-on"></i>
					</div>
				</div>
				<div class="row col-xs-offset-3">
					<div>
						<i class="fa fa-caret-left col-xs-2" data-toggle="modal" data-target="#slideout-resume" id="slideout-left-on"></i>
						<p class="col-xs-2">This is my webpage.  Click on the arrows to navigate.</p>
						<i class="fa fa-caret-right col-xs-2" data-toggle="modal" data-target="#slideout-projects" id="slideout-right-on"></i>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 col-xs-offset-5">
						<i class="fa fa-caret-down" data-toggle="modal" data-target="#slideout-contact-form"
							id="slideout-down-on"></i>
					</div>
				</div>
			</div>
		</section>

		<!--  Code for sliding panels based on example at:
				https://codepen.io/exitfish/pen/BydsE
		 		by Matthew Podsiad -->

		<!-- This section is a short autobiographical blurb -->
		<section class="section-about-me">
			<div class="modal fade container" id="slideout-about-me">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<p>
							We're acquainted with the wormhole phenomenon, but this... Is a remarkable piece of bio-electronic engineering by which I see much of the EM spectrum ranging from heat and infrared through radio waves, et cetera, and forgive me if I've said and listened to this a thousand times. This planet's interior heat provides an abundance of geothermal energy. We need to neutralize the homing signal.
						</p>
						<p>
							Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level. That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.
						</p>
						<p>
							Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level. That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.
						</p>
						<p>
							Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level. That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.
						</p>
						<p>
							Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level. That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.
						</p>
						<p>
							Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level. That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- This section is a showcase of other projects I've worked on -->
		<section class="section-projects">
			<div class="container modal" id="slideout-projects">
				<div class="row project1">
					<a href="#"><img src="https://www.fillmurray.com/300/300" alt="foodquisition" class="img-fluid float-left
					rounded col-xs-3" /></a>
					<h5>Foodquisition</h5>
					<p>
						Have you ever wondered how well the restaurant you're eating at scored on its health inspection?
						Well, wonder no more.  A group project built primarily in MySQL, PHP, Angular, and Javascript with
						3 other students
					</p>
				</div>
				<div class="row project2">
					<a href="#"><img src="https://www.fillmurray.com/g/300/300" alt="placeholder" class="img-fluid
					rounded"/></a>
					<h5>Project 2</h5>
					<p>
						This is a description of the second project in this gallery.  It talks about what the project's aims
						are, what language(s) it was built with, and maybe a witty blurb.
					</p>
				</div>
			</div>
		</section>


		<!-- This section is for my resumé -->
		<section class="section-resume">
			<div class="container modal" id="slideout-resume">
				<div class="resume-title">
					<div class="row justify-content-center">
						<p class="col-xs-12"><em>Alexander DuBois</em></p>
					</div>
					<div class="row justify-content-center">
						<p class="col-xs-12"><em>Albuquerque, New Mexico 87114</em> -- Willing to
							relocate</p>
					</div>
					<div class="row justify-content-center">
						<p class="col-xs-12 col-md-3"><em>(760) 793-3972</em></p>
						<p class="col-xs-12 col-md-3"><em>adubois@alumni.uci.edu</em></p>
					</div>
					<div class="row justify-content-center">
						<p class="col-xs-12 col-md-3">GitHub--<em>adubois85</em></p>
						<p class="col-xs-12 col-md-3">LinkedIn--<em>/in/dubious</em></p>
					</div>
				</div>

				<div class="resume-skills">
					<div class="row">
						<p class="col-xs-12 col-md-4"><em>Languages</em></p>
						<p class="col-xs-12 col-md-8">PHP, Javascript, MySQL, HTML5, CSS</p>
					</div>
					<div class="row">
						<p class="col-xs-12 col-md-4"><em>Tools</em></p>
						<p class="col-xs-12 col-md-8">GitHub, Bootstrap, AngularJS, PHPStorm, Atom</p>
					</div>
					<div class="row">
						<p class="col-xs-12 col-md-4"><em>Other Skills</em></p>
						<p class="col-xs-12 col-md-8">50+ WPM typing speed, 4,000 KPH 10-key, Attentive to details and will excel individually or with a team</p>
					</div>
				</div>

				<div class="resume-experience">
					<h6>Recent Experience</h6>
					<div class="row justify-content-between">
						<p class="col-xs-6"><em>Data Specialist</em> -- SL Start</p>
						<p class="col-xs-6"><em>August, 2015 to April, 2016</em></p>
					</div>
					<ul>
						<li>Screened, counseled and advised clients on necessary documentation and eligibility requirements for SNAP (food stamps)</li>
						<li>
							Conducted outreach to community based organizations, emergency food programs and other
							partners, providing information on SNAP rules and regulations
						</li>
						<li>Provided facilitated enrollment services to clients to apply and re-certify for SNAP</li>
						<li>Responsible for ensuring that all applications are complete with proper supporting documentation</li>
						<li>Knowledgeable of benefits screening, especially for SNAP</li>
					</ul>
				</div>
				<div class="temp-jobs">
					<h6>Temp Jobs</h6>
					<div class="row justify-content-between">
						<p class="col-xs-6"><em>Various</em></p>
						<p class="col-xs-6"><em>2011 - 2014</em></p>
					</div>
					<ul>
						<li>Restaurants, Direct Care Staff Employee, Division of Vocational Rehabilitation</li>
					</ul>
				</div>
				<div class="education">
					<h6>Education</h6>
					<div class="row justify-content-between">
						<p class="col-xs-6"><em>B.A.</em>Psychology and Social Behavior</p>
						<p class="col-xs-6"><em>September 2007</em></p>
					</div>
					<div class="row">
						<p><em>B.A.</em>Studio Art</p>
					</div>
					<div class="row">
						<p class="offset-xs-1">University of California, Irvine</p>
					</div>
				</div>
				<div class="references">
					<h6>References</h6>
					<p>Available upon request</p>
				</div>
			</div>
		</section>

		<!-- This section is a secured form for contacting me -->
		<section class="section-contact-form">
			<div class="container modal" id="slideout-contact-form">
				<label for="contact-name">Your name</label>
				<div class="input-group input-group-lg">
					<span class="input-group-addon" id="contact-name"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input type="text" class="form-control" placeholder="What should I call you?" aria-label="Your name" />
				</div>

				<label for="contact-email">Your email</label>
				<div class="input-group">
					<span class="input-group-addon" id="contact-email"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<input type="text" class="form-control" placeholder="Where can I reach you?" aria-label="Your email
				address" />
				</div>

				<label for="contact-subject">Email subject</label>
				<div class="input-group">
					<span class="input-group-addon" id="contact-subject"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
					<input type="text" class="form-control" placeholder="Why are you contacting me today?" aria-label="Email
				subject line" />
				</div>

				<label for="contact-body">Email body</label>
				<div class="input-group">
				<textarea class="form-control"  id="contact-body" rows=6 placeholder="What's on your mind? (4000 characters max)"
							 aria-label="Email body"></textarea>
				</div>

				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</section>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- My JavaScript file -->
		<script src="js/script.js"></script>

	</body>
</html>