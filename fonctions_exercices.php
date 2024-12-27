<?php

// Exercice 1 : Génération de noms de fichiers sauvegardés
function genererNomFichier($nom, $extension) {
 // Compléter la fonction içi
}
echo "===== Exercice 1 : Génération de noms de fichiers sauvegardés =====\n";

$nomFichier = genererNomFichier("base_donnees", "sql");
echo "Nom de fichier généré : $nomFichier\n\n";

echo "===== Exercice 2 : Détection d'une plage d'adresses IP =====\n";

// Exercice 2 : Détection d'une plage d'adresses IP
function estDansPlageIP($ip, $plage) {
 // Compléter la fonction içi

}

$plage = [
    "debut" => "192.168.1.10",
    "fin" => "192.168.1.50"
];
$ip = "192.168.1.25";
/* Décommentez cette zone quand vous avez finit la fonctio */

//if (estDansPlageIP($ip, $plage)) {
//    echo "L'adresse IP $ip est dans la plage.\n\n";
//} else {
//    echo "L'adresse IP $ip n'est pas dans la plage.\n\n";
//}

echo "===== Exercice 3 : Génération de la vue utilisateurs =====\n";

// Exercice 3 : Génération de la vue HTML pour les utilisateurs
function genererVueUtilisateurs($utilisateurs) {
    $html = "<!DOCTYPE html>\n";
    $html .= "<html lang='fr'>\n";
    $html .= "<head>\n";
    $html .= "    <meta charset='UTF-8'>\n";
    $html .= "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    $html .= "    <title>Exercices PHP</title>\n";
    $html .= "    <style>\n";
    $html .= "        table { border-collapse: collapse; width: 100%; }\n";
    $html .= "        th, td { padding: 8px 12px; text-align: left; border: 1px solid #ddd; }\n";
    $html .= "        th { background-color: #f2f2f2; }\n";
    $html .= "    </style>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<h1>Exercices PHP</h1>\n";
    $html .= "<h2>Exercice 3 : Liste des utilisateurs</h2>\n";
    $html .= "<table>\n";
   // Complétez içi pour la question 2 de l'exercice 3
    $html .= "</body>\n";
    $html .= "</html>\n";

    return $html;
}

// Tableau associatifs
$utilisateurs = [
    ["nom" => "DUPONT", "prenom" => "jean", "email" => "jean.dupont@iro-o.fr"],
    ["nom" => "MARTIN", "prenom" => "claire", "email" => "claire.martin@iro-o.fr"],
    ["nom" => "LEROY", "prenom" => "paul", "email" => "paul.leroy@iro-o.fr"],
    ["nom" => "GARCIA", "prenom" => "emma", "email" => "emma.garcia@iro-o.fr"]
];

/* Décommentez cette zone quand vous avez finit la fonction  */
//$htmlContent = genererVueUtilisateurs($utilisateurs);

// Sauvegarder le contenu dans un fichier .html
//file_put_contents("exercice3.html", $htmlContent);

//echo "Le fichier HTML a été créé : exercice3.html\n";

?>
