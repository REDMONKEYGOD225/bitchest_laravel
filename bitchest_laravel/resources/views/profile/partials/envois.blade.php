<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
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
            max-width: 400px;
            padding: 20px;
            border: 1px solid #38618C;
            border-radius: 5px;
            background-color: #FFFFFF;
        }

        label {
            font-size: 1rem;
            padding-right: 10px;
        }

        select, input[type="text"], input[type="number"] {
            font-size: 0.9rem;
            padding: 5px;
            width: 100%;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #FF5964;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>

<body>
@include('layouts.navigation')
    <section>
        <form action="#" method="post">
            @csrf
            <div>
                <input type="number" name="quantite_crypto" id="quantite_crypto" placeholder="Quantité de crypto">
            </div>

            <div class="liste_deroulante_crypto">
                <label for="crypto_choice">Choisissez une crypto à envoyer :</label>
                <select name="crypto_choice" id="crypto_choice">
                    <option value="bitcoin">Bitcoin</option>
                    <option value="ethereum">Ethereum</option>
                    <option value="ripple">Ripple</option>
                    <option value="Bitcoin Cash">Bitcoin Cash</option>
                    <option value="Cardano">Cardano</option>
                    <option value="Litecoin">Litecoin</option>
                    <option value="NEM">NEM</option>
                    <option value="Stellar">Stellar</option>
                    <option value="IOTA">IOTA</option>
                    <option value="Dash">Dash</option>
                </select>
            </div>

            <div>
                <label for="adresse">Adresse de réception :</label>
                <input type="text" name="adresse" id="adresse" placeholder="Adresse de réception">
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </section>
    @include('layouts.footer')
</body>

</html>
