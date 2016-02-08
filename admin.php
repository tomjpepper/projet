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


<?php
if (isset($_POST['Nom']) && isset($_POST['description']) && isset($_FILES['image'])) {
	$nom = htmlspecialchars($_POST['Nom']);
	$desc = htmlspecialchars($_POST['description']);

	if ($_FILES['image']['size'] <= 1000000) {
	$infosfichier = pathinfo($_FILES['image']['name']);
	$extension_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');


	$image = 'image/'.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);


	}
	
	$count = $bdd->query('SELECT * FROM personnages WHERE Nom="'.$nom.'" ');
	$c = $count->fetch();

	
	
	if ($c[0] == 0) {
		if ( $desc && $nom &&  $image) {
			if ($bdd->query('INSERT INTO personnages VALUES("", "'.$nom.'", "'.$desc.'","'.$image.'" ) ')) {
			$mess = 'personnage ajouté !';
			}
			else{
				$mess='Error 1!';
			}
		}
		else{
		 	$mess = 'Error 2!';
		}
		}				
	}
?>
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
				
			<?php 
	
		if(isset($_SESSION['email']) && isset($_SESSION['mdp'])){
		
			echo '<ul>';
			echo '<li class="deco"> bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].'<li>';
			echo '<li class="deco"><a href="deconnexion.php">deconnexion</a></li>';
			echo '</ul>';
		}
		?>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">Acceuil</a></li>
								<li>
									<a href="">Les saisons</a>
									<ul>
										<li><a href="Saison1.php">Saisons 1</a></li>
										<li><a href="Saison2.php">Saisons 2</a></li>
										<li><a href="Saison3.php">Saisons 3</a></li>
										<li><a href="Saison4.php">Saisons 4</a></li>
									</ul>
								</li>
								<li><a href="lieux.php">Les Lieux</a></li>
								<li><a href="production.php">Production</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</nav>
					
				</header>
			</div>
			
			<!--main-->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">		

							<h1>Administration du site</h1>
							<?php if (isset($mess)) echo '<p>'.$mess.'</p>'; ?>

							<form action="admin.php" method="post" enctype="multipart/form-data">
								<fieldset><legend>Ajout d'un personnage</legend>
									<p><label for="nom">Nom:</label> <input id="Nom" type="text" name="Nom"></p>
									<p><label for="description">Description:</label> <input id="description" type="text" name="description"></p>
									<p><label for="image">Image:</label> <input id="image" type="file" name="image"></p>
									<p><input type="submit" value="Enregistrer"></p>
								</fieldset>
							</form>
					
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
										<li><a href="#">http://fr.wikipedia.org/wiki/The_Big_Bang_Theory</a></li>7
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

	</body>
</html>