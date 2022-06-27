<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div>

        <?php
        $nMax = 100;
        $nMin = 0;

        $numbersArray = [];

        while (count($numbersArray) < 15) {
            $randomNumber = mt_rand($nMin, $nMax);

            if (!in_array($randomNumber, $numbersArray)) {
                $numbersArray[] = $randomNumber;
            }
        }

        echo '<pre>' . var_dump($numbersArray) . '</pre>';
        ?>

    </div>
</body>

</html>