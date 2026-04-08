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
    <title>Teste</title>
    <link rel="shortcut icon" href="img/white_logo.png" type="png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/404.css">
    <script src="js/index.js" defer></script>
</head>
<body>
    <?php require_once "php/partials/header.php" ?>
    <main style="height: auto">
        <?php
            $top_rated_books = [];

            foreach($_SESSION["books"] as $book){
                $top_rated_books[] = ["id" => $book["id"], "title" => $book["title"], "rating" => $book["rating"]];
            }

            for($i = 0; $i < count($top_rated_books) - 1; $i++){
                for($j = 0; $j < count($top_rated_books) - 1 - $i; $j++){
                    if($top_rated_books[$j]["rating"] < $top_rated_books[$j+1]["rating"]){
                        $temp = $top_rated_books[$j];
                        $top_rated_books[$j] = $top_rated_books[$j+1];
                        $top_rated_books[$j+1] = $temp;
                    }
                }
            }
            
            $top_rated_books = array_slice($top_rated_books, 0, 5);

            $top_rated_ids = array_column($top_rated_books, "id");
            
            echo "<pre>";
            print_r($top_rated_books);
            echo "</pre>";

            // foreach($_SESSION["books"] as $book){
            //     if(in_array($book["id"], $top_rated_ids)){
            //         echo "<div class='book'>
            //                 <a href='product.php?id=$book[id]'>
            //                     <img src='$book[cover_img_path]' class='book_cover'>
            //                     <div class='book_info'>
            //                         <p class='book_genre'>$book[genre]</p>
            //                         <p class='book_title'>$book[title]</p>
            //                         <p class='book_author'>$book[author]</p>
            //                         <p class='book_price'>R$ $book[price]</p>
            //                     </div>
            //                 </a>
            //             </div>";
            //     }
            // }
        ?>
    </main>
    <?php require_once "php/partials/footer.php"; ?>
</body>
</html>