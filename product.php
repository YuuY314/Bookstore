<?php 
include "php/init.php"; 

if(isset($_GET["id"])){
    $id = (int) $_GET["id"];
} else {
    $id = 0;
}

$ids = array_column($_SESSION["books"], "id");

$index = array_search($id, $ids);

if($index !== false){
    $book = $_SESSION["books"][$index];
} else {
    header("Location: 404.php");
    exit();
}
?>

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
    <?php require_once "php/partials/header.php"; ?>
    <main>
        <section class="product_container">
            <?php
                $rating = $book["rating"] ?? 0;

                $stars = "";

                for($i = 1; $i <= 5; $i++){
                    if($rating >= $i){
                        $stars .= "<i class='fa-solid fa-star'></i>";
                    } elseif($rating >= $i - 0.5) {
                        $stars .= "<i class='fa-solid fa-star-half-stroke'></i>";
                    } else {
                        $stars .= "<i class='fa-regular fa-star'></i>";
                    }
                }

                echo "<img src='" . $book["cover_img_path"] . "' class='product_cover'>
                        <div class='product_info'>
                            <div class='product_title'>
                                <h1>" . $book["title"] . "</h1>
                                <p>" . $book["author"] . "</p>
                            </div>
                            <div class='product_review'>
                                <div>
                                    $stars
                                </div>
                                <p>" . $book["rating"] . " (" . $book["review_count"] . ")</p>
                            </div>
                            <div class='product_price'>
                                R$ ". $book["price"] .
                            "</div>
                            <div class='product_details'>
                                <p>Gênero: ". $book["genre"] . "</p>
                                <p>Editora: ". $book["publisher"] . "</p>
                                <p>Data de publicação: " . $book["release_date"] . "</p>
                                <p>Quantidade de páginas: " . $book["page_count"] . "</p>
                                <p>Dimensões: " . $book["dimensions"] . " cm</p>
                            </div>
                            <a href='' class='buttons'>Adicionar ao carrinho</a>
                        </div>";
            ?>
        </section>
    </main>
    <?php require_once "php/partials/footer.php" ?>
</body>
</html>