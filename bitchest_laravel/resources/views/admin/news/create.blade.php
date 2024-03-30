<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une News</title>
    <style>
        /* Styles pour le formulaire */
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

        section {
            background-color: #FFFFFF; /* Couleur de fond de la section */
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            max-width: 600px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #FF5964; /* Couleur du texte des labels */
        }

        input[type="text"],
        textarea,
        input[type="file"] {
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

    </style>
</head>
<body>
    <section>
        <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title_news">Titre de la news :</label>
                <input type="text" name="title_news" id="title_news" required>
            </div>
            <div>
                <label for="text_news">Contenu de la news :</label>
                <textarea name="text_news" id="text_news" cols="30" rows="10" required></textarea>
            </div>
            <div>
                <label for="image_news">Image :</label>
                <input type="file" name="image_news" id="image_news">
            </div>
            <button type="submit">Ajouter</button>
        </form>
    </section>
</body>
</html>
