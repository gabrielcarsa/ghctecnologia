<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHC Tecnologia - Desenvolvimento de Apps e Sistemas</title>

    <meta name="description"
        content="Crie aplicativos mobile e sistemas sob medida para sua empresa pelo melhor preço e com a melhor qualidade. A GHC Tecnologia oferece soluções completas de software para impulsionar o seu negócio. Entre em contato e agende uma reunião!">
    <meta name="keywords"
        content="desenvolvimento de aplicativos mobile, desenvolvimento de sistemas, flutter, app, sistema">
    <meta name="author" content="GHC Tecnologia">
    <meta name="robots" content="index, follow">

    <!--CSS-->
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!--NAVBAR-->
    <x-navbar />

    <!--CONTEÚDO-->
    <main>
        <!--PROPOSTA INICIAL-->
        <div class="bgDark">
            <div class="container text-center vh-100 d-flex justify-content-center align-items-center">
                <div class="row align-items-start colPropostaInicial">
                    <div class="col-sm align-self-center">
                        <h1 class="titulo-bg-dark">Desenvolvimento de <span
                                style="color: #89ffdb; font-weight: 800;">aplicativos
                                mobile</span>
                            e sistemas</h1>
                        <p>Amplie seu negócio com nossas soluções de software.</p>
                        <a href="/contato">Agende uma reunião</a>
                    </div>
                    <div class="col">
                        <img src="images/imagem-inicial.png" alt="Multiplataformas">
                    </div>
                </div>
            </div>
        </div>

        <!--FEITOS-->
        <div class="container">
            <div class="row align-items-start colFeitos">
                <div class="col align-self-center">
                    <h3>Nossos Serviços</h3>
                </div>
                <div class="col align-self-center">
                    <p>Veja o que fazemos e como fazemos</p>
                    <p>
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        De Campo Grande, MS
                    </p>
                </div>
            </div>
        </div>

        <!--SERVIÇOS-->
        <div class="container">
            <div class="row colCardServico ">
                <div class="col d-flex justify-content-center">
                    <div class="card-servicos">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                smartphone
                            </span>
                            <h5 class="card-title">Aplicativo mobile</h5>
                            <h6>IOS, Android</h6>
                            <p class="card-text">Solução personalizada</p>
                            <p class="card-text">Mais visibilidade para seu negócio</p>
                            <p class="card-text">UI/UX</p>
                            <p class="card-text">Design inovador e prático</p>
                            <p class="card-text">*Login com Google, Apple e email</p>
                            <p class="card-text">*Meios de pagamento no app</p>
                            <div class="card-link">
                                <a href="/orcamento#app-orcamento" class="card-link">Saiba mais</a>
                            </div>
                            <p class="card-text-observacao">Acompanhe todo processo de desenvolvimento.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card-servicos">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                desktop_windows
                            </span>
                            <h5 class="card-title">Sistema</h5>
                            <h6>Web</h6>
                            <p class="card-text">Solução personalizada</p>
                            <p class="card-text">Controle e gestão</p>
                            <p class="card-text">Mais eficiência e segurança nas operações</p>
                            <p class="card-text">Dashboard e relatórios</p>
                            <p class="card-text">Controle de usuários</p>
                            <p class="card-text">Emissão de documentos</p>
                            <div class="card-link">
                                <a href="/orcamento#sistema-orcamento" class="card-link">Saiba mais</a>
                            </div>
                            <p class="card-text-observacao">Acompanhe todo processo de desenvolvimento.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card-servicos">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                web
                            </span>
                            <h5 class="card-title">Site</h5>
                            <h6>Web</h6>
                            <p class="card-text">Solução personalizada</p>
                            <p class="card-text">Apresentação do seu negócio</p>
                            <p class="card-text">Páginas de vendas.</p>
                            <p class="card-text">Responsivo para todos tipos de telas</p>
                            <p class="card-text">Seu site nas primeiras pesquisas</p>
                            <div class="card-link">
                                <a href="/orcamento#site-orcamento" class="card-link">Saiba mais</a>
                            </div>
                            <p class="card-text-observacao">Acompanhe todo processo de desenvolvimento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SOBRE-->
        <div class="container">
            <div class="row align-items-start colSobre">
                <div class="col-sm align-self-center">
                    <h4><span>+</span> 4 anos</h4>
                    <p>de experiência no ramo</p>
                </div>
                <div class="col-sm align-self-center">
                    <h4><span>+</span> 22 projetos</h4>
                    <p>de aplicativos e sistemas realizados</p>
                </div>
                <div class="col-sm align-self-center">
                    <h4><span>+</span> 5 mil</h4>
                    <p>horas de desenvolvimento</p>
                </div>
                <div class="col-sm align-self-center">
                    <h4><span>+</span> R$ 120 mil</h4>
                    <p>reais investidos em projetos de desenvolvimento</p>
                </div>
            </div>
        </div>

        <!--FEITOS-->
        <div class="container">
            <div class="row align-items-start colFeitos">
                <div class="col align-self-center">
                    <h3>Últimos Projetos</h3>
                </div>
                <div class="col align-self-center">
                    <p>Veja algumas das últimas soluções</p>
                    <p>Feitas anteriormente</p>
                </div>
            </div>
        </div>

        <!--PORTFÓLIO TELA GRANDES-->
        <div class="container portfolioTelaGrande">
            <div class="row align-items-start colPortfolio">
                <div class="col-sm-4 col align-self-center">
                    <h3>Durizi Investimento</h3>
                    <p class="text-secondary text-end">Aplicativo para clientes do Durizi Investimentos acompanhar
                        seus
                        investimentos e realizar funções
                        de saque e aportes e entre outras funcionalidades. Conta também com um sistema interno para
                        gestão.</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn-acao" href="">Ver mais</a>
                    </div>
                </div>
                <div class="col-sm-8 align-self-center">
                    <img src="images/durizi-investimentos.png" alt="Durizi Investimentos">
                </div>
            </div>
            <div class="row align-items-start colPortfolio">
                <div class="col-sm-8 align-self-center d-flex justify-content-end">
                    <img src="images/smart-iptu-app.png" alt="SmartIPTU App">
                </div>
                <div class="col-4 col align-self-center">
                    <h3 class="text-start">SmartIPTU - App</h3>
                    <p class="text-secondary text-start">Aplicativo do Sistema SmartIPTU para controle financeiro e
                        de
                        IPTUs. Pelo app é possível ver o calendário financeiro, contas a pagar e receber,
                        movimentações
                        e IPTUs.</p>
                    <div class="d-flex justify-content-start">
                        <a class="btn-acao" href="">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!--PORTFÓLIO TELAS MENORES-->
        <div class="container portfolioTelaPequena">
            <div class="row align-items-start colPortfolio">
                <div class="col-sm-4 col align-self-center">
                    <h3 class="text-start">Durizi Investimento</h3>
                    <p class="text-secondary text-start">Aplicativo para clientes do Durizi Investimentos acompanhar
                        seus
                        investimentos e realizar funções
                        de saque e aportes e entre outras funcionalidades. Conta também com um sistema interno para
                        gestão.</p>
                </div>
                <div class="align-self-center">
                    <img src="images/durizi-investimentos.png" alt="Durizi Investimentos">
                </div>
            </div>
            <div class="row align-items-start colPortfolio">
                <div class="align-self-center">
                    <h3 class="text-start">SmartIPTU - App</h3>
                    <p class="text-secondary text-start">Aplicativo do Sistema SmartIPTU para controle financeiro e
                        de
                        IPTUs. Pelo app é possível ver o calendário financeiro, contas a pagar e receber,
                        movimentações
                        e IPTUs.</p>
                </div>
                <div class="align-self-center">
                    <img src="images/smart-iptu-app.png" alt="SmartIPTU App">
                </div>
            </div>
        </div>

        <!--ORÇAMENTO PRÉVIA-->
        <div class="container">
            <div class="row align-items-start colFeitos">
                <div class="col align-self-center">
                    <h3>Nossos Contratos</h3>
                </div>
                <div class="col align-self-center">
                    <p>Veja nossos contratos mensais</p>
                    <p>Pague mensalmente pelo desenvolvimento</p>
                </div>
            </div>
        </div>
        <!--PLANOS-->
        <div class="container" id="app-orcamento">
            <div class="row">
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">
                                <span style="color: #47967e; font-weight: 800;">Aplicativo </span>
                                - contrato mensal
                            </h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$350,00 <small class="text-muted">/mês</small>
                            </h5>
                            <div class="mt-4">
                                <a href="#orcamento" class="btn-acao d-block m-2">Ver orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">
                                <span style="color: #47967e; font-weight: 800;">Sistemas </span>
                                - contrato mensal
                            </h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$497,00 <small class="text-muted">/mês</small>
                            </h5>
                            <div class="mt-4">
                                <a href="#orcamento" class="btn-acao d-block m-2">Ver orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">
                                <span style="color: #47967e; font-weight: 800;">Sites </span>
                                - contrato mensal
                            </h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$97,00 <small class="text-muted">/mês</small>
                            </h5>
                            <div class="mt-4">
                                <a href="#orcamento" class="btn-acao d-block m-2">Ver orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VANTAGENS-->
        <div class="container">
            <div class="row colVantagens">
                <div class="col-md d-flex justify-content-center">
                    <div class="card-vantagens">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                code
                            </span>
                            <h5 class="card-title">Soluções personalizadas</h5>
                            <p>Desenvolvemos apps e sistemas sob medida para atender às suas necessidades
                                específicas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <div class="card-vantagens">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                verified
                            </span>
                            <h5 class="card-title">Experiência comprovada</h5>
                            <p>Contamos com uma equipe experiente e qualificada, com mais de 4 anos de
                                experiência no desenvolvimento de software.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <div class="card-vantagens">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                payments
                            </span>
                            <h5 class="card-title">Preço competitivo</h5>
                            <p>Oferecemos orçamentos personalizados que cabem no seu bolso.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <div class="card-vantagens">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                support_agent
                            </span>
                            <h5 class="card-title">Suporte completo</h5>
                            <p> Damos suporte completo aos nossos clientes, desde a implantação até o uso do
                                software.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--CONTATO-->
        <div class="container contato">
            <div class="row align-items-start">
                <div class="col align-self-center p-3">
                    <h3>Vamos conversar?</h3>
                    <p>Precisa de um aplicativo ou sistema sob medida para impulsionar seu negócio? A GHC Tecnologia
                        é a
                        parceira ideal para você! Oferecemos soluções completas de software para atender às suas
                        necessidades específicas, desde o desenvolvimento até a implantação e suporte.</p>

                </div>
                <div class="col-sm align-self-center">
                    <form class="row g-3" action="/enviar-email" method="POST">
                        @csrf
                        @method('POST')
                        <div class="">
                            <label for="inputNome" class="form-label">Seu nome</label>
                            <input type="text" required class="form-control" name="nome" id="inputNome"
                                placeholder="Nome Completo">
                        </div>
                        <div class="">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" required class="form-control" name="email" id="inputEmail"
                                placeholder="exemplo@exemplo.com">
                        </div>
                        <div class="">
                            <label for="inputCelular" class="form-label">Celular</label>
                            <input type="tel" required class="form-control" name="celular" id="inputCelular"
                                placeholder="(DDD) 99999-9999">
                        </div>
                        <div class="">
                            <label class="form-label">Mensagem</label>
                            <textarea class="form-control" name="mensagem"
                                placeholder="Escreva o que você procura..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-contato">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--TECNOLOGIAS-->
        <div class="tecnologias">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/file_type_flutter_icon_130599.png" class=""
                                    alt="Desenvolvimento de aplicativo com Flutter">
                            </div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/laravel_logo_icon_170314.png" class=""
                                    alt="Desenvolvimento de sistema com Laravel">
                            </div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/mysql_original_wordmark_logo_icon_146417.png" class="" alt="MySQL">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/file_type_php_icon_130266.png" class=""
                                    alt="Desenvolvimento de sistema com PHP">
                            </div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/java_original_wordmark_logo_icon_146459.png" class=""
                                    alt="Desenvolvimento de sistema com JAVA">
                            </div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/postgresql_original_wordmark_logo_icon_146392.png" class=""
                                    alt="PostgreSQL">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/github_original_wordmark_logo_icon_146506.png" class=""
                                    alt="Controle de versão com Git">
                            </div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/jquery_original_wordmark_logo_icon_146447.png" class="" alt="JQuery">
                            </div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <img src="images/firebase_logo_icon_168209.png" class="" alt="Firebase">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

    </main>

    <!--FOOTER-->
    <x-footer />

    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>