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
    <title>Produto</title>
    <link rel="shortcut icon" href="img/white_logo.png" type="png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product.css">
    <script src="js/index.js" defer></script>
</head>
<body>
    <?php require "php/partials/header.php"; ?>
    <main>
        <section class="product_container">
            <img src="img/top_rated/a_guerra_dos_tronos.jpg" class="product_cover">
            <div class="product_info">
                <div class="product_title">
                    <h1>A Guerra dos Tronos</h1>
                    <p>George R. R. Martin</p>
                </div>
                <div class="product_review">
                    <div>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <p>4.8 (314)</p>
                </div>
                <div class="product_price">
                    R$ 69.99
                </div>
                <div class="product_details">
                    <p>Gênero: Fantasia</p>
                    <p>Editora: Suma</p>
                    <p>Data de publicação: 29/11/2019</p>
                    <p>Quantidade de páginas: 898</p>
                    <p>Dimensões: 22,8 x 15,6 x 3,2 cm</p>
                </div>
                <a href="" class="buttons">Adicionar ao carrinho</a>
            </div>
        </section>
    </main>
    <?php require "php/partials/footer.php" ?>
</body>
</html>