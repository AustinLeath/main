<!DOCTYPE HTML>
<html>
	<head>
		<title>Ten Sins Gaming</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="HTML,CSS,XML,JavaScript,Web,Engineer,Resume,CSS3,HTML5,Austin,Leath,Lethal,Game,Studios,LethalGameStudios">
		<meta name="description" content="Austin is a young web engineer looking for work. If you would like to contact him send him an email at austinleath18@gmail.com">
		<meta name="author" content="Austin Leath">
		<meta name='copyright' content='Lethal Game Studios'>
		<meta name='owner' content='Austin Leath'>
		<link rel="shortcut icon" href="images/main/favicon.ico" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="home/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="background">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="">R6 | TSG</a></h1>
					<nav id="nav">
						<ul>
							<li>
									<p id="timer"></p>
									<li>
									<button class="button small btnalign" id="btn1" type="button" onclick="myFunction()">Light Mode</button>
									<li>
									<button class="button small btnalign" id="btn2" type="button" onclick="myFunction1()">Dark Mode</button>
									<li>
								<a href="">Other Information</a>
								  <ul>
									 <li><a href="git/github.html">GitHub Code</a></li>
									 <li><a href="tools.php">Development Tools</a></li>
									 <li><a href="rcs/index.php">Rileigh Sayen</a></li>
									 <li><a href="info/aboutdeveloper.html">About Me</a></li>
									 <li><a href="vrsenal/index.php">VRsenal</a></li>
									 <li><a href="index.html">Return Home</a></li>
								  </ul>
							<!--DIVIDER-->
										 <li>
											<a href="">Legal</a>
											 <ul>
												 <li><a href="legal/apachelicense.php">Apache License</a></li>
												 <li><a href="legal/mitlicense.php">MIT License</a></li>
											 </ul>
											</li>
							 <!--DIVIDER-->
									 <li>
										 <a href="">Streaming</a>
											 <ul>
												<li><a href="streaming/gamesweplay.php">Games We Play</a></li>
 												<li><a href="streaming/streamerswewatch.php">Streamers We Watch</a></li>
 												<li><a href="streaming/streaming.php">Streaming</a></li>
												<li><a href="streaming/form.php">Form</a></li>
											 </ul>
										  </li>
							 <!--DIVIDER-->
										 </li>
									  </ul>
							     </li>
						   <!-- Add Another Button Here -->
						 </ul>
					 </nav>
	  		 </header>
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Rainbow Six Siege | Ten Sins Gaming</h2>
							<h5 id="cycletxt-1">The following page contains a compiled list of my skills and experiences</h5>
							<h5 id="cycletxt-2">Welcome to my site</h5>
							<h5 id="cycletxt-3">Use the menu at the top of the page to see my entire site</h5>
						</header>
										<!-- Content -->
													<section id="content">
														<table>
															<thead>
																<tr>
																	<th>Ten Sins Gaming Team Players</th>
																	<th>Ingame Role</th>
																	<th>R6DB Player Statistics</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>TSG.Slurgus</td>
																	<td>Entry Fragger</td>
																	<td><a href="https://r6db.com/player/8894b513-7067-473e-a001-e316104e32ea" target="_blank">R6DB Statistics</a></td>
																</tr>
																<tr>
																	<td>TSG.Temp-0</td>
																	<td>Ingame Leader / Refragger</td>
																	<td><a href="https://r6db.com/player/ca54e49a-76f2-4290-8e11-e36827caccb0" target="_blank">R6DB Statistics</a></td>
																</tr>
																<tr>
																	<td>TSG.Lethal</td>
																	<td>Manager, Lurker</td>
																	<td><a href="https://r6db.com/player/767374e1-b218-42ff-98c6-3f78553db5e9" target="_blank">R6DB Statistics</a></td>
																</tr>
																<tr>
																	<td>TSG.Jiffy</td>
																	<td>Fragger / Support</td>
																	<td><a href="https://r6db.com/player/f561393f-63bb-4332-b71b-cbb1665b46ed" target="_blank">R6DB Statistics</a></td>
																</tr>
																<tr>
																	<td>TSG.Phishz</td>
																	<td>Entry Fragger</td>
																	<td><a href="https://r6db.com/player/17541266-d840-4044-aa46-8f1e3edc7c5e" target="_blank">R6DB Statistics</a></td>
																</tr>
																<tr>
																	<td>TSG.Prince</td>
																	<td>Support</td>
																	<td><a href="https://r6db.com/player/80543135-bd7d-4c52-8c4d-c398cc35982a" target="_blank">R6DB Statistics</a></td>
																</tr>
															</tbody>
															<tfoot>
																<tr>
																	<td colspan="2"></td>
																	<td>Current as of <?php echo date("F");?> of <?php echo date("Y");?></td>
																</tr>
															</tfoot>
														</table>
													<!--Divider-->
													<?php curl -X GET "https://r6db.com/api/v2/players?name=tsg.slurgus&platform=pc&exact=true" -H "accept: application/json" -H "x-app-id: 8aa3fe5f-5c23-42c7-bdd5-19498cf251a6";>
								</section>
					</div>
					<iframe class="r6db" src="https://r6db.com/"></iframe>
					<iframe class="r6stats" src="https://game-rainbow6.ubi.com/en-us/home"></iframe>

				</div>
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/austinzleath" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/AustinZacharyLeath" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.linkedin.com/in/austin-leath-30a39a106/" target="_blank" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://www.instagram.com/austin_leath/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/AustinLeath/main" target="_blank" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="mailto:austinleath18@gmail.com" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; austinleath.com - All rights reserved. Lethal Game Studios&trade;</li>
						<li><a href="legal/apachelicense.php" /a>Apache License</li>
						<li><a href="legal/mitlicense.php" /a>MIT License</li>
						<li><a href="javascript:history.go(-1)">Go Back</a></li>
					</ul>
					<ul class="copyright">
						<li><a href="https://r6db.com/"> <svg viewBox="0 0 187 123" width="25%" height="100%"><g fill="#FFF" fill-rule="evenodd"><path d="M14.695 69.109v30.22H0V22.783h15.41c7.186 0 17.587.308 21.036 4.095 1.646 1.808 3.23 3.633 4.242 6.438 1.106 3.07 1.562 7.21 1.562 11.24 0 4.504-.973 12.993-2.685 16.501-1.712 3.508-6.468 6.41-6.468 6.41s6.741 26.838 9.153 31.864H26.98l-8.167-30.221h-4.118zm.04-11.372h3.33c3.265 0 6.236-.083 8.102-2.136 1.866-2.053 1.46-5.802 1.46-9.467 0-3.63.275-7.934-1.46-9.612-1.735-1.678-4.77-1.984-8.101-1.984h-3.332v23.2zM144.642 22.782h18.702c8.102 0 14.904 1.526 18.564 4.579 3.66 3.052 4.408 9.323 4.408 15.98 0 4.517-.682 8.267-2.59 10.797-1.906 2.53-4.778 3.83-4.778 3.83s4.252 2.05 5.854 4.982c1.603 2.931 2.09 6.502 2.09 13.663 0 7.16-.85 13.971-4.615 17.834-3.765 3.863-9.798 4.883-16.26 4.883h-21.375V22.782zm13.954 41.695v23.475h6.054c3.335 0 4.871-.645 6.46-2.335 1.59-1.69 1.215-5.919 1.215-9.402 0-1.994.382-7.434-1.215-9.552-1.193-1.582-3.563-2.186-6.46-2.186h-6.054zm.002-11.74h5.122c3.282 0 5.697.16 7.023-1.853 1.326-2.014 1.203-4.554 1.203-7.658 0-2.897.278-5.77-1.937-7.7-2.215-1.93-3.418-1.808-6.883-1.808h-4.528v19.019zM141.816 60.323c0 4.141.06 8.314-.038 12.287-.126 5.093.048 10.62-1.048 14.576-.651 2.348-2.11 3.65-3.358 5.326-4.993 6.702-15.246 6.818-24.672 6.818H97.614V22.782h16.726c8.697 0 18.878-.065 23.689 6.532 1.532 2.102 2.722 4.797 3.235 7.885.423 2.542.284 5.35.39 8.311.048 1.367.08 2.766.113 4.187.082 3.497.05 7.1.05 10.626zm-13.81 1.486c0-22.704.383-27.12-9.723-27.12h-6.013v52.798h4.847c10.884 0 10.89-2.974 10.89-25.678z"></path><path d="M8.823 22.782H5.782l18.035 8.644s3.81-3.75 3.81 14.079V99.33h9.337c.185-.935.949-5.167-.039-7.052-.935-1.786-2.219-3.182-2.718-6.068-.982-5.668-1.053-12.29-1.053-19.25V49.364c0-4.661-.276-7.424.552-12.267.828-4.843-27.827-14.289-27.827-14.289l2.944-.026zm54.788 0h15.585V99.33H60.618c4.954-.446 9.45-1.821 12.342-5.411 3.77-4.68 4.413-12.045 4.413-20.067 0-4.573-.178-9.566-1.077-13.981-.563-2.77-1.429-5.522-2.65-7.148-3.171-4.217-7.125-5.82-13.353-5.82-10.694 0-13.421 4.186-13.421 4.186 0-7.19-.328-9.792 1.1-13.015 1.428-3.223 3.47-3.76 6.372-3.76 2.9 0 6.622.761 7.676 6.101l14.276-3.317c-.992-7.42-6.541-12.845-12.685-14.316zm-7.96 65.278c2.827 0 4.651-.754 6.165-3.018 1.514-2.264 1.916-6.394 1.916-10.582 0-3.643-.027-11.102-1.44-13.195-1.415-2.094-4.549-2.626-7.406-2.626-2.685 0-4.341.549-6.241 2.626-1.9 2.076-1.31 8.827-1.31 11.585 0 4.051.038 9.4 1.823 12.192 1.785 2.791 3.75 3.018 6.492 3.018zM86.5 0h3.431v123H86.5z"></path></g></svg></a></li>
					</ul>
				</footer>
		</div>

		<!-- Scripts -->
		  <script src="home/assets/js/time.js"></script>
			<script src="home/assets/js/jquery.min.js"></script>
			<script src="home/assets/js/jquery.scrolly.min.js"></script>
			<script src="home/assets/js/jquery.dropotron.min.js"></script>
			<script src="home/assets/js/jquery.scrollex.min.js"></script>
			<script src="home/assets/js/skel.min.js"></script>
			<script src="home/assets/js/util.js"></script>
			<script src="home/assets/js/cycletxt.js"></script>
			<script src="home/assets/js/normalizestyle.js"></script>
			<script src="home/assets/js/cyclestyle.js"></script>
			<!--[if lte IE 8]><script src="home/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="home/assets/js/main.js"></script>

	</body>
</html>