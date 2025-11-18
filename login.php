<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pet Shop</title>
</head>
<body>
    <h1>Sistema Pet Shop - LOGIN</h1>
    <form action="" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" require>
        </div>
        <br>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" require>
        </div>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>