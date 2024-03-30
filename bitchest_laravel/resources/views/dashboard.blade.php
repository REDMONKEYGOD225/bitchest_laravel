<style>
    .bg-primary {
        background-color: #01FF19;

    }

    .bg-primary img {
        max-height: 3rem;

    }


    ul {
        list-style-type: none;

        padding: 0;
    }

    ul li {
        margin-bottom: 0.5rem;

    }

    ul li a {
        color: #38618C;

        text-decoration: none;

        font-family: 'Célias', sans-serif;

    }

    ul li a:hover {
        color: #35A7FF;

    }


    form button {
        background: none;
        border: none;
        color: #38618C;

        font-family: 'Célias', sans-serif;

        cursor: pointer;
    }

    form button:hover {
        color: #35A7FF;

    }
</style>

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-primary py-4 px-6">
            <img src="{{ asset('images/bitchest_logo.png') }}" alt="Bitchest Logo" class="h-10 w-auto">
        </div>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row-reverse">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-1/4">
                <!-- Contenu de la dashboard -->
                <div class="p-6 text-gray-900">
                    <ul>
                        <li><a href="{{ route('admin.user.create') }}">Ajouter utilisateur</a></li>
                        <li><a href="{{ route('admin.user.index') }}">Liste utilisateur</a></li>
                        <li><a href="{{ route('admin.crypto.index') }}">Liste crypto</a></li>
                        <li><a href="{{ route('admin.news.create') }}">Ajouter news</a></li>
                        <li><a href="{{ route('admin.news.index') }}">News</a></li>
                    </ul>

                    <!-- Bouton de déconnexion -->
                    <form method="POST" action="{{ route('logout') }}">
                        <button type="submit" class="text-sm text-gray-700 underline">Déconnexion</button>
                    </form>
                </div>
            </div>
            <div class="content-show flex-1">
                <!--c'est ici que vas s'affciher le contenue de chaque page-->
            </div>
        </div>
    </div>
</x-app-layout>