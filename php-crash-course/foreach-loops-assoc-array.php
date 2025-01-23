<?php

    $person1 = [
        "firstName" => "Anders",
        "lastName" => "Anderson",

    ];
    $person2 = [
        "firstName"=> "Bente",
        "lastName"=> "Bentsen",
        ];
    $person3 = [
      "firstName"=> "Claus",
       "lastName"=> "Clausen",
      ];

      $person4 = [
        "firstName"=> "David",
         "lastName"=> "Davidsen",
        ];
        $person5 = [
            "firstName"=> "Erik",
             "lastName"=> "Eriksen",
            ];

            $people = [$person1, $person2, $person3, $person4, $person5];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Assoc</title>
</head>
<body>
    <?php
    
    foreach ($people as $person) {
        echo $person["firstName"] . " : " . $person["lastName"] . "<br>";
    }
    
    ?>
    
</body>
</html>