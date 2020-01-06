<?php include_once 'header.php' ?>

<body class="hero flex-center">
	<?php include_once 'navbar.php' ?>
	<div>
		<div class="headerDiv">
			<img src="https://images.pexels.com/photos/1111319/pexels-photo-1111319.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
			<div class="myName">
				<p class="noelAn">Noël AN</p>
				<p class="DevWeb">Développeur web</p>
			</div>
		</div>
		<div class="aboutMe container-fluid" id="apropos">
			<div class="row justify-content-around">
				<h1 class="aPropos text-center myWhite">About me</h1>
				<h1 class="aPropos text-center myWhite">Compétences</h1>
			</div>
			<div class="row">
				<div class="aboutMeDiv col-lg-4 col-sm-12 offset-lg-1">
					<p class="text-justify workSans presentation">
						Bonjour je me présente Noël AN. Après avoir travaillé principalement dans la restauration et la logistique, j'ai décidé de me reconvertir dans un domaine qui m'a toujours passionné, le devéloppement Web.
					</p>
					<p class="text-justify workSans presentation">
						J'ai effectué une formation de développeur web à la Wild Code School qui m'a permis de découvrir ce métier et me spécialiser en PHP Symfony.
					</p>
					<p class="text-justify workSans presentation">
						Je continu de m'auto-former je me perfectionne sur React et Api Platform actuellement
					</p>
					<p class="text-justify workSans presentation">
						Étant curieux et déterminé je fais en sorte d'approfondir mes connaissances quotidiennement et je quitte difficilement un projet sur un message d'erreur :) .
					</p>
				</div>
				<div class="col-lg-5 offset-lg-1 col-sm-12">
					<h3 class="progress-title">Symfony</h3>
					<div class="progress">
						<div class="progress-bar" style="width:75%; background:#0275d8">
							<span class="progress-icon fa fa-rocket"></span>
						</div>
					</div>
					<h3 class="progress-title">PHP</h3>
					<div class="progress">
						<div class="progress-bar" style="width:80%; background:#5bc0de;">
							<span class="progress-icon fa fa-rocket" style="border-color:#6495ED;"></span>
						</div>
					</div>
					<h3 class="progress-title">React</h3>
					<div class="progress green">
						<div class="progress-bar" style="width:60%; background:#5cb85c ;">
							<span class="progress-icon fa fa-rocket "></span>
						</div>
					</div>
					<h3 class="progress-title">HTML5/CSS3</h3>
					<div class="progress grey">
						<div class="progress-bar" style="width:85%; background:#f7f7f7;">
							<span class="progress-icon fa fa-rocket" style="border-color:grey;"></span>
						</div>
					</div>
					<h3 class="progress-title">Javascript Vanilla</h3>
					<div class="progress orange">
						<div class="progress-bar" style="width:70%; background:#f0ad4e;">
							<span class="progress-icon fa fa-rocket"></span>
						</div>
					</div>
					<h3 class="progress-title">Api Platform</h3>
					<div class="progress">
						<div class="progress-bar" style="width:60%; background:#006363;">
							<span class="progress-icon fa fa-rocket" style="border-color: #006363;color:#006363;"></span>
						</div>
					</div>
					<h3 class="progress-title">Git</h3>
					<div class="progress">
						<div class="progress-bar" style="width:75%; background:#DB6363;">
							<span class="progress-icon fa fa-rocket" style="border-color: #DB6363;color:#DB6363;"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="myProject" id="project">
			<h1 class="workSans myWhite text-center font-weight-bold">Expériences et projets</h1><br>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12">
						<h3 class="aPropos text-center">Tutoriels book !</h3>
						<p>Site 'bac à sable' regroupant des tutoriels vidéos !</p>
						<p>Mise en place d'une API (Api Platform) et un rendu en React (Javascript)</p>
						<div class="text-center">
							<p class="btn btn-primary">Smyfony</p>
							<p class="btn btn-secondary">Api Platform</p>
							<p class="btn btn-warning">React</p>
							<a href="https://tutoriels-book.herokuapp.com/#/">
								<p class="text-center">Celui-ci est en ligne !</p>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<a href="https://tutoriels-book.herokuapp.com/#/">
							<img class="myImg" src="assets/picture/tutoriels.png">
						</a>
					</div>
				</div>
				<hr>
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12">
						<h3 class="aPropos text-center">Funny Shop</h3>
						<p>Site de E commerce 'bac à sable' créé pour parfaire mes compétences et principalement avec le framework Symfony.</p>
						<p>Mise en place de mail automatique lors de l'inscription, interface d'administration (CRUD), panier d'achat actuellement en constante évolution !</p>
						<a href="http://noel-an-fr.mon.world/clothA/public/index.php">
							<p class="text-center">Celui-ci est en ligne !</p>
						</a>
						<div class="text-center">
							<p class="btn btn-primary">Symfony</p>
							<p class="btn btn-success">Twig</p>
							<p class="btn btn-info">Doctrine</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<a href="http://noel-an-fr.mon.world/funnyshop/public/index.php">
							<img class="myImg" src="assets/picture/funnyshop.png">
						</a>
					</div>
				</div>
				<hr>
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12">
						<h3 class="aPropos text-center">Event Team</h3>
						<p>Site réalisé en cours de formation permettant de gerer le planning des utilisateur 'Google Agenda like'.</p>
						<p>Mise en place du Modèle Vue Controlleur, travail en équipe (4 personnes)en méthode agile.</p>
						<div class="text-center">
							<p class="btn btn-primary">PHP</p>
							<p class="btn btn-success">Scrum</p>
							<p class="btn btn-secondary">Git</p>
							<p class="btn btn-warning">Js Vanilla</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<img class="myImg" src="https://images.pexels.com/photos/3299/postit-scrabble-to-do.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
					</div>
				</div>
				<hr>
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12">
						<h3 class="aPropos text-center">Site de solfège débutant</h3>
						<p>Site réalisé en parallèle de la formation permettant d'apprendre le solfège à travers des mini-jeux.</p>
						<p>Ce projet a été réalisé afin découvrir de et approfondir le Javascript Vanilla</p>
						<div class="text-center">
							<p class="btn btn-warning">Javascript Vanilla</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<img class="myImg" src="https://images.pexels.com/photos/1210530/pexels-photo-1210530.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
					</div>
				</div>
			</div><br>
		</div>
		<div class="contactMe" id="contactme">
			<h3 class="courgette text-center" style="color:black;">Me contacter</h3>
			<div class="row justify-content-center">
				<div class="text-center col-lg-2 col-sm-12">
					<p class="footerP"><i class="far fa-envelope"></i> Gmail : noel.an.lyon@gmail.com</p>
				</div>
				<div class="text-center col-lg-2 col-sm-12">
					<p class="footerP"><i class="fas fa-phone-square"></i> Tel : 06 83 07 54 48</p>
				</div>
				<div class="text-center col-lg-2 col-sm-12">
					<a href="https://www.linkedin.com/in/noel-an-704482186/">
						<p class="footerP"><i class="fas fa-phone-square"></i> Linkedin </p>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
	$(document).ready(function() {
		$('.progress-value > span').each(function() {
			$(this).prop('Counter', 0).animate({
				Counter: $(this).text()
			}, {
				duration: 1500,
				easing: 'swing',
				step: function(now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	});
</script>
</body>