<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
</head>

<body>
    <h1>Échange de Crypto-monnaies</h1>
    
    <form action="{{ route('crypto_exchange') }}" method="post">
        @csrf

        <div>
            <label for="from_crypto">Crypto-monnaie à vendre :</label>
            <select name="from_crypto" id="from_crypto">
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
            <label for="to_crypto">Crypto-monnaie à acheter :</label>
            <select name="to_crypto" id="to_crypto">
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
            <label for="quantity">Quantité :</label>
            <input type="number" name="quantity" id="quantity" min="0" step="0.01">
        </div>

        <button type="submit">Échanger</button>
    </form>
</body>

</html>
