<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach loops</title>
</head>
<body>
    <?php
    
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    foreach($numbers as $number){
       echo $number . ", ";		
    }
    
    ?>
    <br>
    <?php
    
      
    $numbers = array(1, 2, 3, 4, 5, 6, 7, "OTTE", 9, 10);

    foreach($numbers as $number){
       echo $number . ", ";		
    }
    
    ?>
    <br>
    <?php
    
    $names = array(
        "Fornavn" => "Anders",
        "Efternavn" => "Andersen",
        "Adresse" => "Min vej 1",
        "Postnr." => "0900",
        "By" => "Min by"
     );
      
     foreach($names as $key => $value){
        echo $key . ":  " . $value . "<br>";		
     }
    
    ?>
    <br>
    
</body>
</html>