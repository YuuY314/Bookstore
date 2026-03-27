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
    <title>Bookstore</title>
    <link rel="shortcut icon" href="img/white_logo.png" type="png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/index.js" defer></script>
</head>
<body>
    <?php require "php/partials/header.php"; ?>
    <main>
        <div id="home"></div>
        <section id="banner">
            <div id="banner_text">
                <h1>Descubra sua próxima leitura com a Bookstore</h1>
                <a href="shelf.php" class="buttons">Explorar livros</a>
            </div>
        </section>
        <div id="books"></div>
        <section id="top_rated">
            <div id="top_rated_title">
                <h1>Em Destaque</h1>
                <p>Veja o que os leitores estão curtindo</p>
            </div>
            <div id="top_rated_container">
                <div class="book">
                    <a href="product.php">
                        <img src="img/top_rated/verity.jpg" class="book_cover">
                        <div class="book_info">
                            <p class="book_genre">Suspense</p>
                            <p class="book_title">Verity</p>
                            <p class="book_author">Colleen Hoover</p>
                            <p class="book_price">R$ 42,99</p>
                        </div>
                    </a>
                </div>
                <div class="book">
                    <a href="product.php">
                        <img src="img/top_rated/a_biblioteca_da_meia_noite.jpg" class="book_cover">
                        <div class="book_info">
                            <p class="book_genre">Ficção Contemporânea</p>
                            <p class="book_title">A Biblioteca da Meia-Noite</p>
                            <p class="book_author">Matt Haig</p>
                            <p class="book_price">R$ 37,99</p>
                        </div>
                    </a>
                </div>
                <div class="book">
                    <a href="product.php">
                        <img src="img/top_rated/corte_de_espinhos_e_rosas.jpg" class="book_cover">
                        <div class="book_info">
                            <p class="book_genre">Fantasia</p>
                            <p class="book_title">Corte de Espinhos e Rosas</p>
                            <p class="book_author">Sarah J. Maas</p>
                            <p class="book_price">R$ 39,99</p>
                        </div>
                    </a>
                </div>
                <div class="book">
                    <a href="product.php">
                        <img src="img/top_rated/a_guerra_dos_tronos.jpg" class="book_cover">
                        <div class="book_info">
                            <p class="book_genre">Fantasia</p>
                            <p class="book_title">A Guerra dos Tronos</p>
                            <p class="book_author">George R. R. Martin</p>
                            <p class="book_price">R$ 64,99</p>
                        </div>
                    </a>
                </div>
                <div class="book">
                    <a href="product.php">
                        <img src="img/top_rated/o_hobbit.jpg" class="book_cover">
                        <div class="book_info">
                            <p class="book_genre">Fantasia</p>
                            <p class="book_title">O Hobbit</p>
                            <p class="book_author">J. R. R. Tolkien</p>
                            <p class="book_price">R$ 34,99</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="new_releases" class="book_carousel">
            <h1>Lançamentos</h1>
            <div class="book_carousel_container">
                <i class="fa-solid fa-angle-left left"></i>
                <a href="product.php">
                    <img src="img/new_releases/mulher_em_queda.jpg">
                </a>
                <a href="product.php">
                    <img src="img/new_releases/querida_debbie.jpg">
                </a>
                <a href="product.php">
                    <img src="img/new_releases/suite_toquio.jpg">
                </a>
                <a href="product.php">
                    <img src="img/new_releases/os_sete_maridos_de_evelyn_hugo.jpg">
                </a>
                <a href="product.php">
                    <img src="img/new_releases/o_principe_cruel.jpg">
                </a>
                <a href="product.php">
                    <img src="img/new_releases/quinze_dias.jpg">
                </a>
                <i class="fa-solid fa-angle-right right"></i>
            </div>
        </section>
        <section id="classics" class="book_carousel">
            <h1>Clássicos</h1>
            <div class="book_carousel_container">
                <i class="fa-solid fa-angle-left"></i>
                <a href="product.php">
                    <img src="img/classics/dom_casmurro.jpg">
                </a>
                <a href="product.php">
                    <img src="img/classics/1984.jpg">
                </a>
                <a href="product.php">
                    <img src="img/classics/o_grande_gatsby.jpg">
                </a>
                <a href="product.php">
                    <img src="img/classics/crime_e_castigo.jpg">
                </a>
                <a href="product.php">
                    <img src="img/classics/orgulho_e_preconceito.jpg">
                </a>
                <a href="product.php">
                    <img src="img/classics/frankenstein.jpg">
                </a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </section>
        <div id="contact"></div>
        <section class="contact">
            <div class="contact_text">
                <h1>Entre em Contato</h1>
                <p>Tem alguma dúvida, sugestão ou precisa de ajuda para encontrar o livro perfeito?</p>
                <p>Preencha o formulário abaixo e nossa equipe responderá o mais rápido possível.</p>
            </div>
            <form class="contact_form" action="process_contact.php" method="POST">
                <div class="half_input">
                    <div class="input_group">
                        <input type="text" class="input" name="name" id="name" placeholder=" " required>
                        <label for="name" class="user_label">Nome</label>
                    </div>
                    <div class="input_group">
                        <input type="email" class="input" name="email" id="email" placeholder=" " required>
                        <label for="email" class="user_label">E-mail</label>
                    </div>
                </div>
                <div class="input_group">
                    <input type="text" class="input" name="subject" id="subject" placeholder=" " required>
                    <label for="subject" class="user_label">Assunto</label>
                </div>
                <div class="input_group">
                    <textarea name="message" id="message" class="input textarea" placeholder=" " required></textarea>
                    <label for="message" class="user_label">Escreva sua mensagem</label>
                </div>
                <input type="submit" class="submit">
            </form>
        </section>
    </main>
    <?php require "php/partials/footer.php"; ?>
</body>
</html>