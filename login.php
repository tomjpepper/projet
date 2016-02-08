
<?php
session_start();

	try{
		$connexion = new PDO('mysql:host=127.0.0.1;dbname=projet1', 'root','');
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
		<title>Login</title>
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

	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
				
	
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li id='fisheye' class="current"><a href="index.php">Acceuil</a></li>
								<li>
									<a href="">Les saisons</a>
									<ul>
										<li><a href="Saison1.php">Saison 1</a></li>
										<li><a href="Saison2.php">Saison 2</a></li>
										<li><a href="Saison3.php">Saison 3</a></li>
										<li><a href="Saison4.php">Saison 4</a></li>
									</ul>
								</li>
								<li ><a href="lieux.php">Les Lieux</a></li>
								<li ><a href="production.php">Production</a></li>
								<li ><a href="login.php">Login</a></li>
							</ul>
						</nav>
					
				</header>
			</div>
		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div id="content">

						<section>

						<?php
							if (isset($_POST['login']) && ($_POST['login']) && isset($_POST['pass']) && $_POST['pass']){
								$login=htmlspecialchars($_POST['login']);
								$pass=htmlspecialchars($_POST['pass']);
							
							
							$requete = $connexion->query('SELECT * FROM client where email="'.$login.'" and mot_de_passe="'.md5($pass).'" ');
							if ($req=$requete->fetch()){
								session_start();
								$_SESSION['email']=$req['email'];
								$_SESSION['mdp']=$req['mot_de_passe'];
								$_SESSION['civilite']=$req['civilite'];
								$_SESSION['nom']=$req['nom'];
								$_SESSION['prenom']=$req['prenom'];
								
								header('location:admin.php');exit;
							}
								else 
									$mess='vos identifiants sont faux';
								
								
							
							}
							?> 
								<header>	<h2>Identification</h2></header>
								<?php if(isset($mess)) echo '<p>'.$mess.'</p>'; ?>
								
								<?php if (isset($_SESSION['nom'])) ;?>
									<form id="login" action="login.php" method='post'>
										<p>
											<label>email</label>
											<input type="text" name="login" maxlength="250" />
										</p>
										<p>
											<td>Mot de passe</td>
											<input type="password" name="pass" maxlength="10" />
										</p>
										<p>
											<input type="submit" value="valider" />
										</p>
									</form>
									
									</div>
								</div>
							</div>

					
						</section>
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

	</body>
</html>