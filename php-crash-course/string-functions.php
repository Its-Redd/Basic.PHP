<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
</head>
<body>
    <?php
    
    $var1 = "John Doe";
    $var1 .= " is not here";
    echo $var1; // John Doe is not here
    
    ?>
    <br>
    <?php
    
    $var1 = "John Doe is not here";
    echo "Lowercase: " . strtolower($var1) . "<br>";
    echo "Uppercase: " . strtoupper($var1) . "<br>";
    echo "Uppercase first letter: " . ucfirst($var1) . "<br>";
    echo "Uppercase words: " . ucwords($var1) . "<br>";
    
    ?>
    <br>
    <?php
    
    $var12 = "John Doe";
    $var2 = " is not here";
    $var3 = $var12;
    $var3 .= $var2;
    echo "Length: " . strlen($var3) . "<br>";
    echo "Trim: " . $var4 = $var12 . trim($var2) . "<br>";
    echo "Explode: ";
    $exp = $var3;
    $exp = explode(" ", $exp);
    echo $exp[0];
    
    ?>
</body>
</html>