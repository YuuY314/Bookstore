<?php include "php/data.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Nossa Estante</title>
    <link rel="shortcut icon" href="img/white_logo.png" type="png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shelf.css">
    <script src="js/shelf.js" defer></script>
</head>
<body>
    <?php require "php/partials/header.php"; ?>
    <main>
        <section class="shelf_navbar">
            <div class="shelf_navbar_title">
                <h1>Nossa Estante</h1>
                <p>Navegue pelos nossos mais variados gêneros de livros</p>
            </div>
            <div class="shelf_navbar_container">
                <div class="input_group">
                    <input type="text" name="search" id="search" class="input" placeholder=" ">
                    <label for="search" class="user_label">Pesquisa</label>
                </div>
                <button class="filter_buttons focus">Tudo</button>
                <button class="filter_buttons">Clássico</button>
                <button class="filter_buttons">Fantasia</button>
                <button class="filter_buttons">Romance</button>
                <button class="filter_buttons">Suspense</button>
                <button class="filter_buttons">Ficção Científica</button>
            </div>
        </section>
        <section class="shelf">
            <?php 
                for($i = 0; $i < 30; $i++){
                    require "php/partials/book.php";
                }
            ?>
        </section>
    </main>
    <?php require "php/partials/footer.php"; ?>
</body>
</html>