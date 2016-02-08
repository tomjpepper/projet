<?php
session_start();
try {
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet1', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
	//gestion des erreurs
	catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
	}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>The Big Bang Theory</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>

			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-mobile.css" />
			<link rel="stylesheet" href="css/style-1000px.css" />

		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
	
			<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
				
	
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">Acceuil</a></li>
								<li>
									<a href="">Les saisons</a>
									<ul>
										<li><a href="Saison1.php">Saison 1</a></li>
										<li><a href="Saison2.php">Saison 2</a></li>
										<li><a href="Saison3.php">Saison 3</a></li>
										<li><a href="Saison4.php">Saison 4</a></li>
									</ul>
								</li>
								<li><a href="lieux.php">Les Lieux</a></li>
								<li><a href="production.php">Production</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</nav>
					
				</header>
			</div>
			
			
			
		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row double">
						<div class="8u">
							<div id="content">

								<!-- Content -->
								<section>
								<?php
								if (!empty($_GET['personnage'])) {
									$numArticle = (int)$_GET['personnage'];
									$requete = $bdd->query('SELECT * FROM personnages WHERE id_personnage="'.$numArticle.'" ');
									if ($requete) {
										$value = $requete->fetch();
										?>
									<article id="detail-personnage">
										<header><h2><?php echo $value['Nom']; ?></h2></header>
										<img src="<?php echo $value['img_personnage']; ?>" alt="<?php echo $value['Nom']; ?>">
										<p><?php echo $value['description']; ?></p>
									</article>
									<?php
										}
										}
										?>
								<!-- carrousel-->		
								 <script>
									$(document).ready(function() {
								$('#demo').scrollbox();
									});
								  </script>
								<div id="demo" class="scroll-text">	
									<ul>
									<li><a href="#" target="_blank"><img src="image/Untitled1.png"></a></li>
									<li><a href="#" target="_blank"><img src="image/Untitled2.png"></a></li>

								  </ul>
								</div>
							</div>
						</div>
					</div>		
				</div>
			</div>
			


			<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="3u">
						
							<!-- Links -->
								<section class="widget links">
									<h3>Contenu</h3>
									<ul class="style2">
										<li>Template:</li>
										<li><a href="#">http://html5up.net/verti</a></li>
										<li>Texte:</li>
										<li><a href="#">http://fr.wikipedia.org/wiki/The_Big_Bang_Theory</a></li>
										<li><a href="#">http://series-tv.premiere.fr/The-Big-Bang-Theory-1589905/%28view%29/episodes</a></li>
									</ul>
								</section>
						
						</div>

						<div class="3u">
						
							<!-- Contact -->
								<section class="widget contact last">
									<h3>Contactez Nous</h3>
									<ul>
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
									<p>123,Rue de Coureilles<br/>
									La Rochelle, 17000<br/>
									06-XX-XX-XX-XX</p>
								</section>
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Untitled. All rights reserved</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery.scrollbox.js"></script>
	</body>
</html>