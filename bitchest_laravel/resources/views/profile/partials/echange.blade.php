<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Célias', sans-serif;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
            background-color: #1e2532;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        section {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            width: 90%;
            padding: 20px;
            background-color: #2e3749;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section1 {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .liste_deroulante_crypto {
            margin-right: 20px;
        }

        label {
            font-size: 1rem;
        }

        select {
            font-size: 1rem;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #38618C;
            background-color: #1e2532;
            color: #FFFFFF;
        }

        input[type="number"] {
            font-size: 1rem;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #38618C;
            background-color: #1e2532;
            color: #FFFFFF;
            margin-bottom: 10px;
            width: 100%;
        }

        button {
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #35A7FF;
            color: #FFFFFF;
        }

        .courbe_crypto {
            width: 300px;
            height: 150px;
            background-color: #222b3b;
            border-radius: 8px;
        }
    </style>
</head>

<body>
@include('layouts.navigation')
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
    @include('layouts.footer')
</body>

</html>
