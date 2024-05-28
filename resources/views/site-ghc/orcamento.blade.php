<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHC Tecnologia | Orçamentos e Contratos</title>

    <meta name="description"
        content="Faça um orçamento para desenvolvimento de um aplicativo mobile, sistema de software ou um site! Pague a partir de R$ 300/mês pelo seu app mobile.">
    <meta name="keywords"
        content="desenvolvimento de aplicativos mobile, desenvolvimento de sistemas, desenvolvimento de sites, preço, valor, orçamento">
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

        <!--CAPA-->
        <div class="container-fluid d-flex justify-content-center orcamento-capa" id="orcamento">
            <div class="row w-100 ">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="text-center titulo-bg-dark mb-5">
                            Orçamento para Desenvolvimento de <span style="color: #89ffdb; font-weight: 800;">
                                Apps, Sistemas e Sites
                            </span>
                        </h1>
                        <p class="text-center">Pague a partir <span style="color: #89ffdb; font-weight: 800;">R$
                                300/mês</span> no
                            desenvolvimento do seu app mobile.</p>
                        <p class="text-center">Pague a partir <span style="color: #89ffdb; font-weight: 800;">R$
                                500/mês</span> no
                            desenvolvimento do seu sistema personalizado.</p>
                    </div>
                    <div class="col text-light d-flex justify-content-center align-items-center">
                        <div class="card-glass">
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
            </div>
        </div>

        <!--TITULO APPS PLANOS-->
        <div class="container">
            <div class="row align-items-start colFeitos">
                <div class="col col align-self-center">
                    <h3>Orçamento de aplicativo mobile</h3>
                </div>
                <div class="col align-self-center">
                    <p>Maneiras de como você pode fazer</p>
                    <p>a contratação dos nossos serviços</p>
                </div>
            </div>
        </div>

        <!--APPS PLANOS-->
        <div class="container" id="app-orcamento">
            <div class="row">
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Contrato mensal</h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$350,00 <small class="text-muted">/mês</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="m-2">Desenvolvimento completo</li>
                                <li class="m-2">Suporte e manuntenção vitalício*</li>
                                <li class="m-2">Personalizado do seu jeito</li>
                                <li class="m-2">
                                    Reunião cada 15 dias do processo de<br>desenvolvimento via chamada de vídeo
                                </li>
                                <li class="m-2">
                                    Sem acesso ao código-fonte ou<br>arquivos ao final do desenvolvimento.
                                </li>
                                <li class="m-2">Custo de publicação do app a parte</li>
                            </ul>
                            <div class="">
                                <a href="#orcamento" class="btn-acao d-block m-2">Fale conosco</a>
                                <a href="" class="btn-acao-secondary d-block m-2">Saiba mais sobre</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Contrato fechado</h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$1.600,00
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="m-2">Desenvolvimento completo</li>
                                <li class="m-2">9 meses de suporte e manuntenção</li>
                                <li class="m-2">Personalizado do seu jeito</li>
                                <li class="m-2">
                                    Reunião semanal do processo de<br>desenvolvimento via chamada de vídeo
                                </li>
                                <li class="m-2">
                                    Acesso ao código-fonte e<br>arquivos ao final do desenvolvimento
                                </li>
                                <li class="m-2">Custo de publicação do app incluso</li>
                            </ul>
                            <div class="">
                                <a href="#orcamento" class="btn-acao d-block m-2">Fale conosco</a>
                                <a href="" class="btn-acao-secondary d-block m-2">Saiba mais sobre</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--TITULO SISTEMAS PLANOS-->
        <div class="container">
            <div class="row align-items-start colFeitos">
                <div class="col col align-self-center">
                    <h3>Orçamento de Sistemas</h3>
                </div>
                <div class="col align-self-center">
                    <p>Maneiras de como você pode fazer</p>
                    <p>a contratação dos nossos serviços</p>
                </div>
            </div>
        </div>
        <!--SISTEMAS PLANOS-->
        <div class="container" id="sistema-orcamento">
            <div class="row">
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Contrato mensal</h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$497,00 <small class="text-muted">/mês</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="m-2">Desenvolvimento completo</li>
                                <li class="m-2">Suporte e manuntenção vitalício*</li>
                                <li class="m-2">Personalizado do seu jeito</li>
                                <li class="m-2">
                                    Reunião cada 15 dias do processo de<br>desenvolvimento via chamada de vídeo
                                </li>
                                <li class="m-2">
                                    Sem acesso ao código-fonte ou<br>arquivos ao final do desenvolvimento.
                                </li>
                                <li class="m-2">Dominío e hospedagem inclusos</li>
                            </ul>
                            <div class="">
                                <a href="#orcamento" class="btn-acao d-block m-2">Fale conosco</a>
                                <a href="" class="btn-acao-secondary d-block m-2">Saiba mais sobre</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Contrato fechado</h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$3.400,00
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="m-2">Desenvolvimento completo</li>
                                <li class="m-2">9 meses de suporte e manuntenção</li>
                                <li class="m-2">Personalizado do seu jeito</li>
                                <li class="m-2">
                                    Reunião semanal do processo de<br>desenvolvimento via chamada de vídeo
                                </li>
                                <li class="m-2">
                                    Acesso ao código-fonte e<br>arquivos ao final do desenvolvimento
                                </li>
                                <li class="m-2">Dominío e hospedagem inclusos</li>
                            </ul>
                            <div class="">
                                <a href="#orcamento" class="btn-acao d-block m-2">Fale conosco</a>
                                <a href="" class="btn-acao-secondary d-block m-2">Saiba mais sobre</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--TITULO SITES PLANOS-->
        <div class="container">
            <div class="row align-items-start colFeitos">
                <div class="col col align-self-center">
                    <h3>Orçamento de Sites</h3>
                </div>
                <div class="col align-self-center">
                    <p>Maneiras de como você pode fazer</p>
                    <p>a contratação dos nossos serviços</p>
                </div>
            </div>
        </div>
        <!--SITES PLANOS-->
        <div class="container" id="site-orcamento">
            <div class="row">
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Contrato mensal</h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$97,00 <small class="text-muted">/mês</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="m-2">Desenvolvimento completo</li>
                                <li class="m-2">Suporte e hospedagem vitalício*</li>
                                <li class="m-2">Personalizado do seu jeito</li>
                                <li class="m-2">
                                    Sem acesso ao código-fonte ou<br>arquivos ao final do desenvolvimento.
                                </li>
                            </ul>
                            <div class="">
                                <a href="#orcamento" class="btn-acao d-block m-2">Fale conosco</a>
                                <a href="" class="btn-acao-secondary d-block m-2">Saiba mais sobre</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Contrato fechado</h4>
                        </div>
                        <div class="card-body">
                            <p>a partir de</p>
                            <h5 class="card-title pricing-card-title fs-1">
                                R$680
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="m-2">Desenvolvimento completo</li>
                                <li class="m-2">1 ano de suporte e hospedagem</li>
                                <li class="m-2">Personalizado do seu jeito</li>
                                <li class="m-2">
                                    Acesso ao código-fonte e<br>arquivos ao final do desenvolvimento
                                </li>
                            </ul>
                            <div class="">
                                <a href="#orcamento" class="btn-acao d-block m-2">Fale conosco</a>
                                <a href="" class="btn-acao-secondary d-block m-2">Saiba mais sobre</a>
                            </div>
                        </div>
                    </div>
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