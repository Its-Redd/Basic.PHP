<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booleans</title>
</head>
<body>
    <?php
    
    $boolean1 = true;
    $boolean2 = true;
    $boolean3 = false;
    echo "Boolean A: " . $boolean1 . "<br>"; // True
    echo "Boolean B: " . $boolean2 . "<br>"; // True
    echo "Boolean C: " . $boolean3 . "<br>"; // False
    
    ?>
    <br>

    <?php
    
      
    $number_array = array(7, 12, 25, 32); 
    $boolean = in_array(25, $number_array);
    echo "Is in array: " . ($boolean); // true
    
    ?>
    <br>

    <?php
    
    $var1 = "mike";
    $var2 = "jimmy"; 
    $result = isset($var1);
    echo "Is the variable set: " . $result . "<br>"; // True
 
    $result = isset($var3);
    echo "Is the variable set: " . $result . "<br>"; // False
    
    ?>
    <br>

    <?php
    
    $var1 = "mike";
    $var2 = "jimmy";
    unset($var1); 
    $result1 = isset($var1);
    $result2 = isset($var2);
    echo "Is variable 1 set: " . $result1 . "<br>"; // False
    echo "Is variable 2 set: " . $result2 . "<br>"; // True
    
    ?>

    <br>

    <?php
    
    $var1 = "mike";
    $var2 = "jimmy";
    $result1 = empty($var1);
    $result2 = !empty($var1);
    echo "Is the variable empty: " . $result1 . "<br>"; // False
    echo "Is the variable empty: " . $result2 . "<br>"; // True
    
    ?>
</body>
</html>