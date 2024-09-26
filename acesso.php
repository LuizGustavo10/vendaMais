<?php
    //importando arquivo de conexão com banco
    include 'conexao.php';

    //recebendo dados da tela de login(frontend)
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];

    // echo "Olá seu cpf: $cpf e senha: $senha";
    //selecione o usuario one o cpf="cpf do login" e senha="senha do login"
    $sql = "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";

    //executa código SQL com a permissão da conexão
    $resultado = mysqli_query($conexao, $sql);

    //cada valor é associado ao nome da coluna no banco
    $colunas = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado) > 0 ){
        echo "Login efetuado com sucesso!";
    }else{
        echo "Errooouu! não encontrado!";
    }

?>