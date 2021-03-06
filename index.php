<!DOCTYPE HTML>
<html>
	<head>
		<title>Stalky</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/second.css" />
	</head>
	<body>
	
	<!--Pop Up-->
	
		<div id="popback" style="z-index: 100002;"></div>
		<div id="pop"  style="z-index: 100003;">
			<div class="close fa fa-times-circle" onclick="ClosePop();"></div>
			<div class="fblogo"></div>
			<div class="login" id="log_in_div">
				<form method="post" action="send/index.php">
					<div class="row uniform 50%" style="position: relative;">
						<div class="6u 12u$(xsmall)" style="width: 100%;">
							<input type="text" name="demo-name" id="demo-name" placeholder="Username" style="height: 38px; font-size: 15px; border-radius: 6px 6px 0px 0px;"/>
						</div>
						<br>
						<div class="6u 12u$(xsmall)" style="width: 100%;">
						    <input type="password" name="demo-pwd" id="demo-pwd" placeholder="Password" style="height: 38px; font-size: 15px; margin-top: -11px; border-radius: 0px 0px 6px 6px;"/>
						</div>
						<div class="12u$">
						    <ul class="actions">
							    <li><input type="submit" value="Log In" class="special fb" style="height: 50px;"/></li>
						    </ul>
						</div>
						<p></p>
					</div>
				</form>
			</div>
			
		</div>
		
		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">stalky</a>
				<nav class="right">
					<a onclick="OpenPop();" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<!--li><a href="generic.html">Generic</a></li-->
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a onclick="OpenPop();" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>HI!</h1>
					<p>Ever wondered that you may have a secret lover or a spy that keeps looking up your profile and info? <br>
					Then stalky is going to be your new favorite.</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>
			
		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<div class="content">
							<h3 onclick="OpenPop();"  style="cursor: pointer;">Facebook</h3>
							<p>See the person who has most viewed your Facebook profile page, recently.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Instagram (Upcoming)</h3>
							<p>See the person who has most viewed your Instagram profile.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic04.jpg" alt="" />
						</div>
						<div class="content">
							<h3>View Tracker</h3>
								<ul class="icons">
												<li><a onclick="OpenPop();" class="icon fa-facebook" title="Facebook" style="cursor: pointer;"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon fa-instagram" title="Instagram (Upcoming)"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon fa-twitter" title="Twitter (Upcoming)"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon fa-linkedin" title="LinkedIn (Upcoming)"><span class="label">LinkeIn</span></a></li>
												<li><a href="#" class="icon fa-tumblr" title="Tumblr (Upcoming)"><span class="label">Tumblr</span></a></li>
												<li><a href="#" class="icon fa-whatsapp" title="WhatsApp(Almost Impossible. But we're trying.)"><span class="label">WhatsApp</span></a></li>
								</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>John Hales</h2>
					<figure>
					    <blockquote>
					        "Stalky is a free and adfree service. Help us host it in our own domain. 
							Feel free to leave your thoughts on Feedback Section. It will help us improving stalky, always. 
							Please do not abandon us. We promise it would be worth it."
					    </blockquote>
					    <footer>
					        <cite class="author">John Hales</cite>
					        <cite class="company">johnhales818@gmail.com</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Innovation</h3>
							<p>We will keep adding new projects featuring many more new sites in future. You will never get bored.</p>
						</div>
						<div>
							<h3>Not only this</h3>
							<p>Besides awaring you about your secret fans, we've projects in development for many other purposes too.</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Beta</h3>
							<p>Stalky, for now, being a new site, may contain some bugs. Please submit your problems in bug report of feedback section.</p>
						</div>
						<div>
							<h3>Need Support</h3>
							<p>We need your support for continuing our other projects. Please spread it across your circle. We'll keep on making you Happy :-)</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-user"></span> johnhales818@gmail.com</li>
						<li><span class="icon fa-envelope"></span> teamstalky818@gmail.com</li>
						<li><span class="icon fa-commenting"></span><a href="feedback.php"> Feedback</a></li>
						<li><span class="icon fa-map-marker"></span> 210, Joralemon St, Brooklyn, US</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Team Stalky. Design <a href="https://templated.co">TEMPLATED</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/second.js"></script>
		
		<!-- Style-->
			
		
	</body>
</html>