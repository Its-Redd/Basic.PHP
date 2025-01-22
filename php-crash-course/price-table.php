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
    <title>Price Table</title>
    <style>         
         td, table{
            margin: 0;
            padding: 5px;
            border:1px solid black;
            border-collapse: collapse;
        }
        tr td:first-of-type{
            width: 40vw;
        }
        tr td:last-of-type{
            width: 10vw;
        }
</style>
    </style>
</head>
<body>
    <h1>Price Table</h1>
    <table>
        <tr>
            <td>Pris uden mom kr. </td>
            <td><?php
            
                echo $price;
            
            ?></td>
        </tr>
        <tr>
            <td>Pris med moms (25%) kr. </td>
            <td>
                <?php
                
                  echo $price * $tax;
                
                ?>
            </td>
        </tr>
        <tr>
            <td>Rabat (10%) kr. </td>
            <td>
                <?php
                
                  echo $saleamount;
                
                ?>
            </td>
        </tr>
        <tr>
            <td>Pris i alt kr. </td>
            <td>
                <?php
                
                echo $total
                
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>