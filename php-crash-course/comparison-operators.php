<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        $c = 30;
        $d = 30;
        $e = 20;
        $f = 10;

        echo $a == $b; // false
        echo "<br>";
        echo $a != $b; // true
        echo "<br>";
        echo $a < $b; // true
        echo "<br>";
        echo $a > $b; // false
        echo "<br>";
        echo $a <= $b; // true
        echo "<br>";
        echo $a >= $b; // false
        echo "<br>";
        echo $c == $d; // true
        echo "<br>";
        echo $c != $d; // false
        echo "<br>";
        echo $c < $d; // false
        echo "<br>";
        echo $c > $d; // false
        echo "<br>";
        echo $c <= $d; // true
        echo "<br>";
        echo $c >= $d; // true
        echo "<br>";
        echo $e == $f; // false
        echo "<br>";
        echo $e != $f; // true
        echo "<br>";
        echo $e < $f; // false
        echo "<br>";
        echo $e > $f; // true
        echo "<br>";
        echo $e <= $f; // false
        echo "<br>";
        echo $e >= $f; // true
    ?>
    
</body>
</html>