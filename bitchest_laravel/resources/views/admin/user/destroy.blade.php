<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBOARD</title>
    <style>
        
        body {
            font-family: 'Célias', sans-serif;
            
            background-color: #FFFFFF;
           
            color: #38618C;
            
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #FF5964;
           
        }

        p {
            margin-bottom: 1rem;
        }

        form {
            display: inline-block;
        }

        button[type="submit"] {
            background-color: #FF5964;
            /* Couleur de fond du bouton */
            color: #FFFFFF;
            /* Couleur du texte du bouton */
            border: none;
            border-radius: 0.25rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #01FF19;
            /* Couleur de fond du bouton au survol */
        }

        a {
            color: #38618C;
            /* Couleur du texte du lien */
            text-decoration: none;
            margin-left: 1rem;
        }

        a:hover {
            color: #35A7FF;
            /* Couleur du lien au survol */
        }
    </style>
</head>

<body>
    <h1>Supprimer Utilisateur</h1>
    <p>Êtes-vous sûr de vouloir supprimer l'utilisateur "{{ $user->name }}" ?</p>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
    <a href="{{ route('users.index') }}">Annuler</a>
</body>

</html>