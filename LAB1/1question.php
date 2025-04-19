<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Гришин Максим</h1>
    <?php
    // Арифметические операции. Дано: $a = 27; $b = 12; Найти: Значение другого катета с точностью до двух знаков после запятой
    $a = 27;
    $b = 12;

    $a_2=pow($a,2);
    $b_2=pow($b,2);

    echo round(abs(pow($a_2-$b_2,1/2)),2)

    ?>
   
</body>
</html>

