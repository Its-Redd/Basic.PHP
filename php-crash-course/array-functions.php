<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
</head>
<body>
    <?php
    
    $string_array = array("john", "mike", "johnny", "mary" ); 
    echo count($string_array); // 4
    
    ?>
    <br>
    <?php
    
    $number_array = array(25, 12, 7, 32); 
    sort($number_array);
    print_r($number_array);
    
    ?>
    <br>
    <?php
    
    $number_array = array(7, 25, 12, 32); 
    rsort($number_array);
    print_r($number_array);
    
    ?>
    <br>
    <?php
    
    $string = "7 - 12 - 25 - 32"; 
    $explode = explode(" - ", $string);
    print_r($explode);
    
    ?>
    
</body>
</html>