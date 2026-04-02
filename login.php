<?php include "php/init.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Login</title>
    <link rel="shortcut icon" href="img/white_logo.png" type="png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/index.js" defer></script>
</head>
<body>
    <?php require_once "php/partials/header.php"; ?>
    <main>
        <form action="php/conn.php" method="POST">
            <h1>Login</h1>
            <div class="input_group">
                <input type="email" class="input" name="email" id="email" placeholder=" " required>
                <label for="email" class="user_label">E-mail</label>
            </div>
            <div class="input_group">
                <input type="password" class="input" name="password" id="password" placeholder=" " required>
                <label for="password" class="user_label">Senha</label>
            </div>
            <input type="submit" class="submit">
            <p>Não tem uma conta? <a href="register.php">Cadastre-se aqui</a></p>
        </form>
    </main>
    <?php require_once "php/partials/footer.php"; ?>
</body>
</html>