<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-primary py-4 px-6">
            <h2 class="font-celias font-semibold text-xl text-white leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <img src="{{ asset('images/bitchest_logo.png') }}" alt="Bitchest Logo" class="h-10 w-auto">
        </div>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <ul>
                        <li><a href="{{ route('user.create') }}">Ajouter utilisateur</a></li>
                        <li><a href="{{ route('user.index') }}">Liste utilisateur</a></li>
                        <li><a href="{{ route('crypto.index') }}">Liste crypto</a></li>
                        <li><a href="{{ route('news.create') }}">Ajouter news</a></li>
                        <li><a href="{{ route('news.index') }}">News</a></li>
                    </ul>

                    <!-- Bouton de déconnexion -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-700 underline">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Couleurs */
        .bg-primary {
            background-color: #35A7FF; /* Bleu */
        }

        .text-white {
            color: #FFFFFF; /* Blanc */
        }

        /* Typographie */
        .font-celias {
            font-family: "Célias", sans-serif;
        }

        /* Filtre */
        .page-filter::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); /* Filtre blanc semi-transparent */
            z-index: -1; /* Le filtre doit être derrière le contenu */
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            /* Ajoutez ici vos règles CSS pour les écrans de petite taille */
        }
    </style>
</x-app-layout>
