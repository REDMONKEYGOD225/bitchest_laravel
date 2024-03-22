<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        .footer {
    background-color: #FFFFFF;
    color: #38618C;
    padding: 50px;
    font-family: "Célias", sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center; /* Pour centrer horizontalement */
}

.newsletter {
    display: flex;
    flex-direction: column;
    align-items: center; /* Pour centrer horizontalement */
    margin-bottom: 20px; /* Espace entre newsletter et links */
}

.newsletter h2 {
    font-size: 1.5em;
    margin-bottom: 20px;
}

.newsletter input[type="email"],
.newsletter button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px; /* Espace entre input et bouton */
    width: 200px; /* Largeur fixe pour l'exemple */
}

.newsletter button {
    background-color: #01FF19;
    color: #FFFFFF;
    cursor: pointer;
}

.links {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    text-align: center;
    width: 100%; /* Pour assurer que les éléments se répartissent sur toute la largeur */
}

.links div {
    flex: 1; /* Pour que chaque élément prenne une part égale de l'espace disponible */
    margin-right: 20px; /* Espace entre les éléments */
}

.links div:last-child {
    margin-right: 0; /* Pour éviter l'espace à droite du dernier élément */
}

.links h4 {
    margin-bottom: 10px;
}

.copywrite {
    font-size: 0.8em;
}

    </style>
</head>

<body>

    <footer class="footer">
        <div class="newsletter">
            <h2>Inscrivez-vous à notre newsletter et recevez nos dernières actualités sur la crypto</h2>
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Votre adresse email" />
                <button type="submit">S'abonner</button>
            </form>
        </div>
        <div class="links">
            <div>
                <h4>Réseaux sociaux</h4>
            </div>
            <div>
                <h4>À propos de nous</h4>
            </div>
            <div>
                <h4>FAQ</h4>
            </div>
        </div>
        <p class="copywrite">&copy; 2024 Bitchest. Tous droits réservés.</p>
    </footer>


</body>

</html>