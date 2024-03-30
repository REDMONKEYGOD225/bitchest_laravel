<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBOARD</title>
    <style>
        /* Styles pour le formulaire */
        body {
            font-family: 'Célias', sans-serif; /* Police de caractères */
            background-color: #FFFFFF; /* Couleur de fond */
            color: #38618C; /* Couleur du texte */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #FFFFFF; /* Couleur de fond du formulaire */
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #FF5964; /* Couleur du texte des labels */
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #38618C; /* Couleur de la bordure */
            border-radius: 0.25rem;
        }

        button[type="submit"] {
            background-color: #FF5964; /* Couleur de fond du bouton */
            color: #FFFFFF; /* Couleur du texte du bouton */
            border: none;
            border-radius: 0.25rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #FF3545; /* Couleur de fond du bouton au survol */
        }
    </style>
</head>
<body>
    <h1>Modifier Utilisateur</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" value="{{ $user->username }}">
        </div>
        <div>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
