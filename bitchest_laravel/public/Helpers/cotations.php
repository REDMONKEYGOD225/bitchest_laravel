<?php
// Inclure le fichier cotation_generator.php
require_once __DIR__ . '/cotation_generator.php';

// Liste des dix crypto-monnaies supportées
$crypto_monnaies = ['Bitcoin', 'Ethereum', 'Ripple', 'Bitcoin Cash', 'Cardano', 'Litecoin', 'NEM',  'Stellar', 'IOTA', 'Dash'];

// Générer les cotations des dix crypto-monnaies sur les 30 derniers jours
$cotations = [];
foreach ($crypto_monnaies as $crypto) {
    $cotations[$crypto] = [];
    // Générer les cotations pour chaque jour
    for ($jour = 0; $jour < 30; $jour++) {
        $cotation_jour = getCotationFor($crypto);
        // Assurez-vous que la cotation n'est pas négative
        $cotation_jour = max(0, $cotation_jour);
        $cotations[$crypto][] = $cotation_jour;
    }
}

// Générer la première cotation de chaque crypto-monnaie
$premiere_cotations = [];
foreach ($crypto_monnaies as $crypto) {
    $premiere_cotations[$crypto] = getFirstCotation($crypto);
}

// Convertir les cotations en JSON et les renvoyer
header('Content-Type: application/json');
echo json_encode($cotations);
?>