<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST-DASHBOARD</title>
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
