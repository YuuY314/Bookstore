<?php
$store_name = "Bookstore";

$categories = [
    [
        "id" => 1,
        "name" => "Fantasia",
        "slug" => "fantasia",
        "parent_id" => null
    ],
    [
        "id" => 2,
        "name" => "Alta Fantasia",
        "slug" => "alta-fantasia",
        "parent_id" => 1
    ],
    [
        "id" => 3,
        "name" => "Fantasia Sombria",
        "slug" => "fantasia-sombra",
        "parent_id" => 1
    ],
    [
        "id" => 4,
        "name" => "Fantasia Urbana",
        "slug" => "fantasia-urbana",
        "parent_id" => 1
    ],
    [
        "id" => 5,
        "name" => "Romance",
        "slug" => "romance",
        "parent_id" => null
    ],
    [
        "id" => 6,
        "name" => "Romance Contemporâneo",
        "slug" => "romance-contemporaneo",
        "parent_id" => 5
    ],
    [
        "id" => 7,
        "name" => "Romance Histórico",
        "slug" => "romance-historico",
        "parent_id" => 5
    ],
    [
        "id" => 8,
        "name" => "Romance Jovem Adulto",
        "slug" => "romance-jovem-adulto",
        "parent_id" => 5
    ],
    [
        "id" => 9,
        "name" => "Suspense",
        "slug" => "suspense",
        "parent_id" => null
    ],
    [
        "id" => 10,
        "name" => "Suspense Psicológico",
        "slug" => "suspense-psicologico",
        "parent_id" => 9
    ],
    [
        "id" => 11,
        "name" => "Mistério",
        "slug" => "misterio",
        "parent_id" => 9
    ],
    [
        "id" => 12,
        "name" => "Ficção",
        "slug" => "ficcao",
        "parent_id" => null
    ],
    [
        "id" => 13,
        "name" => "Ficção Contemporânea",
        "slug" => "ficcao-contemporanea",
        "parent_id" => 12
    ],
    [
        "id" => 14,
        "name" => "Ficção Distópica",
        "slug" => "ficcao-distopica",
        "parent_id" => 12
    ],
    [
        "id" => 15,
        "name" => "Ficção Científica",
        "slug" => "ficcao-cientifica",
        "parent_id" => 12
    ],
    [
        "id" => 16,
        "name" => "Terror",
        "slug" => "terror",
        "parent_id" => null
    ],
    [
        "id" => 17,
        "name" => "Terror Psicológico",
        "slug" => "terror-psicologico",
        "parent_id" => 16
    ],
    [
        "id" => 18,
        "name" => "Sobrenatural",
        "slug" => "sobrenatural",
        "parent_id" => 16
    ],
    [
        "id" => 21,
        "name" => "Biografia",
        "slug" => "biografia",
        "parent_id" => null
    ],
    [
        "id" => 22,
        "name" => "Autobiografia",
        "slug" => "autobiografia",
        "parent_id" => 21
    ],
    [
        "id" => 23,
        "name" => "Memórias",
        "slug" => "memorias",
        "parent_id" => 21
    ],
    [
        "id" => 24,
        "name" => "Desenvolvimento Pessoal",
        "slug" => "desenvolvimento-pessoal",
        "parent_id" => null
    ],
    [
        "id" => 25,
        "name" => "Produtividade",
        "slug" => "produtividade",
        "parent_id" => 24
    ],
    [
        "id" => 26,
        "name" => "Hábitos",
        "slug" => "habitos",
        "parent_id" => 24
    ],
    [
        "id" => 27,
        "name" => "Inteligência Emocional",
        "slug" => "inteligencia-emocional",
        "parent_id" => 24
    ],
    [
        "id" => 28,
        "name" => "Finanças Pessoais",
        "slug" => "financas-pessoais",
        "parent_id" => 24
    ],
    [
        "id" => 30,
        "name" => "Infantil",
        "slug" => "infantil",
        "parent_id" => null
    ],
    [
        "id" => 31,
        "name" => "Infantojuvenil",
        "slug" => "infantojuvenil",
        "parent_id" => null
    ],
      [
        "id" => 19,
        "name" => "Jovem Adulto",
        "slug" => "jovem-adulto",
        "parent_id" => null
    ],
    [
        "id" => 20,
        "name" => "Clássicos",
        "slug" => "classicos",
        "parent_id" => null
    ]
];

$childrenMap = [];

foreach($categories as $category){
    if($category["parent_id"] != null){
        $childrenMap[$category["parent_id"]][] = $category;
    }
}

$books = [
    [
        "id" => 1,
        "title" => "A Guerra dos Tronos",
        "author" => "George R. R. Martin",
        "genre" => "Fantasia",
        "price" => 64.99,
        "cover_img_path" => "img/books/a_guerra_dos_tronos.jpg",
        "rating" => 4.8,
        "review_count" => 314,
        "publisher" => "Suma",
        "release_date" => "25/03/2019",
        "page_count" => 592,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 2,
        "title" => "Verity",
        "author" => "Colleen Hoover",
        "genre" => "Suspense",
        "price" => 42.99,
        "cover_img_path" => "img/books/verity.jpg",
        "rating" => 4.5,
        "review_count" => 202,
        "publisher" => "Galera Record",
        "release_date" => "09/03/2020",
        "page_count" => 320,
        "dimensions" => "21 x 13,5 x 1,8"
    ],
    [
        "id" => 3,
        "title" => "A Biblioteca da Meia-Noite",
        "author" => "Matt Haig",
        "genre" => "Ficção Contemporânea",
        "price" => 37.99,
        "cover_img_path" => "img/books/a_biblioteca_da_meia_noite.jpg",
        "rating" => 4.6,
        "review_count" => 247,
        "publisher" => "Bertrand Brasil",
        "release_date" => "27/09/2021",
        "page_count" => 308,
        "dimensions" => "23 x 15,5 x 1,7"
    ],
    [
        "id" => 4,
        "title" => "O Hobbit",
        "author" => "J. R. R. Tolkien",
        "genre" => "Fantasia",
        "price" => 34.99,
        "cover_img_path" => "img/books/o-hobbit-harpercollins.jpg",
        "rating" => 4.7,
        "review_count" => 553,
        "publisher" => "HarperCollins",
        "release_date" => "19/06/2019",
        "page_count" => 336,
        "dimensions" => "21,2 x 14 x 2,4"
    ],
    [
        "id" => 5,
        "title" => "Corte de Espinhos e Rosas",
        "author" => "Sarah J. Maas",
        "genre" => "Fantasia",
        "price" => 39.99,
        "cover_img_path" => "img/books/corte_de_espinhos_e_rosas.jpg",
        "rating" => 4.2,
        "review_count" => 152,
        "publisher" => "Galera Record",
        "release_date" => "05/05/2015",
        "page_count" => 432,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 6,
        "title" => "Mulher em Queda",
        "author" => "Colleen Hoover",
        "genre" => "Ficção Contemporânea",
        "price" => 79.99,
        "cover_img_path" => "img/books/mulher_em_queda.jpg",
        "rating" => 4.4,
        "review_count" => 52,
        "publisher" => "Galera Record",
        "release_date" => "02/01/2018",
        "page_count" => 448,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 7,
        "title" => "Querida Debbie",
        "author" => "Freida McFadden",
        "genre" => "Suspense",
        "price" => 69.99,
        "cover_img_path" => "img/books/querida_debbie.jpg",
        "rating" => 4.1,
        "review_count" => 35,
        "publisher" => "Arqueiro",
        "release_date" => "2022",
        "page_count" => 240,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 8,
        "title" => "Suíte Tóquio",
        "author" => "Giovana Madalosso",
        "genre" => "Ficção Contemporânea",
        "price" => 49.99,
        "cover_img_path" => "img/books/suite_toquio.jpg",
        "rating" => 4.3,
        "review_count" => 15,
        "publisher" => "Todavia",
        "release_date" => "2020",
        "page_count" => 192,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 9,
        "title" => "Os Sete Maridos de Evelyn Hugo",
        "author" => "Taylor Jenkins Reid",
        "genre" => "Ficção Contemporânea",
        "price" => 54.99,
        "cover_img_path" => "img/books/os_sete_maridos_de_evelyn_hugo.jpg",
        "rating" => 4.1,
        "review_count" => 23,
        "publisher" => "Paralela",
        "release_date" => "13/06/2017",
        "page_count" => 360,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 10,
        "title" => "O Príncipe Cruel",
        "author" => "Holly Black",
        "genre" => "Fantasia",
        "price" => 44.99,
        "cover_img_path" => "img/books/o-principe-cruel-galera-record.jpg",
        "rating" => 4.0,
        "review_count" => 123,
        "publisher" => "Galera Record",
        "release_date" => "02/01/2018",
        "page_count" => 384,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 11,
        "title" => "Quinze Dias",
        "author" => "Vitor Martins",
        "genre" => "Jovem Adulto",
        "price" => 34.99,
        "cover_img_path" => "img/books/quinze_dias.jpg",
        "rating" => 4.2,
        "review_count" => 13,
        "publisher" => "Alt",
        "release_date" => "2017",
        "page_count" => 192,
        "dimensions" => "22,8 x 15,6 x 3,2"

    ],
    [
        "id" => 12,
        "title" => "Dom Casmurro",
        "author" => "Machado de Assis",
        "genre" => "Romance",
        "price" => 24.99,
        "cover_img_path" => "img/books/dom_casmurro.jpg",
        "rating" => 4.2,
        "review_count" => 983,
        "publisher" => "Principis",
        "release_date" => "1899",
        "page_count" => 256,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 13,
        "title" => "1984",
        "author" => "George Orwell",
        "genre" => "Ficção Distópica",
        "price" => 24.99,
        "cover_img_path" => "img/books/1984.jpg",
        "rating" => 4.4,
        "review_count" => 760,
        "publisher" => "Principis",
        "release_date" => "08/06/1949",
        "page_count" => 328,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 14,
        "title" => "O Grande Gatsby",
        "author" => "F. Scott Fitzgerald",
        "genre" => "Romance",
        "price" => 37.99,
        "cover_img_path" => "img/books/o_grande_gatsby.jpg",
        "rating" => 4.5,
        "review_count" => 437,
        "publisher" => "Excelsior",
        "release_date" => "10/04/1925",
        "page_count" => 180,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 15,
        "title" => "Crime e Castigo",
        "author" => "Fiódor Dostoiévski",
        "genre" => "Romance",
        "price" => 59.99,
        "cover_img_path" => "img/books/crime_e_castigo.jpg",
        "rating" => 4.3,
        "review_count" => 326,
        "publisher" => "Editora 34",
        "release_date" => "1866",
        "page_count" => 576,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 16,
        "title" => "Orgulho e Preconceito",
        "author" => "Jane Austen",
        "genre" => "Romance",
        "price" => 39.99,
        "cover_img_path" => "img/books/orgulho-e-preconceito-garnier.jpg",
        "rating" => 4.6,
        "review_count" => 236,
        "publisher" => "Garnier",
        "release_date" => "28/01/1813",
        "page_count" => 432,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 17,
        "title" => "Frankenstein",
        "author" => "Mary Shelly",
        "genre" => "Terror",
        "price" => 34.99,
        "cover_img_path" => "img/books/frankenstein.jpg",
        "rating" => 4.5,
        "review_count" => 568,
        "publisher" => "Via Leitura",
        "release_date" => "01/01/1818",
        "page_count" => 280,
        "dimensions" => "22,8 x 15,6 x 3,2"
    ],
    [
        "id" => 18,
        "title" => "Cinquenta Tons de Cinza",
        "author" => "E. L. James",
        "genre" => "Romance",
        "price" => 49.99,
        "cover_img_path" => "img/books/cinquenta_tons_de_cinza.jpg",
        "rating" => 2.5,
        "review_count" => 572,
        "publisher" => "Intríseca",
        "release_date" => "17/07/2012",
        "page_count" => 480,
        "dimensions" => "23 x 16 x 2,3"
    ]
];