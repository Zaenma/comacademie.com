@php
    use App\Helpers\Helpers;
    
    // dd(Helpers::subcategories(4));
    
@endphp

<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('comacademie.index') }}">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/comlogo.png') }}"
                    alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/comlogo.png') }}"
                    alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav category menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                        <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0"
                            href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Bibliothèque</span></a>
                        <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Programme des comores</a>
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                    <div class="row p-4">
                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Collège</h6>
                                            <hr> <!-- Divider -->
                                            <ul class="list-unstyled">
                                                <li> <a class="dropdown-item" href="#">6<sup>ème</sup> - Cours</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">5<sup>ème</sup> - Cours</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">4<sup>ème</sup> - Cours</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">3<sup>ème</sup> - Cours</a>
                                                </li>
                                                <hr>
                                                <li> <a class="dropdown-item" href="#">6<sup>ème</sup> -
                                                        Exercices</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">5<sup>ème</sup> -
                                                        Exercices</a> </li>
                                                <li> <a class="dropdown-item" href="#">4<sup>ème</sup> -
                                                        Exercices</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">3<sup>ème</sup> -
                                                        Exercices</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Exercieces types BEPC</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Sujets BEPC</a> </li>

                                            </ul>
                                        </div>

                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Lycée</h6>
                                            <hr> <!-- Divider -->
                                            <ul class="list-unstyled">
                                                <li> <a class="dropdown-item" href="#">Second G</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Second A</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Second D</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Second C</a>
                                                </li>

                                                <hr>
                                                <li> <a class="dropdown-item" href="#">Première G</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Première A4</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Première A1</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Première D</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Première C</a>
                                                </li>
                                                <hr>
                                                <li> <a class="dropdown-item" href="#">Terminal G</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Terminal A4</a>
                                                </li>

                                                <li> <a class="dropdown-item" href="#">Terminal A1</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Terminal D</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Terminal C</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            @foreach (Helpers::categories()->take(12) as $categorie)
                                @if (Helpers::subcategories($categorie->id)->count() != 0)
                                    <li class="dropdown-submenu dropend">

                                        <a class="dropdown-item dropdown-toggle"
                                            href="#">{{ $categorie->categorie_nom }}</a>
                                        <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                            <!-- dropdown submenu open right -->

                                            @foreach (Helpers::subcategories($categorie->id) as $subcategorie)
                                                @if (Helpers::childsubcategories($subcategorie->id)->count() != 0)
                                                    <li class="dropdown-submenu dropend">
                                                        <a class="dropdown-item dropdown-toggle"
                                                            href="#">{{ $subcategorie->nom }}</a>
                                                        <ul class="dropdown-menu" data-bs-popper="none">

                                                            @foreach (Helpers::childsubcategories($subcategorie->id) as $childsubcategorie)
                                                            @endforeach
                                                            <li> <a class="dropdown-item"
                                                                    href="#">{{ $childsubcategorie->nom }}</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                @else
                                                    <li> <a class="dropdown-item"
                                                            href="#">{{ $subcategorie->subcategorie_nom }}</a>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </li>
                                @else
                                    <li> <a class="dropdown-item"
                                            href="{{ route('frontend.show.categorie', ['categorie' => $categorie->id, 'slug' => $categorie->categorie_slug]) }}">{{ $categorie->categorie_nom }}</a>
                                    </li>
                                @endif
                            @endforeach

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0"
                                    href="{{ route('livres.categorie') }}">Tous les catégories</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Nav category menu END -->


                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Cours &
                            Exercices</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="index-2.html">Anglais</a></li>
                            <li> <a class="dropdown-item" href="index-8.html">Chimie</a></li>
                            <li> <a class="dropdown-item" href="index-3.html">Français</a></li>
                            <li> <a class="dropdown-item" href="index-4.html">Géographie</a></li>
                            <li> <a class="dropdown-item" href="index-5.html">Histoire</a></li>
                            <li> <a class="dropdown-item" href="index-6.html">Mathématiques</a></li>
                            <li> <a class="dropdown-item" href="index-9.html">Philosophie</a></li>
                            <li> <a class="dropdown-item" href="index-7.html">Physiques</a></li>
                            <li> <a class="dropdown-item" href="index-10.html">SVT</a></li>
                            <hr>
                            <li> <a class="dropdown-item" href="/Université">Université</a></li>
                        </ul>
                    </li>

                    <!-- Nav item 2 Pages -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('orientation.index') }}" id="pagesMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Orientation</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <!-- Dropdown submenu -->

                            <li> <a class="dropdown-item" href="{{ route('orientation.index') }}">Orientation</a></li>
                            <li> <a class="dropdown-item" href="{{ route('orientation.bepc') }}">Niveau BEPC</a></li>
                            <li> <a class="dropdown-item" href="{{ route('orientation.bac') }}">Niveau BAC</a></li>
                            <li> <a class="dropdown-item" href="{{ route('orientation.licence') }}">Niveau
                                    Licence</a></li>
                        </ul>
                    </li> --}}

                    <li class="nav-item"><a class="nav-link" href="{{ route('orientation.index') }}">Orientation</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="docs/alerts.html">Forum</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Quiz</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item active" href="index-2.html">Anglais</a></li>
                            <li> <a class="dropdown-item" href="index-8.html">Chimie</a></li>
                            <li> <a class="dropdown-item" href="index-3.html">Français</a></li>
                            <li> <a class="dropdown-item" href="index-4.html">Géographie</a></li>
                            <li> <a class="dropdown-item" href="index-5.html">Histoire</a></li>
                            <li> <a class="dropdown-item" href="index-6.html">Mathématiques</a></li>
                            <li> <a class="dropdown-item" href="index-9.html">Philosophie</a></li>
                            <li> <a class="dropdown-item" href="index-7.html">Physiques</a></li>
                            <li> <a class="dropdown-item" href="index-10.html">SVT</a></li>
                            <hr>
                            <li> <a class="dropdown-item" href="/Université">Université</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Chercher"
                                aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile START -->
            @if (Auth::user())
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle"
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn4.iconfinder.com%2Fdata%2Ficons%2Fprofessions-1-2%2F151%2F8-512.png&f=1&nofb=1&ipt=c10c9182947151bb6854d613b5b7e50e4438429f213bce03777c255308590a07&ipo=images"
                            alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow"
                                        src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn4.iconfinder.com%2Fdata%2Ficons%2Fprofessions-1-2%2F151%2F8-512.png&f=1&nofb=1&ipt=c10c9182947151bb6854d613b5b7e50e4438429f213bce03777c255308590a07&ipo=images"
                                        alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">{{ Auth::user()->name }}</a>
                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        @if (!Auth::user())
                            <li> <a class="dropdown-item" href="{{ route('login') }}">Connexion</a></li>
                            <li> <a class="dropdown-item" href="{{ route('register') }}">Inscription</a></li>
                            <li> <a class="dropdown-item" href="forgot-password.html">Réinitialisé mon mot de
                                    passe</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                        class="fas fa-user-cog fa-fw me-1"></i>Profile</a>
                            </li>


                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                    this.closest('form').submit();"><i
                                            class="bi bi-power fa-fw me-2"></i>{{ __('Déconnexion') }}</a></li>
                            </form>
                        @endif

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Links -->

                        <!-- Dark mode options START -->
                        <li>
                            <div
                                class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                        <use href="#"></use>
                                    </svg> Light
                                </button>
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                        <use href="#"></use>
                                    </svg> Dark
                                </button>
                                <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                        <use href="#"></use>
                                    </svg> Auto
                                </button>
                            </div>
                        </li>

                        <!-- Dark mode options END-->
                    </ul>
                </div>
            @endif
            <!-- Profile START -->
        </div>
    </nav>
    <!-- Nav END -->
</header>
<!-- Header END -->
