<style>
    @media (min-width: 640px) {
        .py-12 {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        .px-6 {
            padding-left: 4rem;
            padding-right: 4rem;
        }
    }

    @media (min-width: 768px) {
        .py-12 {
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        .px-6 {
            padding-left: 6rem;
            padding-right: 6rem;
        }
    }

    @media (min-width: 1024px) {
        .py-12 {
            padding-top: 10rem;
            padding-bottom: 10rem;
        }

        .px-6 {
            padding-left: 8rem;
            padding-right: 8rem;
        }
    }

    .font-celias {
        font-family: "Célias", sans-serif;
    }

    .bg-blue-500 {
        background-color: #35A7FF;
    }

    .text-white {
        color: #FFFFFF;
    }

    .text-blue-500 {
        color: #35A7FF;
    }

    .text-gray-900 {
        color: #222222;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .underline {
        text-decoration: underline;
    }

    .h-10 {
        height: 2.5rem;
    }

    .w-auto {
        width: auto;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .max-w-7xl {
        max-width: 80rem;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .shadow-sm {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }

    .p-6 {
        padding: 1.5rem;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-blue-500 py-4 px-6">
            <h2 class="font-celias text-xl text-white leading-tight">
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
                        <li><a href="{{ route('user.create') }}" class="text-blue-500">Ajouter utilisateur</a></li>
                        <li><a href="{{ route('user.index') }}" class="text-blue-500">Liste utilisateur</a></li>
                        <li><a href="{{ route('crypto.index') }}" class="text-blue-500">Liste crypto</a></li>
                        <li><a href="{{ route('news.create') }}" class="text-blue-500">Ajouter news</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-blue-500">News</a></li>
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


</x-app-layout>