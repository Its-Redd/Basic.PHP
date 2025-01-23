<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <?php
    
    $a = 20;
    $b = 10;
 
    if ($a > $b){
      echo "A is greater than B";
    }
    
    ?>
    <br>

    <?php
    
    $a2 = 20;
    if (isset($a2)){
       echo "A is set";
    }
    
    ?>
    <br>

    <?php
    
    $a3 = 20;
    if (isset($a3)){
       echo "A is set";
    }
    else{
       echo "A is not set";
 }
    
    ?>
    <br>

    <?php
    
    $a4 = 19;

    if ($a4 <= 1){
       echo "The number is smaller than or equal to 1";
    }
    elseif($a4 <= 10){
       echo "The number is smaller than or equal to 10";
    }
    elseif($a4 <= 20){
       echo "The number is smaller than or equal to 20";
    }
    else{
         echo "The number is greater than 20";
       }
    
    ?>
    <br>
    <?php
    
    $a5 = 20;
    $b2 = 10;
    $c = 40;
    $d = 30;
 
    if ($a5 > $b2){
 
       if ($c > $d){ 
          echo "A is greater than B and C is greater than D as well<br>";
       }
    }
    
    ?>
    <br>
    <?php
    
    $a6 = 20;
    $b3 = 10;
    $c2 = 40;
    $d2 = 30;
 
    if (($a6 > $b3) && ($c2 > $d2)) {
       echo "A is greater than B AND C is greater than D<br>";
    }
    
    ?>
    <br>
    <?php
    
    $a7 = 20;
    $b4 = 10;
    $c3 = 30;
    $d3 = 40;
 
    if (($a7 > $b4) || ($c3 > $d3)) {
       echo "A is greater than B OR C is greater than D<br>";
    }
 
    
    ?>
    <br>
    </body>
</html>
