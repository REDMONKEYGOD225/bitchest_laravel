<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
</head>
<body>
    <h1>Le mot de passe a été modifié avec succès !</h1>

    <!-- Script JavaScript pour afficher l'alerte -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Récupérer le message de succès depuis la session
            var successMessage = "{{ session('success') }}";

            // Vérifier si le message de succès est présent
            if (successMessage) {
                alert(successMessage);
            }
        });
    </script>
</body>
</html>
