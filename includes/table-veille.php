<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table stylée</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">

<h3 class="text-2xl font-bold text-neutral-950 underline decoration-blue-500 decoration-2 underline-offset-4 mb-8 text-center">Mes références</h3>

<div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden" id="table-veille">
    <table class="w-full text-neutral-950">
        <thead class="bg-gradient-to-r from-blue-600 to-blue-700 text-white">
            <tr>
                <th class="px-6 py-4 text-left font-semibold text-sm uppercase tracking-wider">Source</th>
                <th class="px-6 py-4 text-left font-semibold text-sm uppercase tracking-wider">Nom</th>
                <th class="px-6 py-4 text-left font-semibold text-sm uppercase tracking-wider">Descriptif</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center space-x-3">
                        <div class="bg-red-100 p-2 rounded-lg">
                            <img src="../assets/img/logo/logoytb.png" class="h-8 w-8 object-contain" alt="YouTube">
                        </div>
                        <span class="font-medium text-gray-900">YouTube</span>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="https://www.youtube.com/@grafikart/" 
                       class="text-blue-600 hover:text-blue-800 font-medium hover:underline transition-colors duration-200">
                        Grafikart.fr
                    </a>
                </td>
                <td class="px-6 py-4 text-gray-700 leading-relaxed">
                    Axé développement web et graphisme, cette chaîne propose des formations gratuites accessibles aux débutants et initie à l'utilisation des frameworks.
                </td>
            </tr>

            <tr class="hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center space-x-3">
                        <div class="bg-red-100 p-2 rounded-lg">
                            <img src="../assets/img/logo/logoytb.png" class="h-8 w-8 object-contain" alt="YouTube">
                        </div>
                        <span class="font-medium text-gray-900">YouTube</span>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="https://www.youtube.com/@NetworkChuck" 
                       class="text-blue-600 hover:text-blue-800 font-medium hover:underline transition-colors duration-200">
                        NetworkChuck
                    </a>
                </td>
                <td class="px-6 py-4 text-gray-700 leading-relaxed">
                    Cette chaîne partage énormément de contenu informatique en passant par la cybersécurité, l'utilisation de VM et la découverte de Linux.
                </td>
            </tr>

            <tr class="hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center space-x-3">
                        <div class="bg-green-100 p-2 rounded-lg">
                            <img src="../assets/img/logo/icone-web.jpg" class="h-8 w-8 object-contain" alt="Web">
                        </div>
                        <span class="font-medium text-gray-900">Web</span>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="https://www.it-connect.fr/" 
                       class="text-blue-600 hover:text-blue-800 font-medium hover:underline transition-colors duration-200">
                        IT-Connect.fr
                    </a>
                </td>
                <td class="px-6 py-4 text-gray-700 leading-relaxed">
                    Plateforme de cours sur l'administration systèmes et réseau pour les professionnels de l'informatique. Partage de posts à propos de l'actualité informatique.
                </td>
            </tr>
            
            <tr class="hover:bg-gray-50 transition-colors duration-200">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center space-x-3">
                        <div class="bg-green-100 p-2 rounded-lg">
                            <img src="../assets/img/logo/icone-web.jpg" class="h-8 w-8 object-contain" alt="Web">
                        </div>
                        <span class="font-medium text-gray-900">Web</span>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="https://www.presse-citron.net/" 
                       class="text-blue-600 hover:text-blue-800 font-medium hover:underline transition-colors duration-200">
                        Presse-Citron
                    </a>
                </td>
                <td class="px-6 py-4 text-gray-700 leading-relaxed">
                    Ce site propose toute l'actualité informatique quotidienne, en mettant en avant les nouvelles sorties technologiques.
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>