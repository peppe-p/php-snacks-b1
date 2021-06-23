<!-- 
Creare un array con 15 numeri casuali
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 4</title>
</head>

<body>
    <?php
    $nums = [];
    while (count($nums) == 15) {
        $nGenerated = rand(1,100);
        if (in_array($nGenerated, $nums)) {
        } else {
           array_push($nums, $nGenerated);
        }
    };

    echo var_dump($nums);
 ?>
</body>

</html>