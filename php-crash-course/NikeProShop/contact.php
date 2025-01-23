<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt Os</title>

    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <header>
      <figure>
        <img src="./img-til-opgave/Nike-logo-clean.png" alt="Nike logo" />
      </figure>

      <!-- <nav class="mobile">
        <input class="checkbox" type="checkbox" name="checkbox" id="checkbox" />
        <label for="checkbox">
          <img
            class="open"
            src="./img-til-opgave/bars-solid.svg"
            alt="hamburger menu button"
          />

          <img
            class="close"
            src="./img-til-opgave/times-solid.svg"
            alt="hamburger menu close"
          />
        </label>
        <ul>
          <li>
            <a href="./index.php">FORSIDE</a>
          </li>

          <li>
            <a href="./history.php">HISTORIEN OM NIKE</a>
          </li>

          <li>
            <a href="./about.php">OM NIKE PRO SHOP</a>
          </li>

          <li>
            <a href="./contact.php">KONTAKT OS</a>
          </li>
        </ul>
      </nav>

      <nav class="desktop">
        <a href="./index.php" rel="noopener noreferrer">FORSIDE</a>
        <a href="./history.php" rel="noopener noreferrer">HISTORIEN OM NIKE</a>
        <a href="./about.php" rel="noopener noreferrer">OM NIKE PRO SHOP</a>
        <a href="./contact.php" rel="noopener noreferrer">KONTAKT OS</a>
      </nav> -->

      <?php
      
      include './includes/menu.php';
      
      ?>
    </header>
    <main class="contactmain">
      <img
        src="./img-til-opgave/Slideshow-image-3.jpg"
        alt="Orange shoe on a curb"
      />
      <h2>Kundeservice</h2>
      <section>
        <img src="./img-til-opgave/History-of-Nike.jpg" alt="" />
        <article>
          <p>
            Vi sidder klar ved telefonen samt chatsupport alle ugens dage, hvis
            du skulle have brug for hjælp.
          </p>
          <div class="-margin">
            <p>Vores åbningstider på telefonen er:</p>
            <p>Mandag-Fredag: 9-18</p>
            <p>Lørdag-Søndag: 10-14</p>
          </div>
          <p>
            Du kan kontakte os på nedenstående telefonnummer i ovenstående
            tidsrum, eller på mail hvor vi svarer indenfor 24 timer på alle
            hverdage.
          </p>
          <div class="-margin">
            <p>Telefon: (+45) 33 91 18 18</p>
            <p>E-mail: online@NikeProShop.dk</p>
          </div>
        </article>
      </section>
      <h2>Fortrydelsesret</h2>
      <p>
        Du har 30 dages fortrydelsesret. Det gør sig både gældende ved køb i
        vores fysiske shops og på vores webshop. Fortrydelsesretten løber fra
        den dag, du foretager dit køb i butikken eller modtager din webordre.
      </p>
      <h2>Bytte- og returregler</h2>
      <ul>
        <li>Bytteret på alle varer i op til 180 dage</li>
        <li>Fuld returret på alle varer i op til 30 dage</li>
        <li>
          Alle varer som er købt online, kan sendes gratis retur med vedlagt
          returlabel
        </li>
        <li>
          Alle varer som er købt online, kan også byttes/returneres i vores
          fysiske butikker*
        </li>
      </ul>
      <p>
        *Det er kun muligt at returnere/ombytte en vare i Magasin, hvis den
        oprindeligt blev købt der.
      </p>
      <h2>Gratis retur</h2>
      <p>
        Vi vedlægger altid en gratis returlabel i alle vores forsendelser i
        Danmark, så du helt uden omkostninger kan sende din webordre retur til
        vores lager, hvis varerne mod forventning ikke skulle passe dig. Du
        klistrer blot returlabelen på den kasse (ikke den originale skoæske), du
        modtog varerne i og afleverer pakken hos din lokale pakkeshop eller
        postbutik.
      </p>
      <p>
        *Husk at få en kvittering for indleveringen af pakken med fra
        pakkeshoppen, da det er din dokumentation for, at du har sendt pakken
        korrekt retur.
      </p>
      <br />
      <br />
      <br />
    </main>
    <!-- <footer>
      <div class="left">
        <h5>Nike Pro Shop Stores</h5>
        <h6>København</h6>
        <p>Rådhusstræde 6, st.</p>
        <p>1466 København K</p>
        <h6>Aarhus</h6>
        <p>Søndergade 70</p>
        <p>8000 Aarhus</p>
        <h6>Odense</h6>
        <p>Vestergade 23</p>
        <p>5000 Odense</p>
      </div>

      <div class="middle">
        <h5>Åbningstider</h5>
        <p>Mandag - fredag: 10:00 - 18:00</p>
        <p>Lørdag: 10:00 - 13:00</p>
        <br />
        <p>Telefon: (+45) 33 91 18 18</p>
        <p>E-mail: online@NikeProShop.dk</p>
      </div>
      <div class="right">
        <h5>Nike Pro Shop på de sociale medier</h5>
        <a href="#"
          ><img src="./img-til-opgave/FacebookIcon.png" alt="Facebook Icon"
        /></a>
        <a href="#"><img src="./img-til-opgave/InstagramIcon.png" alt="" /></a>
        <a href="#"><img src="./img-til-opgave/TwitterIcon.png" alt="" /></a>
        <div class="flexright">
          <a href="./contact.php" target="_blank" rel="noopener noreferrer"
            >Kontakt</a
          >
          <a href="./about.php" target="_blank" rel="noopener noreferrer"
            >Om Nike Pro Shop</a
          >
        </div>
      </div>
    </footer> -->
    <?php
    
    include './includes/footer.php';
  
  ?>
  </body>
</html>
