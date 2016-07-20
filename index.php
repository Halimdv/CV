<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Halim De Ville - Développeur Web</title>
	<link rel="stylesheet" href="vendor/components/bootstrap/css/bootstrap.min.css">
	<!-- Police du corps -->
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<!-- Police des titres (à ne JAMAIS utiliser)-->
	<link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Mon CV -->
	<div class="container-fluid greyBg">
		<nav class="navbar navbar-default">
			<div class="container-fluid"> <!-- start container-fluid-->
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Halim De Ville</a>
				</div>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home">Accueil</a></li>
						<li><a href="#skills">Compétences</a></li>
					</ul>
				</div>
			</div> <!-- end container-fluid-->

		</nav>
		<div class="container whiteBg">
			<div class="row">
				<div class='col-md-4'>
					<img class="avatar img-circle" src="img/pses.jpg" alt="Halim De Ville">
				</div>
				<div class='col-md-8'>
					<h1>Halim De Ville - <small>Développeur intégrateur</small></h1>
					<p>Jeune en recherche d'un poste en développement Web</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<h2>A propos de moi</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate nostrum nulla, voluptatem quam reprehenderit! Doloremque quia, quaerat accusantium consequatur dignissimos id, fugiat error est natus eius sit ex animi accusamus.</p>
				</div>
				<div class="col-md-3">
					<h2>Infos</h2>
					<address>
						<div class="row">
							<div class="col-xs-6">
								<strong>Nom: </strong><br>
								<strong>Date de naissance: </strong><br>
								<strong>Téléphone: </strong><br>
								<strong>Mail: </strong><br>

							</div>
							<div class="col-xs-6">
								Halim De Ville<br><br>
								02/09/1993<br>
								<a href="tel:+33758000000">07 58 00 00 00</a><br>
								<a href="mailto:test@test.test">test@test.test</a>
							</div>
						</div>
					</address>
				</div>
			</div>
			<h2>Compétences</h2>
			<div class="row">
				<div class="col-md-3 text-center">
					<h3>HTML/CSS</h3>
					<input type="text" class="skill" data-value="79">
				</div>
				<div class="col-md-3 text-center">
					<h3>PHP</h3>
					<input type="text" class="skill" data-value="71">
				</div>
				<div class="col-md-3 text-center">
					<h3>JS</h3>
					<input type="text" class="skill" data-value="68">
				</div>
				<div class="col-md-3 text-center">
					<h3>Wordpress</h3>
					<input type="text" class="skill" data-value="49">
				</div>

			</div>
			
		</div>
	</div>
	<!-- Fin de mon CV -->
	<script src="vendor/components/jquery/jquery.min.js"></script>
	<script src="vendor/components/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/aterrien/jquery-knob/dist/jquery.knob.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>