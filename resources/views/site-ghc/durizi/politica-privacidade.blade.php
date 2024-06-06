<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durizi Investimentos | Política de Privacidade</title>

    <meta name="description" content="Política de privacidade da Durizi Investimentos">
    <meta name="keywords" content="">
    <meta name="author" content="GHC Tecnologia">
    <meta name="robots" content="noindex, nofollow">

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
        <div class="container mt-5 pt-5">
            <h1 class="text-center">Política de Privacidade</h1>
            <p>Data de Vigência: 01/01/2024</p>

            <h2>Introdução</h2>
            <p>Bem-vindo à nossa aplicação! Esta Política de Privacidade explica como coletamos, usamos, divulgamos e
                protegemos suas informações quando você usa nosso aplicativo. Nós levamos sua privacidade a sério e estamos comprometidos em
                proteger suas informações pessoais.</p>

            <h2>Coleta de Informações</h2>
            <p>Nosso aplicativo pode coletar diferentes tipos de informações, incluindo:</p>
            <ul>
                <li><strong>Informações Pessoais:</strong>
                    <ul>
                        <li>Dados de contato (como endereço de e-mail, número de telefone).</li>
                        <li>Informações do perfil (como nome de usuário e foto de perfil).</li>
                    </ul>
                </li>
                <li><strong>Conteúdo do Usuário:</strong>
                    <ul>
                        <li>Fotos, vídeos, documentos e outros arquivos que você envia ou armazena no aplicativo.</li>
                    </ul>
                </li>
                <li><strong>Dados de Uso:</strong>
                    <ul>
                        <li>Informações sobre como você interage com o aplicativo, incluindo dados de log e métricas de
                            desempenho.</li>
                    </ul>
                </li>
            </ul>

            <h2>Uso das Informações</h2>
            <p>Utilizamos as informações coletadas para:</p>
            <ul>
                <li><strong>Fornecer e Gerenciar os Serviços:</strong> Armazenar e recuperar arquivos, sincronizar dados
                    em tempo real, gerenciar sua conta e fornecer suporte técnico.</li>
                <li><strong>Melhorar a Experiência do Usuário:</strong> Analisar o uso do aplicativo para identificar
                    áreas de melhoria e desenvolver novas funcionalidades.</li>
                <li><strong>Segurança:</strong> Identificar e corrigir falhas e problemas de segurança, garantir a
                    integridade dos dados e proteger contra fraudes.</li>
            </ul>

            <h2>Compartilhamento de Informações</h2>
            <p>Podemos compartilhar suas informações com:</p>
            <ul>
                <li><strong>Firebase:</strong> Utilizamos Firebase Storage para armazenar seus arquivos e Realtime
                    Database para sincronizar seus dados em tempo real. O Firebase pode acessar suas informações
                    conforme necessário para fornecer esses serviços.</li>
                <li><strong>Parceiros Terceirizados:</strong> Quando necessário, podemos compartilhar informações com
                    fornecedores terceirizados que nos ajudam a fornecer e melhorar nossos serviços, como serviços de
                    análise e monitoramento.</li>
            </ul>

            <h2>Segurança das Informações</h2>
            <p>Implementamos medidas de segurança adequadas para proteger suas informações contra acesso não autorizado,
                alteração, divulgação ou destruição. Isso inclui o uso de tecnologias de criptografia e práticas de
                segurança rigorosas.</p>

            <h2>Retenção de Informações</h2>
            <p>Armazenamos suas informações apenas pelo tempo necessário para cumprir os propósitos descritos nesta
                Política de Privacidade, a menos que um período de retenção mais longo seja exigido ou permitido por
                lei.</p>

            <h2>Seus Direitos</h2>
            <p>Você tem o direito de:</p>
            <ul>
                <li>Acessar e revisar suas informações pessoais.</li>
                <li>Solicitar a correção de quaisquer informações incorretas ou desatualizadas.</li>
                <li>Solicitar a exclusão de suas informações pessoais, sujeitas a certas exceções.</li>
                <li>Optar por não receber comunicações de marketing.</li>
            </ul>

            <h2>Alterações a Esta Política de Privacidade</h2>
            <p>Podemos atualizar esta Política de Privacidade periodicamente para refletir mudanças em nossas práticas
                ou em leis aplicáveis. Notificaremos você sobre quaisquer alterações significativas publicando a nova
                Política de Privacidade em nosso aplicativo. Recomendamos que você revise esta Política de Privacidade
                regularmente para se manter informado sobre como protegemos suas informações.</p>

            <h2>Contato</h2>
            <p>Se você tiver alguma dúvida ou preocupação sobre esta Política de Privacidade ou sobre nossas práticas de
                privacidade, entre em contato conosco através do seguinte endereço de e-mail: <a
                    href="mailto:durizi12@icloud.com ">durizi12@icloud.com</a>.</p>

            <h2>Consentimento</h2>
            <p>Ao usar nosso aplicativo, você consente com a coleta, uso e compartilhamento de suas informações conforme
                descrito nesta Política de Privacidade.</p>
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