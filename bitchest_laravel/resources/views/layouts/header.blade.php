<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header avec style</title>
    <style>
        /* Styles pour le header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #38618C; /* Bleu foncé */
            color: #FFFFFF; /* Blanc */
            font-family: 'Célias', sans-serif;
        }
        header img {
            height: 100px;
            width: 200px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin-right: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #FFFFFF; /* Blanc */
        }
        input[type="search"] {
            padding: 5px;
            border: none;
            background-color: #FFFFFF; /* Blanc */
            color: #38618C; /* Bleu foncé */
        }
        button {
            padding: 5px 10px;
            background-color: #35A7FF; /* Bleu clair */
            color: #FFFFFF; /* Blanc */
            border: none;
            cursor: pointer;
        }

        /* Media query pour rendre le header responsive */
        @media only screen and (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            nav ul {
                margin-top: 10px;
                flex-direction: column;
            }
            nav ul li {
                margin-right: 0;
                margin-bottom: 5px;
            }
            input[type="search"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="images/bitchest_logo.png" alt="Bitchest Logo">
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Marché</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Formation</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Actualités</a></li>
            </ul>
        </nav>
        <div>
            <input type="search" name="search" id="search" placeholder="Rechercher...">
            <button>Search</button>
        </div>
        @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Log in
            </a>
        @endauth
    </nav>
@endif
    </header>
</body>
</html>
