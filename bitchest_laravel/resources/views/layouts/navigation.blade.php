<nav class="navbar navbar-expand-lg navbar-light" style="font-family: 'Célias', sans-serif; background-color: #38618C; color: #FFFFFF;">
    <div class="container" style="display: flex; justify-content: space-around; align-items: center;">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: #FFFFFF; font-weight: bold; text-decoration: none;">Mon Application</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav" style="display: flex; flex-direction: row;">
                <li class="nav-item" style="margin-right: 10px; list-style: none;">
                    <a class="nav-link" href="{{ route('profile.profile') }}" style="color: #FFFFFF; text-decoration: none;">Profile</a>
                </li>
                <li class="nav-item" style="margin-right: 10px; list-style: none;">
                    <a class="nav-link" href="{{ route('profile.partials.achat-vente') }}" style="color: #FFFFFF; text-decoration: none;">Achat-Vente</a>
                </li>
                <li class="nav-item" style="margin-right: 10px; list-style: none;">
                    <a class="nav-link" href="{{ route('profile.partials.echange') }}" style="color: #FFFFFF; text-decoration: none;">Echange</a>
                </li>
                <li class="nav-item" style="margin-right: 10px; list-style: none;">
                    <a class="nav-link" href="{{ route('profile.partials.recevoir') }}" style="color: #FFFFFF; text-decoration: none;">Recevoir</a>
                </li>
                <li class="nav-item" style="margin-right: 10px; list-style: none;">
                    <a class="nav-link" href="{{ route('profile.partials.envois') }}" style="color: #FFFFFF; text-decoration: none;">Envoyer</a>
                </li>
                <li class="nav-item" style="margin-right: 10px; list-style: none;">
                    <a class="nav-link" href="{{ route('profile.partials.envois') }}" style="color: #FFFFFF; text-decoration: none;">News</a>
                </li>
            </ul>
        </div>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!-- Afficher uniquement le bouton de déconnexion pour les utilisateurs authentifiés -->
            @auth
            <li class="nav-item" style="list-style: none;">
                <a class="nav-link" href="{{ route('logout') }}" style="color: #FFFFFF; text-decoration: none;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Déconnexion') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endauth
        </ul>
    </div>
</nav>
