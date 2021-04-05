<?php 

    include('conexao.php');
    include('tratarErrosFinalizacao.php');

    $plano = validacaoPlano($_POST['plano']);
    $cpf = validacaoCPF($_POST['cpf']);
    $cnpj = validacaoCNPJ($_POST['cnpj']);
    $dataNascimento = validacaoDataNascimento($_POST['datanascimento']);
    $nome = validacaoNome($_POST['nome']);
    $numeroCartao = validacaoNumero($_POST['numerocartao'], 19);
    $dataCartao = validacaoDataCartao($_POST['datacartao']);
    $codigoCartao = validacaoPlano($_POST['codigocartao'], 4);
    $tipoCartao = validacaoTipoCartao($_POST['tipocartao']);

    session_start();

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query = "UPDATE usuarios SET
    plano = '$plano',
    cpf = '$cpf',
    cnpj = '$cnpj',
    born_date = '$dataNascimento',
    nome_titular = '$nome',
    card_number = '$numeroCartao',
    expiration_date = '$dataCartao',
    security_code = '$codigoCartao',
    tipo_cartao = '$tipoCartao' 
    WHERE email = '$email' AND password = '$password';
    UPDATE usuarios SET active = 1 WHERE email = '$email' AND password = '$password'";

    mysqli_multi_query($conexao, $query);

    mysqli_close($conexao);

    header('Location: /experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/menu.html');
    exit();

?>
