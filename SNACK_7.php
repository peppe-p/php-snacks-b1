<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php
 
 $scolarList = [
     [
         "nome" => "Giulio",
         "cognome" => "Gallio",
         "voti" => [
             "italiano" => 6,
             "matematica" => 8,
             "inglese" => 9,
             "arte" => 10,
         ]
     ],
     [
         "nome" => "Antonino",
         "cognome" => "Bello",
         "voti" => [
             "italiano" => 2,
             "matematica" => 9,
             "inglese" => 4,
             "arte" => 5,
         ]
     ],
     [
         "nome" => "Holly",
         "cognome" => "Zurk",
         "voti" => [
             "italiano" => 7,
             "matematica" => 9,
             "inglese" => 2,
             "arte" => 4,
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
    <title>SNACK 7</title>
</head>

<body>

    <?php
    foreach ($scolarList as $scolar => $data){
        ?>
    <div class="scolar">
        <h2>Nome</h2>
        <h3><?php echo $data["nome"] . " " . $data["cognome"] ?></h3>
        <h2>Media scolastica</h2>
        <h3>
            <?php
            $sum = 0;
                foreach ($data["voti"] as $voto){
                    $sum += $voto;
                };
                $media = $sum / 4;
                echo $media;
            ?>
        </h3>
    </div>
    <hr>
    <?php
    }
?>

</body>

</html>