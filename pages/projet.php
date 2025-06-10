<?php include_once "../includes/header2.php"?>
<!-- PAGE PROJETS -->
<section id="projets" class="container mx-auto p-6 flex-grow">
    <h2 class="text-3xl font-bold mb-4">Mes projets</h2>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
        <!-- Projet 1 -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col mb-6 h-96">
            <div>
                <h3 class="text-xl font-bold text-center text-neutral-950">Projet 1: Portfolio Personnel</h3>
                <p class="text-neutral-950 text-center mb-2">
                    Il s'agit précisément du projet que vous explorez. <br>
                    La première version a été développée en utilisant le CDN Tailwind CSS et se limitait à une seule
                    page. <br>
                    Désormais, pour l'enrichir et le rendre plus accessible, il est hébergé sur Hostinger, avec une
                    connexion directe à mon dépôt GitHub via SSH.
                </p>
            </div>
            <div class="flex flex-grow items-end">
                <a href="https://github.com/Thibolognaize/my_portfolio" target="_blank" title="Lien vers github" class="w-70%">
                    <img src="../assets/img/photo/portfolio.png" alt="Screenshot du Portfolio"
                         class="w-auto cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <!-- Projet 2 -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col mb-6 h-96">
            <div>
                <h3 class="text-xl font-bold text-neutral-950 text-center">Projet 2: Ultimate Pokedex</h3>
                <p class="text-neutral-950 mb-2 text-center">
                    Site web utilisant un script Js pour récupérer les informations de l'API Tyradex. <br>
                    Ce site répertorie les pokémons de première génération, et ce fut ma première expérience
                    dans le développement web et l'utilisation de javascript / html / css <br>
                </p>
            </div>
            <div class="flex flex-grow items-end">
                <a href="https://thibolognaize.github.io/Website_pokedex/" target="_blank" title="Lien vers github" class="w-auto">
                    <img src="../assets/img/photo/image2.png" alt="Ouvrir l'image"
                         class="w-auto cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <!-- Projet 3 -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col mb-6 h-auto">
            <div>
                <h3 class="text-xl font-bold text-neutral-950 text-center">Projet 3: Weather maps</h3>
                <p class="text-neutral-950 mb-2 text-center">
                    C'est une application Web que j'ai designé à l'aide de CSS.<br>Pour
                    l'affichage de donnée j'ai utilisé un script m'affichant les donnée de l'API weather map.<br>
                    Ce projet m'a permis de me familiariser avec l'utilisation d'API et la manipulation de données
                    météorologiques en temps réel. <br>
                    Ce projet a aussi été selectionné lors de mon premier bts blanc E6, et j'ai du y implémenter une carte fonctionnant avec Google Maps API, c'est pourquoi le projet est actuellement hors ligne (consomation de tockens trop importante)
                </p>
            </div>
            <div class="flex justify-center items-center mt-4">
                <a href="https://github.com/Thibolognaize/Weather-app" target="_blank" title="Lien vers github" class="">
                    <img src="../assets/img/photo/image3.png" alt="Ouvrir l'image" 
                         class="h-64 cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <!-- Projet 4 -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col mb-6 h-96">
            <div>
                <h3 class="text-xl font-bold text-neutral-950 text-center">Projet 4: Interactive tabs</h3>
                <p class="text-neutral-950 mb-2 text-center">
                    Ce projet personnel est une page web dynamique qui permet de changer d'onglets
                    tout en masquant les autres en utilisant du javascripts. <br>Ce projet à pour vocation d'être réutilisé
                    dans des projets futurs afin de rendre l'interface plus moderne.</p>
                </p>
            </div>
            <div class="flex flex-grow items-end">
                <a href="https://thibolognaize.github.io/Projet_tabs/" target="_blank" title="Lien vers github" class="w-full">
                    <img src="../assets/img/photo/image4.png" alt="Ouvrir l'image"
                         class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>
    </div>
</section>
<?php include_once "../includes/footer2.php"?>

<!-- 
        <div class="bg-white shadow-md rounded-lg p-4 h-full">
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
                    <img src="../assets/img/photo/portfolio.png" alt="" height="100%"
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col h-full">
            <div>
                <h3 class="text-xl font-bold text-neutral-950">Projet 2: Ultimate Pokedex</h3>
                <p class="text-neutral-950 mb-2">
                    Site web utilisant un script Js pour récupérer les informations de l'API Tyradex. <br>
                    Ce site répertorie les pokemons de première génération.
                </p>
            </div>
            <div class="flex flex-grow items-end">
                <a href="https://thibolognaize.github.io/Website_pokedex/" target="_blank" class="w-full">
                    <img src="../assets/img/photo/image2.png" alt="Ouvrir l'image"
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>



        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-xl font-bold text-neutral-950">Projet 3: Weather-app</h3>
            <p class="text-neutral-950 mb-2">C'est une application Web que j'ai designé à l'aide de CSS.<br>Pour
                l'affichage de donnée j'ai utilisé un script m'affichant les donnée de l'API weather map</p>
            <div class="object-scale-down h-1/2">
                <a href="https://weather.thibault-feat.fr/" target="_blank">
                    <img src="../assets/img/photo/image3.png" alt="Ouvrir l'image"
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
                <a href="https://thibolognaize.github.io/Projet_tabs/" target="_blank" alt="Voir l'image">
                    <img src="../assets/img/photo/image4.png" alt="Ouvrir l'image"
                        class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div> -->