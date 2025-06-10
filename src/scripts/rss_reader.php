<?php
// URL du flux RSS
$rss_url = 'https://www.developpez.com/index/rss';

// Charger le contenu du flux RSS
$rss_content = file_get_contents($rss_url);

// Vérifier si le contenu a été chargé avec succès
if ($rss_content === false) {
    die('Erreur : Impossible de charger le flux RSS.');
}

// Créer un nouvel objet SimpleXMLElement
$rss = new SimpleXMLElement($rss_content);

// Afficher les éléments du flux RSS
echo '<div class="container mx-auto p-6 flex-grow">';
echo '<h1 class="text-center font-extrabold">' . $rss->channel->title . '</h1>';
echo '<br>';
echo '<ul>';
foreach ($rss->channel->item as $item) {
    echo '<li>';
    echo '<a href="' . $item->link . '">' . $item->title . '</a>';
    echo '<p>' . $item->description . '</p>';
    echo '</li>';
}
echo '</ul>';
echo '</div>';
?>
