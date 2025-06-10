<?php include_once "../includes/header2.php"?>
<!-- PAGE PROJETS -->
<section id="projets" class="container mx-auto p-6 flex-grow">
    <h2 class="text-3xl font-bold mb-4">Mes projets personnels</h2>
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
                <h3 class="text-xl font-bold text-neutral-950 text-center">Projet 4: Hexabot</h3>
                <p class="text-neutral-950 mb-2 text-center">
                    Ceci est une page web réalisé en classe à l'aide de WordPress. L'objectif était de mettre en avant notre classe<br>
                    de BTS SIO de manière innovante, tout en respectant la méthode agile pour le travail de groupe.<br>
                    Cliquez sur l'image pour consulter notre travail.
                </p>
            </div>
            <div class="flex flex-grow items-end">
                <a href="https://hexabot.website" target="_blank" title="Lien vers github" class="w-full">
                    <img src="../assets/img/photo/hexabot.png" alt="Ouvrir l'image"
                         class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>
    </div>
    <h2 class="text-3xl font-bold mb-4">Mes projets en entreprise</h2>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
        
        <!-- Projet 5 -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col mb-6 h-96">
            <div>
                <h3 class="text-xl font-bold text-neutral-950 text-center">Projet 5: Cartographie des logiciels</h3>
                <p class="text-neutral-950 mb-2 text-center">
                    C'est mon premier projet de developpement web en entreprise. <br>
                    J'ai produit une page web afin de présenter à nos collaborateurs les différents logiciels utilisés 
                    dans nos différents pôles et comment les utiliser, <br>de manière simple et interractive.
                </p>
            </div>
            <div class="flex flex-grow items-end">
                <a href="https://mapapps.augefi.fr/" target="_blank" title="Lien vers le site" class="w-full">
                    <img src="../assets/img/photo/mapapps.png" alt="Ouvrir l'image"
                         class="w-full cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">
                </a>
            </div>
        </div>

        <!-- Projet 6 -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col mb-6 h-96">
            <div>
                <h3 class="text-xl font-bold text-neutral-950 text-center">Projet 6: Suivi des dépenses informatiques</h3>
                <p class="text-neutral-950 mb-2 text-center">
                    Ce projet est mon projet principal pour gérer le patrimoine informatique d'ECS, cette page NextJS répertorie<br>
                    toutes les dépenses faites par ECS. La page est synchronisé avec une base de donnée Mysql schématisé avec Prisma.<br>
                    Un enregistrement de l'application a du être fait sur Microsoft Entra ID afin d'offrir un système d'authentification sécurisé.<br>
                    <em>Pour des raisons évidentes les données sensibles sont masquées et la page n'est pas disponible au public</em>
                </p>
            </div>
            <a href="https://github.com/Thibolognaize/Suivi_depenses/tree/main" target="_blank" title="Lien vers le github" class="w-full">
                <div class="flex flex-grow items-end">
                    <img src="../assets/img/photo/suiviDepenses.png" alt="Ouvrir l'image"
                            class="w-full transition duration-300 transform hover:-translate-y-1 hover:bg-gray-200">              
                </div>
            </a>
        </div>
    </div>
</section>
<?php include_once "../includes/footer2.php"?>
