<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBORD</title>
</head>
<body>
    <form action="{{ route('admin.user.index') }}" method="post">
    @csrf
        <div>
            <label for="photo">ajouter la photo :</label>
            <input type="file" name="photo" id="photo">
        </div>
        <div>
            <label for="name">entrez le nom:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="username">entrez le nom de l'utilisateur :</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="email">Entrez votre email :</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">entrez le mot de pass :</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">ajouter l'utilisateur</button>
    </form>
</body>
</html>