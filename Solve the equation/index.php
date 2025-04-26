<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Решение уравнения</title>
</head>
<body>
    <h1>Гришин Максим</h1>
    <?php

    function solveEquation($equation) {
        $equation = str_replace(' ', '', $equation);
        
        $operators = ['+', '-', '*', '/'];
        $operatorPos = false;
        $operator = '';
        
        foreach ($operators as $op) {
            if (strpos($equation, $op) !== false && strpos($equation, $op) > 0) {
                $operatorPos = strpos($equation, $op);
                $operator = $op;
                break;
            }
        }
        
        if ($operatorPos === false) {
            return "Не удалось определить оператор в уравнении";
        }
        
        $equalPos = strpos($equation, '=');
        $leftPart = substr($equation, 0, $equalPos);
        $rightPart = substr($equation, $equalPos + 1);
        
        $xIsLeft = (strpos($leftPart, 'X') === 0);
        
        if ($xIsLeft) {
            $num = (float)substr($leftPart, $operatorPos + 1);
        } else {
            $num = (float)substr($leftPart, 0, $operatorPos);
        }
        
        $result = (float)$rightPart;

        switch ($operator) {
            case '+':
                $x = $xIsLeft ? $result - $num : $result - $num;
                break;
            case '-':
                $x = $xIsLeft ? $result + $num : -($result - $num);
                break;
            case '*':
                $x = $xIsLeft ? $result / $num : $result / $num;
                break;
            case '/':
                $x = $xIsLeft ? $result * $num : $num / $result;
                break;
            default:
                return "Неподдерживаемый оператор";
        }
        
        return $x;
    }

    $equation = "3-X = 10";
    $solution = solveEquation($equation);
    echo "Уравнение: $equation\n";
    echo "Решение: X = $solution";
    
    ?>
</body>
</html>