<?php include_once "./includes/header2.php"?>

<!-- PAGE PROJET  -->
<section id="projets" class="container mx-auto p-6 flex-grow">
    <h2 class="text-3xl font-bold mb-4">Mes projets</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-xl font-bold text-neutral-950">Projet 1: Portfolio Personnel</h3>
            <p class="text-neutral-950 mb-2">
                Il s'agit précisément du projet que vous explorez. <br>
                La première version a été développée en utilisant le CDN Tailwind CSS et se limitait à une seule
                page. <br>
                Désormais, pour l'enrichir et le rendre plus accessible, il est hébergé sur Hostinger, avec une
                connexion directe à mon dépôt GitHub via SSH.
            </p>
            <div class="object-scale-down h-1/2">
                <a href="https://github.com/Thibolognaize/my_portfolio" target="_blank">
                    <img src="./assets/img/photo/portfolio.png" alt=""
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-xl font-bold text-neutral-950">Projet 2: Ultimate Pokedex</h3>
            <p class="text-neutral-950 mb-2">Site web utilisant un script Js pour récupérer les informations de
                l'api Tyradex. <br>Ce site répertorie les pokemons de première génération.</p>
            <div class="object-scale-down h-1/2">
                <a href="./assets/img/photo/image2.png" target="_blank">
                    <img src="./assets/img/photo/image2.png" alt="Ouvrir l'image"
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200 bottom-0">
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-xl font-bold text-neutral-950">Projet 3: Weather-app</h3>
            <p class="text-neutral-950 mb-2">C'est une application Web que j'ai designé à l'aide de CSS.<br>Pour
                l'affichage de donnée j'ai utilisé un script m'affichant les donnée de l'API weather map</p>
            <div class="object-scale-down h-1/2">
                <a href="https://github.com/Thibolognaize/Weather-app" target="_blank">
                    <img src="./assets/img/photo/image3.png" alt="Ouvrir l'image"
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-xl font-bold text-neutral-950">Projet 4: Projet-tab</h3>
            <p class="text-neutral-950 mb-2">C'est une application web dynamique qui permet de changer d'onglets
                tout en masquant les autres en utilisant du javascripts. Ce projet à pour vocation d'être réutilisé
                dans des projets futurs afin de rendre l'interface plus moderne.</p>
            <div class="object-scale-down h-1/2">
                <a href="https://github.com/Thibolognaize/Projet_tabs" target="_blank" alt="Voir l'image">
                    <img src="./assets/img/photo/image4.png" alt="Ouvrir l'image"
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once "./includes/footer.php"?>