<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Crypto-monnaies</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Stocker les instances des graphiques pour pouvoir les détruire
            var charts = {};

            function getCotations() {
                fetch('/Helpers/cotations.php')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        Object.keys(data).forEach(function(crypto) {
                            var cours = data[crypto]['cours'];
                            var courbe = data[crypto]['cotations'];

                            // Mettre à jour le cours actuel dans la cellule correspondante
                            document.getElementById(crypto.toLowerCase().replace(" ", "-") + '-cours').textContent = cours;

                            // Détruire le graphique existant s'il existe déjà
                            if (charts[crypto]) {
                                charts[crypto].destroy();
                            }

                            // Dessiner la nouvelle courbe à l'aide de Chart.js
                            var ctx = document.getElementById(crypto.toLowerCase().replace(" ", "-") + '-courbe').getContext('2d');
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

                            // Stocker le graphique dans le tableau pour pouvoir le détruire ultérieurement
                            charts[crypto] = myChart;
                        });
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });
            }

            // Appeler la fonction pour récupérer les cotations lors du chargement initial
            getCotations();

            // Actualiser les cotations toutes les 5 secondes
            setInterval(getCotations, 5000);
        });
    </script>
</body>

</html>