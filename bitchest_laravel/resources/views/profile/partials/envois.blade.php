<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
</head>

<body>
    <section>
        <form action="#" method="post">
            @csrf
            <div>
                <input type="number" name="quantite_crypto" id="quantite_crypto">
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
                <input type="text" name="adresse" id="adresse">
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </section>
</body>

</html>
