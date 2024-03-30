<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        section {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #35a7ff;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 600px) {
            th,
            td {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
@include('layouts.navigation')
    <section>
        <table>
            <thead>
                <tr>
                    <th scope="col">Quantité</th>
                    <th scope="col">Nom de la crypto</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
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
    @include('layouts.footer')
</body>

</html>
