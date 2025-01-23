<?php

  function priceCalc($price, $tax, $sale){
    $price = round($price,2);


    $total = $price * $tax * $sale;
    return $total;
  }

  function taxCalc($price, $tax){
    $price = round($price,2);

    $taxamount = $price * $tax - $price;


    return $taxamount;
  }
  function saleCalc($price, $tax, $sale){
    $price = round($price,2);
    $saleamount = $price * $tax * (1- $sale);

    return $saleamount;
  }
  ?>