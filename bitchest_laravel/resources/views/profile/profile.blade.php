<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <script src="https://cdn.jsdelivr.net/npm/qrcode@latest/qrcode.min.js"></script>
    <style>
        section {
            display: flex;
            justify-content: space-between;
        }

        .section2 {
            display: flex;
            flex-direction: column;
            height: 350px;
            width: 200px;
            background-color: violet;
        }
    </style>
</head>

<body>
    <section>
        <div class="section1">
            <?php
            // Connectez-vous à votre base de données
            $pdo = new PDO('mysql:host=host_name;dbname=database_name', 'username', 'password');

            // Sélectionnez les informations de l'utilisateur depuis la base de données
            $stmt = $pdo->prepare("SELECT photo, nom, prenom, email FROM utilisateurs WHERE id = :id");
            $stmt->execute(['id' => $userId]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérifiez si l'utilisateur existe
            if ($user) {
                // Affichez la photo de l'utilisateur
                echo '<img src="' . $user['photo'] . '" alt="Photo de profil">';

                // Affichez le nom et le prénom de l'utilisateur
                echo '<h2>' . $user['prenom'] . ' ' . $user['nom'] . '</h2>';

                // Affichez l'adresse e-mail de l'utilisateur
                echo '<p>Email: ' . $user['email'] . '</p>';
            } else {
                // Si l'utilisateur n'est pas trouvé, affichez un message d'erreur
                echo '<p>L\'utilisateur n\'existe pas.</p>';
            }
            ?>
        </div>

        <div class="section2">
            <div id="solde">
                <?php
                // Connectez-vous à votre base de données
                $pdo = new PDO('mysql:host=host_name;dbname=database_name', 'username', 'password');

                // Sélectionnez le solde de l'utilisateur depuis la base de données
                $stmt = $pdo->prepare("SELECT solde FROM utilisateurs WHERE id = :id");
                $stmt->execute(['id' => $userId]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Vérifiez si l'utilisateur existe
                if ($user) {
                    // Affichez le solde de l'utilisateur
                    echo '<p>Solde: ' . $user['solde'] . '</p>';
                } else {
                    // Si l'utilisateur n'est pas trouvé, affichez un message d'erreur
                    echo '<p>L\'utilisateur n\'existe pas.</p>';
                }
                ?>
            </div>
            <div id="recharg">

                <div id="solde">
                    <?php
                    // Connectez-vous à votre base de données
                    $pdo = new PDO('mysql:host=host_name;dbname=database_name', 'username', 'password');

                    // Sélectionnez le solde de l'utilisateur depuis la base de données
                    $stmt = $pdo->prepare("SELECT solde FROM utilisateurs WHERE id = :id");
                    $stmt->execute(['id' => $userId]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    // Vérifiez si l'utilisateur existe
                    if ($user) {
                        // Affichez le solde de l'utilisateur
                        echo '<p>Solde: ' . $user['solde'] . '</p>';
                    } else {
                        // Si l'utilisateur n'est pas trouvé, affichez un message d'erreur
                        echo '<p>L\'utilisateur n\'existe pas.</p>';
                    }
                    ?>
                </div>
                <div>
                    <div id="qrcode"></div>
                    <a href="https://mytouchpoint.net/">Recharger mon compte</a>
                </div>
                <div>
                    <h3>wallets</h3>
                    <h4>security key: xxxxxxxxxxxx</h4>
                    <h4>adresse: xxxxxxxxxxxxxxxx</h4>
                </div>
            </div>

        </div>
        <div class="blockchain">
            <h1>Cryptomonnaies de l'utilisateur</h1>

            <?php
            // Connexion à la base de données (à remplir avec vos propres informations de connexion)
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "nom_base_de_données";

            // Création de la connexion
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérification de la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // ID de l'utilisateur pour lequel nous voulons récupérer les cryptomonnaies (à remplacer par l'ID réel de l'utilisateur)
            $user_id = 1;

            // Requête SQL pour récupérer les cryptomonnaies de l'utilisateur spécifié
            $sql = "SELECT cm.name AS crypto_name, a.sold AS crypto_quantity
                FROM purchase p
                JOIN crypto_monnaie cm ON p.id_crypto = cm.id_crypto
                JOIN account a ON p.id_user = a.id_wallet
                JOIN wallet w ON a.id_wallet = w.id_wallet
                WHERE w.id_user = $user_id";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Affichage des cryptomonnaies de l'utilisateur
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["crypto_name"] . ": " . $row["crypto_quantity"] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "L'utilisateur ne détient aucune cryptomonnaie.";
            }

            // Fermeture de la connexion à la base de données
            $conn->close();
            ?>
        </div>
    </section>

    <script>
        // Fonction pour générer le QR code avec le nom d'utilisateur
        function generateRechargeQRCode(username) {
            var qrCodeDiv = document.getElementById('qrcode');

            // Utilisation de QRCode.js pour générer le QR code avec le nom d'utilisateur
            var qr = new QRCode(qrCodeDiv, {
                text: username,
                width: 256,
                height: 256,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
        }

        // Récupérer le nom d'utilisateur à partir de la base de données ou de toute autre source
        var username = "<?php echo $user->username; ?>"; // Assurez-vous de remplacer cette ligne par la manière dont vous récupérez réellement le nom d'utilisateur

        // Génération du QR code avec le nom d'utilisateur récupéré
        generateRechargeQRCode(username);
    </script>
</body>

</html>