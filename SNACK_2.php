<!-- 
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione)
- che name sia più lungo di 3 caratteri
- che mail contenga un  punto e una chiocciola
- e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
    $char = [".", "@"];

     if (strlen($name) <= 3) {
         echo "Accesso negato! - Il nome è troppo piccolo";
    } else {
        if (strpos($email, "@") == false || strpos($email, ".") == false) {
            echo "Accesso negato! - Email non valida";;
        } else {
            if (is_numeric($age)) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato! - Età non valida!";
            }
        };
    };

    var_dump(strlen($name));
    var_dump($char);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK2</title>
</head>

<body>

</body>

</html>