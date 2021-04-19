<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/loginCadastro.css">
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/sjcl.js"></script>
    <script src="../js/loginCadastro.js"></script>
    <script src="../js/requisicaoCadastro.js"></script>

    <title>Login - MadMonkey</title>
</head>
<body>

    <div class="pagina pagina-login">

        <div class="cadastrologin-link absolute-centralizer">

            <div class="cadastrologin-form">

                <div class="cadastrologin-form-title-div">

                    <p class="cadastrologin-form-title-p absolute-centralizer">SIGN IN</p>

                </div>

                <div class="cadastrologin-form-content">

                    <form method="POST" action='requisicaoLogin.php' class="cadastrologin-form-content-centralizer absolute-centralizer">
                        <input type="text" class="cadastrologin-form-input" placeholder="Login" name="email-login">
                        <input type="password" class="cadastrologin-form-input" placeholder="Senha" name="password-login">
                        <a href="#" class="login-form-esqueceusenha">Esqueci minha senha</a>
                        <button id="bAcessar" class="cadastrologin-form-button">LOGIN</button>
                    </form>

                </div>

            </div>

            <div class="cadastrologin-link-image">

                <img src="../img/logo.png" alt="madmonkeylogo">
                <p class="cadastrologin-link-image-p">Ainda não tem uma conta?</p>
                <button class="cadastrologin-link-image-button">SIGN UP</button>

            </div>

        </div>

    </div>

    <div class="pagina pagina-cadastro">

        <div class="cadastrologin-link absolute-centralizer">

            <div class="cadastrologin-form">

                <div class="cadastrologin-form-title-div">

                    <p class="cadastrologin-form-title-p absolute-centralizer">SIGN UP</p>

                </div>

                <div class="cadastrologin-form-content">

                    <form id="form-cadastro" class="cadastrologin-form-content-centralizer absolute-centralizer">
                        <input type="text" class="cadastrologin-form-input" placeholder="Digite seu Nome" name="name-cadastro">
                        <input type="text" class="cadastrologin-form-input" placeholder="Digite um e-mail" name="email-cadastro">
                        <input type="password" id="senha" class="cadastrologin-form-input" placeholder="Digite uma senha">
                        <input type="password" class="cadastrologin-form-input" placeholder="Confirme sua senha">
                        <input type="hidden" name="senha_hash" id="senha_hash" />
                        <button id="bCadastrar" class="cadastrologin-form-button" >SIGN UP</button>
                    </form>

                </div>

            </div>

            <div class="cadastrologin-link-image">

                <img src="../img/logo.png" alt="madmonkeylogo">
                <p class="cadastrologin-link-image-p">Já possui uma conta?</p>
                <button class="cadastrologin-link-image-button">SIGN IN</button>

            </div>

        </div>

    </div>

</body>
</html>
