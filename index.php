<?php
include_once "./includes/header-index.php"
?>

<!-- Présentation Section -->
<section id="home" class="container mx-auto p-6 ">
	<h2 id="invisible-h2" class="text-3xl font-bold mb-4 hidden">Présentation</h2>
	<div class="bg-white shadow-md rounded-lg py-4">
		<h2 class="text-3xl font-bold mb-4 text-neutral-950 text-center p-4">Bienvenue sur mon portfolio !</h2>
		<p class="text-gray-700 text-center text-lg p-6">Je suis <strong>Thibault FEAT</strong>, étudiant en seconde année de BTS
			SIO <em>(Services Informatiques aux Organisations)</em>, avec une spécialisation en
			<strong>SLAM</strong> <em>(Solutions Logicielles et Applications Métier)</em> à l'Esicad de Montpellier.
			<!-- <br> -->
			Depuis le début de mes études en <strong>BTS SIO</strong>, j'ai développé une passion pour
			l'informatique. C'est à travers cette passion que j'ai exploré le développement web et que j'ai décidé
			d'en faire ma carrière future. 
			<br><br>
			Actuellement, je développe des pages et des applications web en utilisant des technologies telles que <strong>php</strong>, <strong>javascript</strong>, <strong>html</strong>, <strong>css</strong>, et <strong>mysql</strong>. 
			<br>
			J'ai également acquis des compétences en gestion de projet et en travail d'équipe grâce à mes expériences académiques et professionnelles.
			<br>
			Et je souhaite poursuivre mes études afin de devenir à terme, <strong>ingénieur data analyste</strong> avec <strong>Epitech</strong>.
			<br>
			Je travaille actuellement chez <strong>ECS</strong>, une entreprise avec laquelle je compte continuer à collaborer dans le futur.
			<br><br>
			Pour obtenir plus d'informations, je vous invite à télécharger mon CV ci-dessous.
			<br>
			⬇️⬇️⬇️
		</p>
	</div>
	<div class="flex justify-center">
		<a href="./assets/docs/CV_FEAT_2024.pdf" target="_blank">
			<button
				class="flex justify-center border-2 rounded-full p-2 mt-9 bg-red-500 transition ease-in-out delay-110  hover:-translate-y-1 hover:scale-110 hover:bg-slate-600"><strong>Téléchargez
					mon CV</strong></button>
		</a>
	</div>
</section>


<?php 
include_once "./includes/competences.php";
include_once "./includes/formation.php";
include_once "./includes/entreprise.php";
include_once "./includes/footer-index.php";
?>