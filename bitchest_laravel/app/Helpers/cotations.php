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

// Convertir les cotations en JSON pour JavaScript
$cotations_json = json_encode($cotations);

// Convertir les noms des crypto-monnaies en JSON pour JavaScript
$crypto_monnaies_json = json_encode($crypto_monnaies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évolution des cotations</title>
    <!-- Inclure la bibliothèque JavaScript pour les graphiques -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="800" height="400"></canvas>
    <script>
        // Données JSON des cotations et des noms des crypto-monnaies
        var cotations = <?php echo $cotations_json; ?>;
        var crypto_monnaies = <?php echo $crypto_monnaies_json; ?>;
        
        // Créer un graphique avec Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: Array.from({ length: 30 }, (_, i) => (i + 1).toString()), // Jours
                datasets: crypto_monnaies.map(function(crypto, index) {
                    return {
                        label: crypto,
                        data: cotations[crypto],
                        fill: false,
                        borderColor: 'rgb(' + (Math.random() * 255) + ', ' + (Math.random() * 255) + ', ' + (Math.random() * 255) + ')',
                        tension: 0.1
                    }
                })
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>