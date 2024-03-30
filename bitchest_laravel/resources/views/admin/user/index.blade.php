<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBORD</title>
    <style>
        /* Styles pour le tableau */
body {
    font-family: 'Célias', sans-serif; /* Police de caractères */
    background-color: #FFFFFF; /* Couleur de fond */
    color: #38618C; /* Couleur du texte */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}

th, td {
    border: 1px solid #38618C;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #35A7FF; /* Couleur de fond de l'en-tête */
    color: #FFFFFF; /* Couleur du texte de l'en-tête */
}

tr:nth-child(even) {
    background-color: #FFFFFF; /* Couleur de fond des lignes paires */
}

tr:nth-child(odd) {
    background-color: #F0F0F0; /* Couleur de fond des lignes impaires */
}

/* Styles pour les boutons */
button[type="submit"], a {
    background-color: #FF5964; /* Couleur de fond des boutons */
    color: #FFFFFF; /* Couleur du texte des boutons */
    border: none;
    border-radius: 4px;
    padding: 8px 16px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
}



    </style>
</head>

<body>
    <!-- Formulaire pour supprimer les utilisateurs sélectionnés -->
    <form action="{{ route('admin.user.deleteSelected') }}" method="post">
        @csrf
        <!-- Tableau pour afficher les données -->
        <table>
            <thead>
                <tr>
                    <th></th> <!-- Case à cocher pour la sélection multiple -->
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Nom de l'utilisateur</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Action</th> <!-- Colonnes pour les boutons de modification et de suppression -->
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="7">Bas du tableau</td>
                </tr>
            </tfoot>
            <tbody>
                <!-- Vous pouvez remplir cette section avec les données des utilisateurs -->
                @foreach($users as $user)
                <tr>
                    <td><input type="checkbox" name="selected_users[]" value="{{ $user->id }}"></td>
                    <td>{{-- Afficher la photo de l'utilisateur --}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <!-- Boutons de modification et de suppression -->
                        <a href="{{ route('admin.user.update', $user->id) }}">Modifier</a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit">Supprimer les utilisateurs sélectionnés</button>
    </form>
</body>

</html>
