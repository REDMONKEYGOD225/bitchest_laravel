<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
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
