<?php

  $array = array(1,2,3,4,5,6,7,8,9,10) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <ul>
        <?php
        foreach($array as $number){
            echo "<li>Punkt " . $number . ".</li>";
        }
        ?>
    </ul>
    
</body>
</html>