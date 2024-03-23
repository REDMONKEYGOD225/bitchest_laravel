<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        body {
            background-color: #38618C;
            /* Couleur de fond bleu foncé */
        }

        section {
            display: flex;
            justify-content: space-between;
            /* Espacement entre les éléments */
            text-align: center;
            color: #FFFFFF;
            /* Couleur de texte blanc */
            padding: 50px;
        }

        .logo {
            height: 100px;
            width: 250px;
        }

        section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            max-width: 400px;
            /* Largeur maximale du formulaire */
        }

        /* Styles pour les éléments du formulaire */
        form>div {
            margin-bottom: 20px;
        }

        form label {
            font-family: "Célias", sans-serif;
            font-size: 16px;
        }

        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #FFFFFF;
            /* Bordure blanche */
            background-color: transparent;
            /* Fond transparent */
            color: #FFFFFF;
            /* Couleur de texte blanche */
            font-family: "Célias", sans-serif;
            font-size: 16px;
        }

        /* Styles pour la case à cocher Remember Me */
        form .block {
            display: flex;
            align-items: center;
        }

        form .block input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Styles pour le bouton de connexion */
        form .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        form .flex a {
            text-decoration: none;
            color: #FFFFFF;
            /* Couleur de texte blanche */
            font-family: "Célias", sans-serif;
            font-size: 14px;
        }

        form .flex a:hover {
            color: #FFFFFF;
            /* Couleur de texte blanche au survol */
        }

        form .flex .primary-button {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #FFFFFF;
            /* Couleur de fond blanche */
            color: #38618C;
            /* Couleur de texte bleu foncé */
            font-family: "Célias", sans-serif;
            font-size: 16px;
            cursor: pointer;
        }

        form .flex .primary-button:hover {
            background-color: #35A7FF;
            /* Changement de couleur de fond au survol */
            color: #FFFFFF;
            /* Changement de couleur de texte au survol */
        }
    </style>

</head>

<body>
    <section>
        <img src="images/homme-grimpeur-torse-nu-escalade-mur-montagne-journee-ensoleillee-incroyable_127519-906.avif" alt="">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img src="images/bitchest_logo.png" alt="Bitchest Logo" class="logo">
            <h4>connectez-vous</h4>
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</body>

</html>