<?php
// Dados de conexão
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'pwbd';

// Tentar conectar
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

?>
