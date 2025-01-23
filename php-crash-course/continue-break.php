<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue and break</title>
</head>
<body>
    <h1>Opgave 1</h1>
    <?php
    
    for($number = 1; $number <= 10; $number++){
        if($number == 3){
           continue;
        }
        echo $number . ", ";
     }
    
    ?>
    <br>
    <?php
    
    for($number = 1; $number <= 10; $number++){
        if($number == 6){
           break;
        }
        echo $number . ", ";
     }
    
    ?>
    <br>
    <h1>Opgave 2</h1>
    <?php
    
      $array = array("1","2","3","4","5","6","7","8","9","10") ;

      for($number = 1; $number <= 10; $number++){
        if($number == 10){
            echo $number ."";
           continue;
        }
        echo $number . ", ";
      }
    ?>

    
</body>
</html>