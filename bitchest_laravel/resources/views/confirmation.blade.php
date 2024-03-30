<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de création d'utilisateur</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #FFFFFF;
            color: #38618C;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #FF5964;
            text-align: center;
        }

        p {
            color: #38618C;
        }

        .password {
            background-color: #38618C; 
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .password p {
            margin: 0;
            font-size: 18px;
            text-align: center;
            color: #FFFFFF; 
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Confirmation de création d'utilisateur</h1>
        <p>Un nouvel utilisateur a été créé avec succès. Voici le mot de passe temporaire généré :</p>
        <div class="password">
            <p>{{ $temporaryPassword }}</p>
        </div>
    </div>
</body>

</html>
