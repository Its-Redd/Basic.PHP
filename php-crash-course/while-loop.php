<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <?php
    
    $number = 1; 
    while($number <= 10){
       echo $number . ", ";
       $number++;
    }
    
    ?>
    <br>
    <?php
    
    $number = 1; 
    while($number <= 10){
       if($number == 5){
          echo "<span style=\"color: red;\">FIVE, </span>";	
       }
       else{		
          echo $number . ", ";	
       }
       $number++;
    }
    
    ?>
    
</body>
</html>