<?php include_once "../includes/header2.php"?>

<!-- PAGE Tableau de synthèse-->
<section id="e5-e6" class="container mx-auto p-6 flex-grow">
    <h2 id="invisible-h2" class="text-3xl font-bold mb-4 hidden">Tableau de synthèse</h2>
    <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center h-screen">
        <h2 class="text-3xl font-bold mb-4 text-neutral-950 text-center">Tableau de synthèse</h2>
        <iframe src="../assets/docs/Tableau_synthese.pdf#toolbar=0&navpanes=0&scrollbar=0" class="pdf-iframe" frameborder="0"></iframe>
    </div>

    <div class="flex justify-center mt-4">
        <a href="../assets/docs/Tableau_synthese.pdf" download="Tableau_synthese.pdf"
            class="text-neutral-950 bg-gray-200 border-2 rounded-full px-3 py-2 md:p-2 transition duration-300 transform hover:-translate-y-1 hover:bg-slate-300 font-bold text-sm md:text-base">
            Télécharger le PDF
        </a>
    </div>
</section>

<section id="e5-text" class="container mx-auto p-6 flex-grow">
    <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <h2 class="text-3xl font-bold mb-4 text-neutral-950 text-center">Explication du Tableau de Synthèse</h2>
        <p class="text-black text-center p-3 text-lg text-wrap mb-4">
            Le tableau de synthèse est un document essentiel qui résume les compétences et les connaissances acquises
            au cours de la formation. Il permet de mettre en évidence les points forts et les axes d'amélioration,
            facilitant ainsi l'évaluation des compétences professionnelles. Ce tableau inclut des informations
            générales sur le candidat, les compétences mises en œuvre, et les réalisations professionnelles
            effectuées durant la formation et en milieu professionnel.
        </p>
    </div>
</section>

<style>
    .pdf-iframe {
        width: 100%;
        height: calc(100vh - 200px); /* Ajustez la hauteur pour laisser de la place pour le titre et le bouton */
        border: none;
    }
    .h-screen {
        height: 100vh; /* Assure que la div prend toute la hauteur de la fenêtre */
    }
    .flex-grow {
        flex-grow: 1;
    }
    .text-wrap {
        word-wrap: break-word;
    }
</style>

<?php include_once "../includes/footer2.php"?>
