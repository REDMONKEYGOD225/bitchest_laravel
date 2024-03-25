<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBORD</title>
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
                        <a href="{{ route('admin.user.edit', $user->id) }}">Modifier</a>
                        <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
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