<!DOCTYPE HTML>
<html>
	<head>
		<title>R6S | MMR Calculator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="HTML,CSS,XML,JavaScript,Web,Engineer,Resume,CSS3,HTML5,Austin,Leath,Lethal,Game,Studios,LethalGameStudios">
		<meta name="description" content="The Rainbow Six Siege | MMR Calculator uses a users current MMR and ELO to display how many matches the user has to win or lose to reach their goal">
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
					<h1 id="logo"><a href="">R6S | MMR Calculator</a></h1>
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
						<a class="image fit"><img src="images/r6.jpg" alt="" /></a>
										<!-- Content -->
													<section id="content">
													<!--Divider-->
														</section>
															<section id="formdata">
																<h3>Rainbow Six Siege | MMR Calculator</h3>
																<form method="post" action="">
																	<div class="row uniform 50%">
																		<div class="6u 12u$(xsmall)">
																			<input type="number" name="MMR" id="MMR" value="" placeholder="Enter your current MMR">
																		</div>
																		<div class="6u$ 12u$(xsmall)">
																			<input type="number" name="ELO" id="ELO" value="" placeholder="Enter your current ELO per match">
																		</div>
																		<div class="12u$">
																			<div class="select-wrapper">
																				<select name="rankfinal" id="rankfinal">
																					<option value="0">- Select a Rank -</option>
																					<option value="1300">Copper IV</option>
																					<option value="1400">Copper III</option>
																					<option value="1500">Copper II</option>
																					<option value="1600">Copper I</option>
																					<option value="1700">Bronze IV</option>
																					<option value="1800">Bronze III</option>
																					<option value="1900">Bronze II</option>
																					<option value="2000">Bronze I</option>
																					<option value="2100">Silver IV</option>
																			 		<option value="2200">Silver III</option>
																					<option value="2300">Silver II</option>
																					<option value="2400">Silver I</option>
																					<option value="2500">Gold IV</option>
																					<option value="2700">Gold III</option>
																					<option value="2900">Gold II</option>
																					<option value="3100">Gold I</option>
																					<option value="3300">Platinum III</option>
																					<option value="3700">Platinum II</option>
																					<option value="4100">Platinum I</option>
																					<option value="4500">Diamond</option>
																				</select>
																			</div>
																		</div>
																		<div class="12u$">
																			<ul class="actions">
																				<li><input type="submit" value="Submit" class="special"></li>
																				<li><input type="reset" value="Reset"></li>
																			</ul>
																		</div>
																	</div>
															</form>
															<div id="phpsubmit">
													    Since your MMR is: <?php echo $_POST["MMR"]; ?> and the ELO you get per match is: <?php echo $_POST["ELO"]; ?><br>
															<?php
															$a = $_POST["rankfinal"];
															$b = $_POST["MMR"];
															$c = $_POST["ELO"];
															$d = ($a - $b) / $c;

															if ($d > "0") {
																 echo "You need to <b>win</b>";
															} elseif ($d < "0") {
																 echo "You need to <b>lose</b>";
															} else {
																 echo "You <b>dont</b> need to win or lose";
															}
															?>

															<?php
															$a = $_POST["rankfinal"];
															$b = $_POST["MMR"];
															$c = $_POST["ELO"];
															$d = ($a - $b) / $c;
															$e = ceil($d);
															echo abs($e);
															?> (&plusmn; 1)

															<?php
															$a = $_POST["rankfinal"];
															$b = $_POST["MMR"];
															$c = $_POST["ELO"];
															$d = ($a - $b) / $c;
															$e = ceil($d);
															$f = abs($e);
															if ($f > "1") {
																 echo "matches";
															} else {
																 echo "match";
															}
															?> to reach your rank goal<br>
														</div>
								</section>
						 </div>
				</div>
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
			<script src="home/assets/js/showanswer.js"></script>
			<!--[if lte IE 8]><script src="home/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="home/assets/js/main.js"></script>
			<script>
			function showHint(str) {
			    if (str.length == 0) {
			        document.getElementById("txtHint").innerHTML = "";
			        return;
			    } else {
			        var xmlhttp = new XMLHttpRequest();
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("txtHint").innerHTML = this.responseText;
			            }
			        };
			        xmlhttp.open("GET", "/home/assets/php/gethint.php?q=" + str, true);
			        xmlhttp.send();
			    }
			}
		</script>
		<script src="home/assets/js/loadjson.js"></script>
	</body>
</html>