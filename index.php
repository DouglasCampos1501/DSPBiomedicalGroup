<?php
if (isset($_POST['BTEnvia'])) {

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];

	$email_remetente = "contato@dspbiomedicalgroup.com";
	
	$email_destinatario = "marketing01@dspbiomedical.com.br"; 
	$email_reply = "$email"; 
	$email_assunto = "Contato solicitado no site dspbiomedicalgroup.com"; 

	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>Email successfully sent!</b>"; 
					} 
			else{ 
					echo "</b>Failed to send email!</b>"; } 
					} 
?>
<!doctype html>
<html lang="en">

<head>
	<title>DSP Biomedical Group</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="assets/fonts/css/all.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="assets/vendor/magnific-popup.css">
	<!-- Animate CSS -->
	<!-- AOS CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/vendor/animate.css">
	<!-- Owl Carouusel CSS -->
	<link rel="stylesheet" href="assets/vendor/owl.carousel.css">
	<link rel="stylesheet" href="assets/vendor/owl.theme.default.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<link rel="stylesheet" href="assets/css/videopopup.css">

</head>

<body>

	<!--Loader -->
	<div class="akar-loader">
		<div id="preloader">
			<div id="loader"></div>
		</div>
	</div>
	<!-- Loader end -->

	<!-- MENU INICIO -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo -->
			<a class="logo" href="#">
				<img src="assets/img/logo-DSP-Biomedical-Group-White.png" alt="logo da DSP Biomedical Group">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"><i class="fas fa-bars"></i></span>
			</button>

			<!-- navbar links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="1">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="2">Brands</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="3">Download</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="4">Websites</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="5">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- MENU FIM -->
	<!-- BANNER INICIO -->
	<header class="valign header banner">
		<div class="container">
			<div class="text-left mt-30">
				<div class="row">
					<div class="col-md-8">
						<img src="assets/img/logo-DSP-Biomedical-Group-White.png" alt="logo da DSP Biomedical Group">
						<p>&nbsp;</p>
						<h1>play for new <span>possibilities</span></h1>
						<h5 class="mt-20">The DSP Biomedical industry produces the most complete product line for dental
							procedures, oral and maxillofacial surgery and implantodontics in the national market.</h5>
					</div>
					<!--
					<div class="col-md-2 offset-md-1">
						<div class="video-play">
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=D2fwQPcQgCM"><i class="fas fa-play"></i></a>
						</div>
					</div>
					-->
					<div class="col-md-2 offset-md-1">
						<div class="video-play">
							<a href="#" onclick="lightbox_open();"><i class="fas fa-play"></i></a>
						</div>
					</div>
				</div>
				<ul class="head-navigation text-left mt-30">
					<li class="main-nav text-left">
						<a href="#0" data-scroll-nav="1">
							<div class="top-nav">
								<span>
									<i class="arrow"></i>
									Meet the DSP
									<i class="arrow"></i>
								</span>
							</div>
						</a>
					</li>
				</ul>

				<div class="video-thumb">

				</div>
				<!-- decor 
				<div class="top-dash-1"></div>
				<div class="top-dash-2"></div>
				<div class="top-dash-3"></div>
				<div class="top-dash-4"></div>
				<div class="top-dash-5"></div>
				-->
			</div>

			<div id="light">
				<a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
				<video id="VisaChipCardVideo" class="modeOn" controls>
					<source src="DSP Biomedical - Infinitas Possibilidades.mp4" type="video/mp4">
					<!--Browser does not support <video> tag -->
				</video>
			</div>
			<div id="fade" onClick="lightbox_close();"></div>


			</div>
		</div>
		<a href="#" data-scroll-nav="1">
			<div id="mouse-scroll">
				<div class="mouse">
					<div class="mouse-in"></div>
				</div>
				<div>
					<span class="down-arrow-1"></span>
					<span class="down-arrow-2"></span>
					<span class="down-arrow-3"></span>
				</div>
			</div>
		</a>
	</header>
	<!-- BANNER FIM -->
	<!-- MARGIN SECURITY -->
	<div class="mt-up"></div>
	<!-- ABOUT INICIO -->
	<section class="about" data-scroll-index="1">
		<div class="container-fluid bg-second">
			<div class="row">
				<div class="col-md-10 offset-md-1 text-center mt-90">
					<h3 data-aos="fade-up" data-aos-once="true">Meet <span>DSP</span> Biomedical Group</h3>

				</div>
				<div class="line"></div>
			</div>


			<div class="row mt-30 v-center">
				<div class="col-md-12 col-lg-3 offset-md-2 text-center px-0">
					<div class="img-about">
						<img src="assets/img/DSP-Biomedical-Fabrica.png" alt="about" class="destiny">
					</div>
				</div>
				<div class="col-md-12 col-lg-6 about-detail pb-30" style="padding-right: 10%;">
					<p class="white mt-20"><span>DSP Biomedical</span> has combined the practical experience of the most qualified 
						professionals in the health area with the precision and technique of engineering professionals to create the best and most 
						innovative products in the areas of dentistry, maxillofacial surgery and implant dentistry.</p>
					<p class="white mt-20">The result can be seen in the smiles of patients and the quality of life they achieve. 
						For DSP Biomedical, customer satisfaction is paramount.</p>
					<p class="white mt-20">Therefore, we are constantly committed to seeking new technologies to manufacture 
						high quality dental products at a competitive price, establishing an excellent cost-benefit ratio in the market.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>


			<div class="row v-center">
				<div class="col-md-12 col-lg-5 offset-md-2 about-detail pb-30">
					<p class="white mt-20">The DSP Biomedical industry produces
						the most complete product line for dental
						procedures, oral and maxillofacial surgery
						and implantodontics in the national market.</p>
					<p class="white mt-20">They are more than 1,500 items manufactured
						by thousands of precision equipment, projectors
						of measurements and optical microscopes of
						measurement to guarantee the maximum
						quality and the best finish.</p>
					<p class="white mt-20">The combination of biological reliability and
						intelligent systems results in precision products
						in the assembly of implants and prosthetic
						components. This work practice is registered
						with the Ministry of Health, through the
						National Agency of Sanitary Surveillance
						(ANVISA), which certifies the quality and
						competence of DSP Biomedical.</p>
					<p class="white mt-20">COMMITMENT TO MAKE THE BEST PRODUCT ACCURATELY.</p>
				</div>
				<div class="col-md-12 col-lg-3  text-center px-0">
					<div class="img-about">
						<img src="assets/img/DSP-Biomedical-Industria.png" alt="about" class="destiny">
					</div>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
	</section>
	<!-- ABOUT FIM -->
	<!-- BRANDS INICIO -->
	<section class="brands" data-scroll-index="2">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 text-center">
					<h3 data-aos="fade-up" data-aos-once="true">Know all <span>DSP</span> brands</h3>

				</div>
			</div>
			<div class="line"></div>
			<div class="row text-center">
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-biomedical.png" alt="about" style="width: 60px;">
						</div>
						<h5>DSP Biomedical</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-white.png" alt="about" style="width: 80px;">
						</div>
						<h5>DSP White</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-surgical-motors.png" alt="about" style="width: 60px;">
						</div>
						<h5>DSP Surgical Motors</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/osteofit.png" alt="about" style="width: 70px;">
						</div>
						<h5>Osteofit</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-imaging-system.png" alt="about" style="width: 50px;">
						</div>
						<h5>DSP Imaging System</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-connect.png" alt="about" style="width: 70px;">
						</div>
						<h5>DSP Connect</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-science.png" alt="about" style="width: 60px;">
						</div>
						<h5>DSP Science Training Center</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-master-team.png" alt="about" style="width: 60px;">
						</div>
						<h5>DSP Master Team</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4  mt-30">
					<div class="ww-content" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
						<div class="icon hov">
							<img src="assets/img/dsp-oral-clinic.png" alt="about" style="width: 60px;">
						</div>
						<h5>DSP Oral Clinic</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BRANDS FIM -->

	<!-- DOWNLOADS INICIO  -->
	<section class="team bg-second" data-scroll-index="3">
		<div class="container">
			<h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true"><span>Downloads</span></h3>
			<div class="line"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<div class="team-item">
							<div class="team-detail">
								<div class="team-content text-center">
									<h5>Industry</h5>
									<span class="dash"></span><br/>
									<a href="https://dspbiomedical.com/wp-content/uploads/2021/03/dsp-biomedical-industry.pdf" target="_blank" class="main-button mt-20">
										Download
									</a>

								</div>
							</div>
							<img src="assets/img/Download-Industry.png" alt="port-1" style="padding: 5% ;">
						</div>
						<div class="team-item">
							<div class="team-detail">
								<div class="team-content text-center">
									<h5>Impants and components</h5>
									<span class="dash"></span><br/>
									<a href="https://dspbiomedical.com/wp-content/uploads/2021/03/dsp-biomedical-implants.pdf" target="_blank" class="main-button mt-20">
										Download
									</a>

								</div>
							</div>
							<img src="assets/img/Download-Implant.png" alt="port-1" style="padding: 5% ;">
						</div>
						<div class="team-item">
							<div class="team-detail">
								<div class="team-content text-center">
									<h5>Surgical Kits</h5>
									<span class="dash"></span><br/>
									<a href="https://dspbiomedical.com/wp-content/uploads/2021/03/dsp-biomedical-surgical-kits.pdf" target="_blank" class="main-button mt-20">
										Download
									</a>

								</div>
							</div>
							<img src="assets/img/Download-Kits.png" alt="port-1" style="padding: 5% ;">
						</div>
						<div class="team-item">
							<div class="team-detail">
								<div class="team-content text-center">
									<h5>DSP White</h5>
									<span class="dash"></span><br/>
									<a href="https://dspbiomedical.com/wp-content/uploads/2021/03/dsp-white-catalog.pdf" target="_blank" class="main-button mt-20">
										Download
									</a>

								</div>
							</div>
							<img src="assets/img/Download-White.png" alt="port-1" style="padding: 5% ;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- DOWNLOADS FIM  -->
	<!-- SITES INICIO -->
	<section class="portfolio bg-main" data-scroll-index="4">
		<div class="container">
			<h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">Discover the <span>DSP Biomedical</span> websites</h3>
			<div class="line"></div>

			<div class="owl-carousel owl-theme">
				<div class="portfolio-item">
					<div class="row  v-center">
						<div class="col-md-12 col-lg-7 mt-30">
							<div class="img-port">
								<img class="img-fluid" src="assets/img/works/DSP-Biomedical-Impants.jpg" alt="Image from the DSP Biomedical Implants website">
							</div>
						</div>
						<div class="col-md-12 col-lg-5">
							<h3 class="mt-20">The most complete line of <span>implant</span> dentistry products </h3>
							<p class="mt-20">DSP Biomedical® was recognized and registered by the biggest quality institutes, 
								and it´s fit to manufacture commercialize and export products on the Odontology, Bucomaxilofacial Surgery and Implantology.</p>
							
							<a href="https://dspbiomedical.com/en/" target="_blank" class="main-button mt-20">
								<span>Explore more</span>
							</a>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="row v-center">
						<div class="col-md-12 col-lg-7 mt-30">
							<div class="img-port">
								<img class="img-fluid" src="assets/img/works/DSP-Biomedical-White.jpg" alt="Image from the website of DSP White - whiteners">
							</div>
						</div>
						<div class="col-md-12 col-lg-5">
							<h3 class="mt-20">DSP White is the complete solution for <span>tooth whitening</span> systems
								in <span>UI/UX</span> and <span>Branding</span> </h3>
							<p class="mt-20">DSP White offers the complete tooth whitening solution for both home and clinical use. It also offers options in conditioners, gingival barriers, desensitizer, hemostatic gel, polishing paste, bonding agent (silane) and Gutta Percha solvent.</p>
							<a href="http://dspwhite.com.br/" target="_blank" class="main-button mt-20">
								<span>Explore more</span>
							</a>
						</div>
					</div>
				</div>

				<div class="portfolio-item">
					<div class="row v-center">
						<div class="col-md-12 col-lg-7 mt-30">
							<div class="img-port">
								<img class="img-fluid" src="assets/img/works/DSP-Biomedical-Connect.jpg" alt="Image from the DSP Connect website - Scientific Cases Blog">
							</div>
						</div>
						<div class="col-md-12 col-lg-5">
							<h3 class="mt-20">>DSP Biomedical <span>Scientific</span> Cases Blog</h3>
							<p class="mt-20">Scientific case blog with images of real clinical cases, sent by renowned implantodontists.</p>
							<a href="http://dspconnect.net/" target="_blank" class="main-button mt-20">
								<span>Explore more</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="port-nav text-right">
				<a class="customNextBtn">
					<span>
						<i class="arrow"></i>
						Next Projects
						<i class="arrow"></i>
					</span>
				</a>
			</div>
		</div>
	</section>
	<!-- SITES FIM -->
	<!-- INICIO BANNER -->
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 data-aos="fade-up" data-aos-delay="300" data-aos-once="true">Play for New</h2>
					<h1 data-aos="fade-up" data-aos-delay="100" data-aos-once="true"><span>possibilities</span></h1>
					<div class="line-white"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIM BANNER -->
	<!-- CONTACT INICIO -->
	<section class="contact bg-main" data-scroll-index="5">
		<div class="container">
			<h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true"><span>Contact</span></h3>
			<div class="line"></div>

			<div class="row">

				<div class="col-sm-12">
					<form class="form" id="contact-form" method="post">

						<div class="messages"></div>

						<div class="controls">

							<div class="row">
                            <form action="<? $PHP_SELF; ?>" id="appointment-form" role="form" method="post">
								<div class="col-lg-4 col-md-6">
									<div class="form-group" data-aos="fade-up" data-aos-delay="100"
										data-aos-once="true">
										<input id="name" type="text" name="nome" placeholder="Name"
											required="required">
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="form-group" data-aos="fade-up" data-aos-delay="200"
										data-aos-once="true">
										<input id="email" type="email" name="email" placeholder="e-mail"
											required="required">
									</div>
								</div>
								<div class="col-lg-4 col-md-12">
									<div class="form-group" data-aos="fade-up" data-aos-delay="300"
										data-aos-once="true">
										<input id="tel" type="text" name="telefone" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group" data-aos="fade-up" data-aos-delay="400"
										data-aos-once="true">
										<textarea id="message" name="messagem" placeholder="Message" rows="4"
											required="required"></textarea>
									</div>
								</div>

								<div class="col-md-12">
									<button type="submit" name="BTEnvia" value="Enviar" name="submit" class="main-button"><span>Send Message</span></button>
								</div>
                            </form>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
	<!-- CONTACT FIM -->

	<!-- INICIO FOOTER -->
	<section class="footer bg-second">
		<div class="container">

			<div class="row">
				<div class="col-md-4 border">
					<i class="fas fa-map-marker"></i>
					<h4>DSP Biomedical</h4>
					<p>FACTORY BRASIL</p>
					<p>R. Marechal Floriano Peixoto, 303
						Ouro Verde II – Campo Largo – PR</p>
					<ul class="social">
						<li><a href="https://www.facebook.com/dspbiomedical" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="https://www.instagram.com/dspbiomedical/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>

				</div>
				<div class="col-md-4 border">
					<i class="fas fa-map-marker"></i>
					<h4>DSP Biomedical</h4>
					<p>PERU UNIT</p>
					<p>Av. José Pardo, 1167 Of 201
						Urba. Santa Cruz – Miraflores -Lima</p>
					<ul class="social">
						<li><a href="https://www.facebook.com/DSPBiomedicalPeru" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="https://www.instagram.com/dspbiomedicalperu/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 border-max">
					<i class="fas fa-map-marker"></i>
					<h4>DSP Biomedical</h4>
					<p>PORTUGAL UNIT</p>
					<p>Al. dos Oceanos 142 Piso 0
						Fracção H – Edifício Pertejo
						Pq das Nações – Lisboa</p>
					<ul class="social">
						<li><a href="https://www.facebook.com/dspbiomedicalpt" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="https://www.instagram.com/dspbiomedicalportugal/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="row mt-30 text-center">
				<div class="col-md-12">
					<p>&copy; Copyright 2021 - DSP Biomedical Group </p>
				</div>

			</div>
		</div>
	</section>
	<!-- FIM FOOTER  -->




	<script src="assets/vendor/jquery-3.3.1.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/vendor/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/vendor/bootstrap.min.js"></script>
	<!-- Magnific-popup JS -->
	<script src="assets/vendor/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="assets/vendor/owl.carousel.js"></script>
	<!-- Scroll IT JS -->
	<script src="assets/vendor/scrollIt.min.js"></script>
	<!-- AOS JS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/custom.js"></script>
	<!-- Custom POPUP Video-->
	<script src="assets/js/videopopup.js"></script>
</body>

</html>