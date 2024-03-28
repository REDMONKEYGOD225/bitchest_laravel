<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
</head>

<body>
    <section>
        <table>
            <thead>
                <tr>
                    <th scope="col">quantité</th>
                    <th scope="col">nom de la crypto</th>
                    <th scope="col">date</th>
                    <th scope="col">heure</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cryptos as $crypto)
                <tr>
                    <td>{{ $crypto->quantite }}</td>
                    <td>{{ $crypto->nom }}</td>
                    <td>{{ $crypto->date }}</td>
                    <td>{{ $crypto->heure }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </section>
</body>

</html>