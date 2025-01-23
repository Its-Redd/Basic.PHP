<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular functions</title>
</head>
<body>
    <?php
    
    $string = "  hello, WorLd! ";
    echo strtolower($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo ucfirst($string);
    echo "<br>";
    echo ucwords($string);
    echo "<br>";
    echo trim($string);
    echo "<br>";
    echo strlen($string);
    echo "<br>";

    $explode = explode(",", $string);
    print_r($explode);

    echo "<br>";

    $number = 1234567890.12345;
    echo round($number);
    echo "<br>";
    echo ceil($number);
    echo "<br>";
    echo floor($number);
    echo "<br>";
    echo sqrt($number);
    echo "<br>";
    echo rand(0,$number);
    echo "<br>";

    $array = array(1,2,5,77,69,420,666,69420);
    echo count($array);
    echo "<br>";
    echo sort($array);
    echo "<br>";
    echo rsort($array);
    ?>
</body>
</html>