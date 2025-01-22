<?php
    // $string_array = array("Anders", "Bent", "Claus", "Dennis" );
    // $number_array = array(1,3,7,9,12,16);
    // $mixed_array = array(1,"Anders",7,"Bent","hello world",array("a", "b", "c"));
    $number_array = array(3,4,7,9,12,16);
    $string_array = array("john", "mike", "jimmy", "mary" );
    $mixed_array = array(1,"john",7,"mike","hello world"); 

    $user_array1 = array("Anders", "anders@andersen", "admin", "1234");
    $user_array2 = array("Bent", "bent@bentsen", "admin", "1234");
    $user_array3 = array("Claus", "claus@clausen", "admin", "1234");
    $array_set = array($user_array1, $user_array2, $user_array3);

    $names = array("Anders","Bent");
    array_push($names,"Claus","Dennis");

    $string_array1 = array("john", "mike", "jimmy", "mary" );
    $string_array1[2] = "simon";

    $names = array("Andy","Bob", "Clare","Damon");
    array_pop($names);

    $assoc_array = array(
        "first_name" =>  "Anders",
        "last_name" =>  "Andersen"
     );
    //  $assoc_array["first_name"] =  "Bent";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    
    echo $number_array[0]; // 3
    echo $number_array[2]; // 7 
    
    ?>
    <br>
    <?php
    
    echo $string_array[2];  // Jimmy
    
    ?>
    <br>
    <?php
    
    echo $mixed_array[4]; // Hello world
    
    ?>
    <br>
    <?php
    
    echo $array_set[2][0]; // Claus
    
    ?>
    <br>
    <?php
    
    echo $names[2]; // Claus
    
    ?>
    <br>
    <?php
    
    echo $string_array1[2]; // Simon
    
    ?>
    <br>
    <?php
    
      print_r($names) // Array ( [0] => Andy [1] => Bob [2] => Clare )
    
    ?>
    <br>
    <?php
    
    echo $assoc_array["first_name"]; // Anders 
    
    ?>
    <br>
    echo $assoc_array["last_name"]; // Andersen








</body>
</html>