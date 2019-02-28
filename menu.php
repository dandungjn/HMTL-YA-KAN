
<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="style.css">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>SMK WIKRAMA BOGOR</title>
</head>
<body>
<!-- navbar -->
<div class="navbar-fixed">
	<nav class="blue darken-2">
	<div class="container">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">SMK WIKRAMA BOGOR</a>
			<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a href="#about">About Us</a>
				</li>
				<li>
					<a href="#portfolio">Portofolio</a>
				</li>
				<li>
					<a href="#contact">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
	</nav>
</div>
<!-- sidenav -->
<ul class="sidenav" id="mobile-nav">
	<li>
		<a href="#about">About Us</a>
	</li>
	<li>
		<a href="#portfolio">Portofolio</a>
	</li>
	<li>
		<a href="#contact">Contact Us</a>
	</li>
</ul>
<!-- slider -->
<div class="slider">
	<ul class="slides">
		<li>
			<img src="img/slider/4.jpg">
			<div class="caption left-align">
				<h3 class="white-text" style="outline-color: black; outline: 2px;">BEST VOCATIONAL HIGHSCHOOL</h3>
				<h5 class="light grey-text text-lighten-3"></h5>
			</div>
		</li>
		<li>
			<img src="img/slider/smk-wikrama-bogor.jpg">
			<div class="caption right-align">
				<h3></h3>
				<h5></h5>
			</div>
		</li>
		<li>
			<img src="img/slider/wikrama.jpg">
			<div class="caption center-align">
				<h3></h3>
				<h5></h5>
			</div>
		</li>
	</ul>
</div>
<!-- About us -->
<section id="about" class="about">
<div class="container">
	<div class="row">
		<h3 class="center light grey-text text-darken-3">About Us</h3>
		<div class="col m6" align="center" style="margin-left: 300px">
			<p>
				Menjadi sekolah kejuruan teladan nasional yang berbudaya lingkungan, berkarakter kebangsaan, berbasis teknologi informasi dan mampu memenuhi kebutuhan dunia kerja,
				Mendidik anak bangsa dengan hati dan teknologi sehingga memenuhi kebutuhan mutu dunia kerja,
				Mewujudkan sekolah sebagai benteng moralitas bangsa,
				Membangun kebersamaan sosial, jiwa kewirusahaan, dan gerakan cinta tanah air dan lingkungan.
			</p>
		</div>
	</div>
</div>
</section>
<!-- services -->

	<!-- Portfolio -->
	<section id="portfolio" class="portfolio">
	<div class="container">
		<h3 class="light center grey-text text-darken-3">Portfolio</h3>
		<div class="row">
			<div class="col m3 s12">
				<img src="img/portfolio/awe.jpg" class="responsive-img">
			</div>
			<div class="row">
				<div class="col m3 s12">
					<img src="img/portfolio/smk-wikrama-bogor.jpg" class="responsive-img">
				</div>
				<div class="row">
					<div class="col m3 s12">
						<img src="img/portfolio/wikrama.jpg" class="responsive-img">
					</div>
					<div class="row">
					<div class="col m3 s12">
						<img src="img/portfolio/zee.jpg" class="responsive-img">
					</div>
					</div>
					</section>
					<!-- contact us -->
					<section id="contact" class="contact grey lighten-3">
					<div class="container">
						
						<div class="row">
							<div class="col m5 s12">
								<div class="card-panel blue darken-2 center white-text">
									<i class=" material-icons">email</i>
									<h5>Contact</h5>
									<p>
										0838-1930-2150
									</p>
								</div>
								<ul class="collection with-header">
									<li class="collection-header">
										<h4>LOCATION</h4>
									</li>
									<li class="collection-item">SMK WIKRAMA BOGOR</li>
									<li class="collection-item">
										Jl. Raya Puncak No.53, Bendungan, Ciawi, Bogor, Jawa Barat, 16720
									</li>
								</ul>
							</div>
							<div class="col m7 s12">
								<form method="post">
									<div>
										<h1 class="collection with-header">Ada saran ?</h1>
										<a href="index.php">Klik disini...</a>
									</form>
								</div>
								
							</div>
						</div>
						</section>
						<!-- footer -->
						<footer class="blue darken-2 white-text center">
						<p class="flow-text">SMK WIKRAMA BOGOR 2019</p>
						</footer>
						<!--JavaScript at end of body for optimized loading-->
						<script type="text/javascript" src="js/materialize.min.js"></script>
						<script type="text/javascript" src="js/myjs.js"></script>
						<script>
      	const slider = document.querySelectorAll('.slider');
      	M.Slider.init(slider, {
      		indicators: false,
      		height : 500,
      		transition:  600,
      		interval: 6000 
      	});
      	const sidenav = document.querySelectorAll('.sidenav');
      	M.Sidenav.init(sidenav);
      	const parallax = document.querySelectorAll('.parallax');
      	M.Parallax.init(parallax);
      	const Materialbox = document.querySelectorAll('.Materialboxed');
      	M.Materialbox.init(Materialbox);
      </script>
						<script type="text/javascript">
      </script>
						</body>
						</html>