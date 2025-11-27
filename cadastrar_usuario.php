<?php
require 'conexao.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    if ($_POST['senha'] !== $_POST['confirmar_senha']) {
        echo "As senhas não conferem!";
        exit;
    }

    // Insere no banco
        $sql = "INSERT INTO `usuarios` (`cpf`, `nome`, `telefone`, `email`, `senha`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`)
        VALUES ('$cpf', '$nome', '$telefone', '$email', '$senha', '$cep', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado')";

    $resultado = mysqli_query($conn, $sql);
    
    if($resultado){
        echo "Usuário cadastrado com sucesso!";
        header('Location: login.php');
    }
    else{
        echo "Erro ao cadastrar:".mysqli_error($conn);
    }
?>