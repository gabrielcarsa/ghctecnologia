<!--NAVBAR-->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="GHC Tecnologia" width="150px"></a>
        <button class="navbar-toggler text-light bg-body" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item pe-3">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active-navlink' : 'text-light' }}"
                        aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link {{ Route::currentRouteName() == 'orcamento' ? 'active-navlink' : 'text-light' }}"
                        aria-current="page" href="{{ route('orcamento') }}">Orçamentos e contratos</a>
                </li>
                <li class="nav-item dropdown-center">
                    <a class="nav-link dropdown-toggle {{ (Route::currentRouteName() == 'aplicativo-mobile' || Route::currentRouteName() == 'sistemas' || Route::currentRouteName() == 'sites') ? 'active-navlink' : 'text-light' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="/aplicativo-mobile">Desenvolvimento de aplicativos mobile</a>
                        </li>
                        <li><a class="dropdown-item" href="/sistemas">Desenvolvimento de sistemas</a></li>
                        <li><a class="dropdown-item" href="/sites">Desenvolvimento de sites</a></li>
                    </ul>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-light" href="#">Cases</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link {{ Route::currentRouteName() == 'contato' ? 'active-navlink' : 'text-light' }}"
                        aria-current="page" href="{{ route('contato') }}">Contato</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-light" href="#">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>