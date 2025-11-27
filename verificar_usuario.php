<?php
    session_start();
    require 'conexao.php';

// Processa login
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $sql = "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senha'";

  $resultado = mysqli_query($conn, $sql);

  //se o $resultado tiver o valor de 1 linha
  if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['usuario'] = $email;
    header('Location: menu.php');
    exit();
  } else {
    unset($_SESSION['usuario']);
    header('Location: login.php');
  }
?>