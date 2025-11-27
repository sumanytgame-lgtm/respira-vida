<?php
    session_start();

    if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
        header('Location: index.html');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Menu</title>
</head>
<body>
    <h1>Você está na página de menu</h1>
    <p>Usuário logado: <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>