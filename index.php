<?php
include_once "./includes/header.php"
?>

	<!-- Présentation Section -->
	<section id="home" class="container mx-auto p-6 ">
		<h2 id="invisible-h2" class="text-3xl font-bold mb-4 hidden">Présentation</h2>
		<div class="bg-white shadow-md rounded-lg py-4">
			<h2 class="text-3xl font-bold mb-4 text-neutral-950 text-center p-4">Bienvenue sur mon portfolio !</h2>
			<p class="text-gray-700 text-center text-lg p-6">Je suis Thibault FEAT, étudiant en première année de BTS
				SIO <em>(Services Informatiques aux Organisations)</em>, avec une spécialisation en
				<strong>SLAM</strong> <em>(Solutions Logicielles et Applications Métier)</em> à l'Esicad de Montpellier.
				<!-- <br> -->
				Depuis le début de mes études en <strong>BTS SIO</strong>, j'ai développé une passion pour
				l'informatique. C'est à travers cette passion que j'ai exploré le développement web et que j'ai décidé
				d'en faire ma carrière future.
				<br><br>
				Pour obtenir plus d'informations, je vous invite à télécharger mon CV ci-dessous.
				<br><br>
				⬇️⬇️⬇️
			</p>
		</div>
		<div class="flex justify-center">
			<a href="./assets/docs/CV_FEAT_2024.pdf" target="_blank">

				<button
					class="flex justify-center border-2 rounded-full p-2 mt-9  bg-red-500 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-slate-600 duration-200"><strong>Téléchargez
						mon CV</strong></button>
			</a>
		</div>
	</section>

	<!--Compétences Section-->
	<section id="competences" class="container mx-auto p-6">
		<h2 class="text-3xl font-bold mb-4">Mes compétences techniques</h2>

		<ul class="grid grid-cols-2 md:grid-cols-3 gap-6">
			<a href="https://fr.wikipedia.org/wiki/HTML5">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2 ">
						<img src="./assets/img/logo/html5logo.png" alt="HTML5 Logo" class="h-8  mr-2">
						<span>HTML5</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 85%">85%</div>
					</div>
				</li>
			</a>
			<a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/csslogo.png" alt="CSS3 Logo" class="h-8  mr-2">
						<span>CSS3</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 75%">75%</div>
					</div>
				</li>
			</a>
			<a href="https://developer.mozilla.org/fr/docs/Web/JavaScript">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/jslogo.png" alt="JavaScript Logo" class="h-8 w-8 mr-2">
						<span>JavaScript</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 50%">50%</div>
					</div>
				</li>
			</a>
			<a href="https://tailwindcss.com/">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/tailwindcsslogo.png" alt="TailwindCSS Logo" class="h-8 w-8 mr-2">
						<span>TailwindCSS</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 70%">70%</div>
					</div>
				</li>
			</a>
			<a href="https://www.php.net/">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/phplogo.png" alt="PHP Logo" class="h-8 w-8 mr-2">
						<span>PHP</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 70%">70%</div>
					</div>
				</li>
			</a>
			<a href="https://www.mysql.com/fr/">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/mysqllogo.png" alt="MySQL/MariaDB Logo" class="h-8 w-8 mr-2">
						<span>MySQL/MariaDB</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 65%">65%</div>
					</div>
				</li>
			</a>
			<a href="https://www.lemondeinformatique.fr/macos-x-100.html">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/maclogo.png" alt="MacOS Logo" class="h-8 w-8 mr-2">
						<span>MacOS</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 70%">75%</div>
					</div>
				</li>
			</a>
			<a href="https://www.microsoft.com/fr-fr/windows/windows-11?r=1">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/winlogo.png" alt="Windows Logo" class="h-8 w-8 mr-2">
						<span>Windows</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 90%">90%</div>
					</div>
				</li>
			</a>
			<a href="https://www.oracle.com/fr/linux/what-is-linux/">
				<li
					class="flex flex-col bg-white shadow-md rounded-lg p-4 text-neutral-950 transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
					<div class="flex items-center mb-2">
						<img src="./assets/img/logo/linuxlogo.png" alt="Linux Logo" class="h-8 w-8 mr-2">
						<span>Linux</span>
					</div>
					<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
						<div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
							style="width: 85%">85%</div>
					</div>
				</li>
			</a>
		</ul>
	</section>

	<!-- Formation section -->
	<section id="Formation" class="container mx-auto p-6">
		<h2 class="text-3xl font-bold mb-4">Mon école / Ma formation</h2>

		<div class="grid grid-cols-1 gap-6">
			<!-- Premier bloc -->
			<div class="bg-white shadow-md rounded-lg p-6">
				<p class="text-gray-700 sm:p-3 text-lg text-justify mb-px">
					Crée en 1983, <strong>l’ESICAD Montpellier</strong> est un acteur reconnu dans l’enseignement
					supérieur privé du Sud de la France, par la qualité de ses enseignements et l’encadrement apporté à
					ses étudiants. Avec plus de 700 alternants conclus chaque année, l'école bénéficie d'une forte
					notoriété auprès des entreprises de la région. Spécialisée dans les formations post-bac tertiaires,
					de BAC+2 à BAC+5, en formation initiale et en alternance, l’ESICAD Montpellier forme aux métiers du
					commerce, du management, de l’administration, de la gestion / finance, de
					<strong>l’informatique</strong>, du tourisme et de l’hôtellerie restauration.
				</p>
				<div class="container grid grid-cols-1 sm:grid-cols-2 gap-4 mx-auto p-4">
					<img src="./assets/img/photo/esicad-entree.png" alt="Photo de l'Esicad#1"
						class="w-full h-auto rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
					<img src="./assets/img/photo/esicad-inte.png" alt="Photo de l'Esicad#2"
						class="w-full h-auto rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
				</div>
			</div>

			<!-- Container principal -->
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-3">

				<!-- Section SISR -->
				<div class="bg-slate-50 p-4 rounded-lg shadow-sm">
					<h3 class="text-black font-extrabold text-lg mb-2">Option SISR</h3>

					<p class="text-gray-700 mb-4">
						L'option <strong>"Solutions d'Infrastructure, Systèmes et Réseaux" (SISR)</strong> forme des
						experts en infrastructures informatiques. Les étudiants apprennent à :
					</p>

					<!-- Liste des compétences SISR -->
					<ul class="list-disc list-inside space-y-2 text-gray-700 pl-4">
						<li>Concevoir et déployer des architectures réseau sécurisées</li>
						<li>Administrer des systèmes Windows et Linux</li>
						<li>Gérer des services d'infrastructure (Active Directory, DNS, DHCP)</li>
						<li>Mettre en place des solutions de virtualisation et de cloud computing</li>
						<li>Assurer la cybersécurité des systèmes d'information</li>
						<li>Superviser et maintenir les équipements réseau</li>
						<li>Fournir une assistance technique aux utilisateurs</li>
						<li>Gérer les sauvegardes et la continuité de service</li>
					</ul>

					<p class="text-gray-700 mt-4">
						Les diplômés peuvent évoluer vers des postes d'administrateur systèmes et réseaux, de technicien
						support, ou de consultant en infrastructure IT.
					</p>
				</div>

				<!-- Section SLAM -->
				<div class="bg-slate-50 p-4 rounded-lg shadow-sm">
					<h3 class="text-black font-extrabold text-lg mb-2">Option SLAM</h3>

					<p class="text-gray-700 mb-4">
						L'option <strong>"Solutions Logicielles et Applications Métiers" (SLAM)</strong> forme des
						développeurs qualifiés. Les étudiants acquièrent des compétences pour :
					</p>

					<!-- Liste des compétences SLAM -->
					<ul class="list-disc list-inside space-y-2 text-gray-700 pl-4">
						<li>Analyser les besoins des clients et rédiger des cahiers des charges</li>
						<li>Concevoir et développer des applications web et mobiles</li>
						<li>Maîtriser les langages de programmation modernes (Java, Python, JavaScript...)</li>
						<li>Gérer des bases de données (SQL, NoSQL)</li>
						<li>Utiliser des frameworks et des outils de développement actuels</li>
						<li>Appliquer les méthodes agiles et la gestion de projet</li>
						<li>Assurer la maintenance et l'évolution des applications</li>
						<li>Mettre en place des tests et garantir la qualité logicielle</li>
					</ul>

					<p class="text-gray-700 mt-4">
						Les diplômés peuvent devenir développeurs web/mobile, analystes programmeurs, ou chefs de
						projets techniques.
					</p>
				</div>
			</div>

	</section>



	<!-- Contact Section -->
	<section id="contact" class="container mx-auto p-6 pb-10">
		<h2 class="text-3xl font-bold mb-4">Contactez moi | 🚧EN CONSTRUCTION🚧</h2>
		<form action="/src/scripts/php/submit-form.php" method="post" class="bg-white shadow-md rounded-lg p-6">
			<div class="mb-4">
				<label for="name" class="block text-gray-700 mb-2">Nom:</label>
				<input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded-lg">
			</div>
			<div class="mb-4">
				<label for="email" class="block text-gray-700 mb-2">Email:</label>
				<input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
			</div>
			<div class="mb-4">
				<label for="message" class="block text-gray-700 mb-2">Message:</label>
				<textarea id="message" name="message" rows="4" required
					class="w-full px-3 py-2 border rounded-lg"></textarea>
			</div>
			<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Envoyer</button>
		</form>
	</section>

<?php 
require_once "./includes/footer.php"
?>