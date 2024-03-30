<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Crypto-monnaies</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #38618C;
            text-align: left;
        }

        th {
            background-color: #35A7FF;
            color: #FFFFFF;
        }

        td img {
            max-width: 50px;
            max-height: 50px;
        }

        .crypto-name {
            font-weight: bold;
            color: #38618C;
        }

        canvas {
            max-width: 100px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Logo</th>
                <th>Nom</th>
                <th>Cours Actuel</th>
                <th>Courbe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="images/bitcoin.png" alt="BitcoinLogo"></td>
                <td class="crypto-name">Bitcoin</td>
                <td id="bitcoin-cours"></td>
                <td><canvas id="bitcoin-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/ethereum.png" alt="EthereumLogo"></td>
                <td class="crypto-name">Ethereum</td>
                <td id="ethereum-cours"></td>
                <td><canvas id="ethereum-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/ripple.png" alt="RippleLogo"></td>
                <td class="crypto-name">Ripple</td>
                <td id="ripple-cours"></td>
                <td><canvas id="ripple-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/bitcoin-cash.png" alt="BitcoinCashLogo"></td>
                <td class="crypto-name">Bitcoin Cash</td>
                <td id="bitcoin-cash-cours"></td>
                <td><canvas id="bitcoin-cash-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/cardano.png" alt="CardanoLogo"></td>
                <td class="crypto-name">Cardano</td>
                <td id="cardano-cours"></td>
                <td><canvas id="cardano-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/litecoin.png" alt="LitecoinLogo"></td>
                <td class="crypto-name">Litecoin</td>
                <td id="litecoin-cours"></td>
                <td><canvas id="litecoin-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/nem.png" alt="NEMLogo"></td>
                <td class="crypto-name">NEM</td>
                <td id="nem-cours"></td>
                <td><canvas id="nem-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/stellar.png" alt="StellarLogo"></td>
                <td class="crypto-name">Stellar</td>
                <td id="stellar-cours"></td>
                <td><canvas id="stellar-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/iota.png" alt="IOTALogo"></td>
                <td class="crypto-name">IOTA</td>
                <td id="iota-cours"></td>
                <td><canvas id="iota-courbe" width="100" height="50"></canvas></td>
            </tr>
            <tr>
                <td><img src="images/dash.png" alt="DashLogo"></td>
                <td class="crypto-name">Dash</td>
                <td id="dash-cours"></td>
                <td><canvas id="dash-courbe" width="100" height="50"></canvas></td>
            </tr>
        </tbody>
    </table>

    <script>
        // Fonction pour récupérer les données de cotation
        function getCoursActuel(crypto) {
            // Ici, vous devez appeler votre méthode PHP pour obtenir le cours actuel de la crypto-monnaie
            return "$" + (Math.random() * 10000).toFixed(2); // Exemple de valeur aléatoire
        }

        // Fonction pour obtenir les données de la courbe
        function getCourbe(crypto) {
            // Ici, vous devez appeler votre méthode PHP pour obtenir les données de la courbe de la crypto-monnaie
            // Ces données peuvent être stockées dans un fichier JSON ou récupérées via une API
            // Pour cet exemple, nous allons simuler des données aléatoires pour la courbe
            var courbe = [];
            for (var i = 0; i < 30; i++) {
                courbe.push(Math.random() * 1000); // Exemple de valeur aléatoire
            }
            return courbe;
        }

        // Liste des crypto-monnaies
        var cryptoMonnaies = ['Bitcoin', 'Ethereum', 'Ripple', 'Bitcoin Cash', 'Cardano', 'Litecoin', 'NEM', 'Stellar', 'IOTA', 'Dash'];

        // Pour chaque crypto-monnaie, mettre à jour le cours actuel et afficher la courbe
        cryptoMonnaies.forEach(function(crypto) {
            var cours = getCoursActuel(crypto);
            var courbe = getCourbe(crypto);

            // Mettre à jour le cours actuel dans la cellule correspondante
            document.getElementById(crypto.toLowerCase().replace(" ", "-") + "-cours").textContent = cours;

            // Afficher la courbe à l'aide de Chart.js
            var ctx = document.getElementById(crypto.toLowerCase().replace(" ", "-") + "-courbe").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Array.from({
                        length: 30
                    }, (_, i) => (i + 1).toString()), // Jours
                    datasets: [{
                        label: crypto,
                        data: courbe,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>