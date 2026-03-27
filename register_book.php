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
    <title>Cadastro de Livro</title>
    <link rel="shortcut icon" href="img/white_logo.png" type="png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/register_book.css">
    <script src="js/index.js" defer></script>
    <script src="js/register_book.js" defer></script>
</head>
<body>
    <?php require "php/partials/header.php"; ?>
    <main>
        <form>
            <h1>Cadastro de Livro</h1>
            <div class="input_group">
                <input type="text" class="input" name="title" id="title" placeholder=" " required>
                <label for="title" class="user_label">Título</label>
            </div>
            <div class="input_group">
                <input type="text" class="input" name="author" id="author" placeholder=" " required>
                <label for="author" class="user_label">Autor</label>
            </div>
            <div class="input_group">
                <select name="genre" id="genre" required class="input">
                    <option value="Fantasia">Fantasia</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Ficção Contemporânea">Ficção Contemporânea</option>
                    <option value="Romance">Romance</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Terror">Terror</option>
                    <option value="Biografia">Biografia</option>
                    <option value="Autoajuda">Autoajuda</option>
                </select>
            </div>
            <div class="input_group">
                <input type="number" class="input" name="price" id="price" placeholder=" " min="0" step="0.01" required>
                <label for="price" class="user_label">Preço (R$)</label>
            </div>
            <div class="input_group">
                <label class="file_upload">
                    Capa do Livro
                    <input type="file" name="cover_img" id="cover_img">
                </label>
                <span id="file_name">Nenhum arquivo escolhido</span>
            </div>
            <div>
                
            </div>
            <input type="submit" class="submit">
        </form>
    </main>
    <?php require "php/partials/footer.php"; ?>
</body>
</html>