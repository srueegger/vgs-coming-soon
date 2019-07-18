<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html>
	<!--<![endif]-->
	<head>
		<!-- Basic Info -->
		<meta charset="utf-8">
		<title>VGS Sicherheit GmbH</title>
		<meta name="author" content="Samuel Rüegger">
		<!-- Mobile  -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:500,500italic,100,100italic,300,300italic' rel='stylesheet' type='text/css'>
		<!-- CSS -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="css/style.css?ver=4" />
		<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<!-- JS -->      
		<script type="text/javascript" src="js/modernizr.custom.js"></script>
	</head>

	<body>
		<div id="modal-window">
			<div class="container">
				
				<!-- Header -->
				<header id="header"> 
					<div id="logo"> <a href="#"> Soon</a></div>
				</header>
				
				<!-- Modal Open -->
				<a  id="modal-open"><i class="fa fa-plus"></i></a>

				<!-- Main Title -->
				<h1>Wir sind bald für Sie da!</h1>

				<!-- Social Links -->
				<div class="social">
					<ul>
						<li><a target="_blank" href="https://www.facebook.com/VGSsicherheitGmbH" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/company/vgs-sicherheit-gmbh/about/" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Modal Window -->
		<div id="modal">
			<div class="container">
				<div class="one">
					<h2>Die VGS Sicherheit bereitet ihren Webauftritt vor. Die digitale Visitenkarte befindet sich derzeit im Aufbau.</h2>
					<a id="modal-close" href="#"><i class="fa fa-minus"></i></a>
				</div>

				<div class="one-half">
					<h3>Über uns</h3>
					<p>
						VGS Sicherheit GmbH ist ein regionaler Sicherheitsdienst mit Hauptsitz in Tübach im Kanton St.Gallen. Wir bieten unseren Kunden rundum Lösungen im Bereich der Sicherheit an und stehen rund um die Uhr an 365 Tagen im Jahr zur Verfügung.
					</p>

					<h3>5 Gründe für VGS Sicherheit als Partner</h3>
					<ul>
						<?php
						$reasons = array(
							'Professionelle Interventionsteams',
							'24h/365 Tage betriebene Alarmempfangszentrale',
							'Übersichtliche und individuelle Dienstleistungspakete',
							'Motivierte und engagierte Mitarbeitende für Ihre Zufriedenheit',
							'Erfahren in der Zusammenarbeit mit Blaulicht- und Partnerorganisationen'
						);
						foreach($reasons as $reason):
							echo '<li><i class="fa fa-check"></i>'.$reason.'</li>';
						endforeach;
						?>
					</ul>
				</div>

				<div class="one-half">
					<h3>Wir sind für Sie da</h3>
					<p>
						Sollten Sie bereits Interesse an unseren Dienstleistungen haben, so stehen wir Ihnen jederzeit telefonisch und per E-Mail zur Verfügung. 
						Zögern Sie nicht uns zu kontaktieren.
					</p>
					<h3>Adresse</h3>
					<p>VGS Sicherheit GmbH<br />
						Wiesenstrasse 11<br />
						CH-9327 Tübach, SG
					</p>
					<ul>
						<li><i class="fa fa-phone"></i>+41 800 666 667</li>
						<li><i class="fa fa-envelope"></i><a href="mailto:info@vgs-schweiz.ch">info@vgs-schweiz.ch</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Preload -->
		<div id="preload">
			<div id="preload-content">
				<img src="img/loaders.gif" alt="preload icon"/>
				<div class="preload-text">Seite wird geladen...</div>
			</div>
		</div>
		
		 <!-- Background overlay -->
		<div class="body-bg"></div>

		<!-- Included JS Files -->
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
	</body>
</html>