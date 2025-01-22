<?php

    $title = "VIND EN BIL ALLEREDE I DAG";
    $host = "Anonyme Alkoholikere";
    $price = "DKK 500.000,00";
    $link = "www.vindenbil.dk";

?>

<html>
    <head>
        <link rel="stylesheet" href="./style.css">

    </head>
    <body>
        <img src="./car_first_price.jpg" alt="Mega grim peugeot">
        <h1>
            <?php           
              echo "$title";
            ?>
        </h1>

        <h3>
            Igen i år afholder
             <?php
        
                echo "$host ";
            
              ?>
            den populære øl stafet “Lys for <br>
            enden af tunnellen”, hvor du skal gå planken ud uden at falde i vandet efter <br>
            at have bundet 20 lyse bajere
    </h3>
        <h3><?php
          echo "Deltag i konkurrencen og " . strtolower($title);
        ?></h3>
        <h3>Blien har en værdi af <?php
        
          echo "$price";
    
        ?></h3>

        <p>
            <?php
            
              echo "Se mere på " . $link;
            
            ?>
        </p>


    </body>
</html>