<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$price = 100;
$tax = 1.25;
$sale = 0.85;

require_once "./includes/price-calculator.php";
$total = priceCalc( $price, $tax, $sale );
$taxAmount = taxCalc( $price, $tax );
$saleAmount = saleCalc( $price, $tax, $sale );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Calculator</title>
    <style>
        tr th{
            text-align: left;
        }
        tr {
            padding: 2em;
            width: 33vw
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>
                <p>Købspris: </p>
            </th>
            <th>
                <?php
                
                    echo $price;
                    
                
                ?>
            </th>
        </tr>
        <tr>
            <th>
                <p>Moms (25%): </p>
            </th>
            <th>
                <?php
                
                  echo $taxAmount;
                
                ?>
            </th>
        </tr>
        <tr>
            <th>
                <p>Købspris + moms: </p>
            </th>
            <th>
                <?php
                
                  echo $price * $tax;
                
                ?>
            </th>
        </tr>
        <tr>
            <th>
                <p>
                    Rabat (15%):
                </p>
            </th>
            <th>
            <?php
                
                echo $saleAmount;
              
              ?>
            </th>
        </tr>
        <tr>
            <th>
                <p>Salgspris: </p>
            </th>
            <th>
                <?php
                
                echo $total;  
                
                ?>
            </th>
        </tr>
    </table>
</body>
</html>