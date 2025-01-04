<!DOCTYPE html>
<html lang="en">
<head>
	<title>Syarah Izzati</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="img/ti.png" width="180" height="100">
			</a>
			<div class="user-panel">
				<a href="login.php">Login</a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="?p=home">Home</a></li>
					<li><a href="?p=mhs">Mahasiswa</a></li>
					<li><a href="?p=prodi">Prodi</a></li>
					<li><a href="?p=mk">Mata Kuliah</a></li>
					<li><a href="?p=dosen">Dosen</a></li>
					<li><a href="?p=berita">Berita</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/comp.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>Jurusan <span>Teknologi</span> Informasi </h2>
						<p>"The Stepping Stone to International Journey" <br>Jurusan Teknologi Informasi terdiri dari 7 program studi mulai dari D2, D3 sampai D4 </p>
						<a href="#" class="site-btn">Selanjutnya</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/hardware.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>Politeknik <span>Negeri</span> Padang</h2>
						<p>Membangun Masa Depan Teknologi Bersama</p>
						<a href="#" class="site-btn">Read more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	<?php
                $page = isset($_GET['p']) ? $_GET['p'] : 'home';
                if ($page == 'home')
                    include 'home.php';
                if ($page == 'mhs')
                    include 'mahasiswa.php';
                if ($page == 'prodi')
                    include 'prodi.php';
                if ($page == 'dosen')
                    include 'dosen.php';
				if ($page == 'berita')
                    include 'berita.php';
				if ($page == 'mk')
                    include 'mata_kuliah.php';
                
              

            ?>

	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">Politik</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">Olahraga</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">Hiburan</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/politik.jpg">
						<span class="cata new">Politik</span>
						<div class="fi-content text-white">
							<h5><a href="?p=berita">PEMIRA PNP 2024 Melawan Kotak Kosong</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">25 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/uks.jpg">
						<span class="cata strategy">Hiburan</span>
						<div class="fi-content text-white">
							<h5><a href="?p=berita">Persembahan Tari Piring UKS PNP Menggemparkan</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="" class="fi-comment">5 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/ticup.jpg">
						<span class="cata new">Olahraga</span>
						<div class="fi-content text-white">
							<h5><a href="?p=berita">TI CUP 2024 Sangat Semarak</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">40 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/real.jpg">
						<span class="cata new">Olahraga</span>
						<div class="fi-content text-white">
							<h5><a href="?p=berita">Real Madrid Comeback</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">98 Comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->

	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/cewe.png" width="400" height="400">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/ti.png" width="300" height="180">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
				s		<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/real.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/uks.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/politik.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Arda Guler</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 23, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Erling Haaland</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">August 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Gareth Bale</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">May 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Cole Palmer</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Web ini dibuat dengan penuh kesabaran <i class="fa fa-heart-o" aria-hidden="true"></i> oleh Syarah Izzati
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>


    </div>
  </div>
	<!-- Footer section end -->

 
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>

    </body>
</html>