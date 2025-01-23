<?php

    $receiver = array(
        "firstName" => "Anders",
        "lastName" => "And",
        "address" => "Paradisæblevej 111",
        "postCode" => "1000",
        "city" => "Andeby",
        "date" => "1. april 2014"
    );



    $jyskeBank = array(
        "name" => "Jyske Bank",
        "address" => "Skattelyvej 1",
        "postCode" => "2222",
        "city" => "Solsiden",
        "phoneNumber" => "+45 1234 1234",
        "mail" => "kontakt@jyskebank.fake",
        "logo" => "<img src='./logo_jb.png' alt='Jyske Bank logo' style='width = 100px; height: 100px'>",
        "ceo" => "Claus Clausen"
    );

    $nordea = array(
        "name" => "Nordea",
        "address" => "Hvidvask Allé 666",
        "postCode" => "3333",
        "city" => "Snydestrup",
        "phoneNumber" => "+45 4321 3321",
        "mail" => "kontakt@nordea.fake",
        "logo" => "<img src='./logo_nd.pngg' alt='Nordea logo' style='width = 100px; height: 100px'>",
        "ceo" => "Nora Norde"
    );

    $danskeBank = array(
        "name" => "Danske Bank",
        "address" => "Fiskergade 40",
        "postCode" => "4444",
        "city" => "Gitterly",
        "phoneNumber" => "+45 5678 5678",
        "mail" => "kontakt@danskebank.fake",
        "logo" => "<img src='./logo_db.png' alt='Danske Bank logo' style='width = 100px; height: 100px'>",
        "ceo" => "Dennis Dansker"
    );

    $company = $jyskeBank;
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Letter</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Sender info block (top right) -->
    <section class="justify-right row">
        <div class="margin-2">
            <p><?php
            
              echo $company["name"];
            
            ?></p>
            <p>
                <?php
                
                  echo $company["address"];
                
                ?>
            </p>
            <p>
                <?php
                
                  echo $company["postCode"] . " " . $jyskeBank["city"];
                
                ?>
            </p>
            <p><?php
            
              echo $company["phoneNumber"]
            
            ?></p>
            <p><?php
            
              echo $company["mail"];
            
            ?></p>
        </div>
        <div>
            <!-- img -->
            <?php
            
              echo $company["logo"];
            
            ?>
        </div>
    </section>

    <!-- Recipient info block -->
     <section class="margin-top">
        <p>Til:</p>
        <p><?php
        
          echo $receiver["firstName"] . " " . $receiver["lastName"];
        
        ?></p>
        <p>
            <?php
            
              echo $receiver["address"];
            
            ?>
        </p>
        <p><?php
        
            echo $receiver["postCode"] . " " . $receiver["city"];
        
        ?></p>
     </section>
     
     <!-- Date -->
      <div class="justify-right">
        <p><?php
        
          echo $receiver["date"];
        
        ?></p>
      </div>
      
      <!-- Main text -->
       <section>
            <p>Kære <?php
            
              echo $receiver["firstName"];
            
            ?></p>
            <p>Som repræsentant for <?php
            
                echo $company["name"];
            
            ?> er det med stor glæde at jeg kan overbringe dig nyheden om,
            at du har vundet 1. præmien i bankens aktiespil.
            Præmien vil blive overrakt fredag den 10. april kl. 9:00 i bankens lokaler på <?php
            
              $company["address"] . " i " . $company["city"];
            
            ?> Tilstede vil være bankens direktør samt en journalist og fotograf fra pressen.
            </p>
            <p>Som en del af præmien vil du blive hentet af en chauffør i limousine på din privatadresse på <?php
            
              echo $receiver["address"] . " i " . $receiver["city"];
            
            ?> en time før arrangementet starter</p>
            <p>Hvis du er forhindret i at deltage på det pågældende tidspunkt, bedes du rette henvendelse til
            os snarest enten på mail-adressen <?php

            echo $company["mail"];
            
              
            
            ?> eller på telefon <?php
            
              echo $company["phoneNumber"];
            
            ?></p>
            <p>Vi glæder til at se dig.</p>
       </section>

       <section class="margin-top">
        <p>Med venlig hilsen</p>
        <p><?php
        
          echo $company["ceo"];
        
        ?></p>
        <p>Administerende direktør</p>
        <p><?php
        
          echo $company["name"];
        
        ?></p>
    </section>
</body>
</html>