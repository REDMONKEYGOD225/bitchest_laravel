<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        label {
            font-family: sans-serif;
            font-size: 1rem;
            padding-right: 10px;
        }

        select {
            font-size: 0.9rem;
            padding: 2px 5px;
        }
    </style>
</head>

<body>
    <section>
        <div class="section1">
            <div class="liste_deroulante_crypto">
                <label for="buy_choice">Choisissez une crypto à acheter :</label>
                <select name="buy_choice" id="buy_choice">
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
            <div class="courbe_crypto">
                <!-- Ici se trouvera la courbe de la crypto sélectionnée -->
            </div>
        </div>
        <form action="{{ route('buy_crypto') }}" method="post">
            @csrf
            <div>
                <input type="number" name="quantity" id="buy_quantity" placeholder="Quantité à acheter">
            </div>
            <button type="submit">Acheter</button>
        </form>
        <form action="{{ route('sell_crypto') }}" method="post">
            @csrf
            <div class="liste_deroulante_crypto">
                <label for="sell_choice">Choisissez une crypto à vendre :</label>
                <select name="sell_choice" id="sell_choice">
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
                <input type="number" name="quantity" id="sell_quantity" placeholder="Quantité à vendre">
            </div>
            <button type="submit">Vendre</button>
        </form>
    </section>
</body>

</html>