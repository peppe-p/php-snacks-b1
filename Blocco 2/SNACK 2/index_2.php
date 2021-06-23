<?php 
$lista = ["Giacomo", "Andrea", "Peppe"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-size: 2.5rem;
    }
    </style>
    <title>PAGINA 2</title>
</head>
<body>
    <?php
    if (in_array($_GET["name"], $lista)) {
        echo "OK";
    } else {
        echo "KO";
    }
    ?>
</body>
</html>