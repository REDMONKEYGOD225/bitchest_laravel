<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBORD</title>
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

        form {
            background-color: #FFFFFF; 
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #35A7FF; 
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #38618C; 
            border-radius: 0.25rem;
        }

        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }

        button[type="submit"] {
            background-color: #35A7FF; 
            color: #FFFFFF; 
            border: none;
            border-radius: 0.25rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #38618C; 
        }
    </style>
</head>

<body>
    <form action="{{ route('admin.user.index') }}" method="post">
        @csrf
        <div>
            <label for="photo">Ajouter la photo :</label>
            <input type="file" name="photo" id="photo">
        </div>
        <div>
            <label for="name">Entrez le nom :</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="username">Entrez le nom de l'utilisateur :</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="email">Entrez votre email :</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Entrez le mot de passe :</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Ajouter l'utilisateur</button>
    </form>
</body>

</html>
