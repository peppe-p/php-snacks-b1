<!-- 
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato:
- DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
-->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .data {
        margin: 50px;
        display: flex;
        align-items: center;
    }

    .post {
        margin: 20px;
    }
    </style>
    <title>SNACK 3</title>
</head>

<body>

    <?php
    foreach ($posts as $data => $postList){
        ?>
    <div class="data">
        <h2><?php echo $data ?></h2>
        <?php
        foreach ($postList as $post){
            ?>
        <div class="post">
            <h3><?php echo $post["title"] ?></h3>
            <h5><?php echo $post["author"] ?></h5>
            <p><?php echo $post["text"] ?></p>
        </div>
        <?php
        }
        ?>
    </div>
    <?php
    }
?>

</body>

</html>