<?php

  $price = 100;
  $tax = 1.25;
  $sale = 0.90;
  $saleamount = $price  * $tax * (1- $sale);
  $total = $price * $tax * $sale;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Calculator</title>
</head>
<body>
    <h1>Price Calculator</h1>
    <p>Pris uden mom kr. <?php
    
      echo $price;
    
    ?></p>
    <p>Pris med moms (25%) kr. <?php
    
      echo $price * $tax;

      ?>

    </p>
    <p>Rabat (10%) kr. <?php
    
      echo $saleamount;
    
    ?></p>
    <p>Pris i alt kr. <?php
    
      echo $total
    
    ?></p>

    
</body>
</html>