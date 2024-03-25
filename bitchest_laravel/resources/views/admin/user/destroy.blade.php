<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Utilisateur</title>
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
