<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHC Tecnologia | Contato</title>

    <meta name="description" content="Fale conosco, em até 1 dia retornaremos o contato.">
    <meta name="keywords" content="Contato GHC Tecnologia">
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
        <div class="container-fluid d-flex justify-content-center contato-capa">
            <div class="row w-100 ">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="text-center titulo-bg-dark">
                            <span style="color: #89ffdb; font-weight: 800;">Fale conosco: </span>
                            estamos a sua disposição.
                        </h1>
                        <p class="text-light px-5">
                            Vamos juntos desenvolver o seu projeto e melhorar a performance digital do seu negócio?
                            Entre agora em contato!
                        </p>
                        <div class="d-flex justify-content-center">
                            <img src="images/contato.svg" alt="Contato GHC Tecnologia" class="p-5 w-75">

                        </div>
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

    </main>

    <!--FOOTER-->
    <x-footer />

    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>