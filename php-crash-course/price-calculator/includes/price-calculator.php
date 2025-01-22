<?php

  function priceCalc($price, $tax, $sale){
    $price = round($price,2);


    $saleamount = $price  * $tax * (1- $sale);
    $total = $price * $tax * $sale;
  }

  ?>