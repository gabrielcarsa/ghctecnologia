<!--NAVBAR-->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="images/logo.png" alt="GHC Tecnologia" width="150px"></a>
        <button class="navbar-toggler text-light bg-body" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item pe-3">
                    <a class="nav-link active text-light" aria-current="page" href="{{ route('orcamento') }}">Orçamento</a>
                </li>
                <li class="nav-item dropdown-center">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">Desenvolvimento de aplicativo mobile</a></li>
                        <li><a class="dropdown-item" href="#">Desenvolvimento de sistema</a></li>
                    </ul>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-light" href="#">Cases</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-light" href="#">Contato</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link text-light" href="#">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>