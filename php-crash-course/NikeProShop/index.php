<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forside</title>
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
    <main>
      <figure>
        <img
          src="./img-til-opgave/Slideshow-image-3.jpg"
          alt="Orange Air Max's on a curb"
        />
      </figure>

      <p>
        Nike har siden deres spæde begyndelse i Oregon, været symbolet på
        innovation indenfor sportsverdenen.
      </p>
      <p>
        Fra løbesko til fodboldstøvler, over golfbolde og til snowboardtøj
        dækker de efterhånden hele paletten.Her hos Nike Pro Shop fokuserer vi
        selvfølgelig på Nike sko og sneakers, men vi forsøger også at snige lidt
        apparel ind i udvalget, når vi finder gode basic styles.
      </p>
      <p>
        I det hele taget gør vi alt hvad vi kan for at holde vores udvalg
        opdateret med de bedste styles fra Nike, både hvad angår deres
        innovative teknologier og populære silhuetter som P-6000, Air Max,
        VaporMax og den voksende Ultra serie, men vi forsøger også altid at have
        de vigtigste klassikere på vores hylder, som Air Force, Cortez, React
        Element og Pegasus.
      </p>

      <!-- Shoe links -->

      <div class="grid">
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-aqua-thumb.jpg"
              alt="Blue Nikes"
            />Nike Aqua</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <img
              src="./img-til-opgave/Nike-aquamarine-thumb.jpg"
              alt="Dark Blue Nikes"
            />Nike Aquamarine
          </a>
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-bauhaus-thumb.jpg"
              alt="Nike Bauhaus"
            />Nike Bauhaus</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-blackwhite-thumb.jpg"
              alt="Black and white nikes"
            />Nike Black/white</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-greenyellow-thumb.jpg"
              alt="Green and yellow Nikes"
            />Nike Green/Yellow</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <img
              src="./img-til-opgave/Nike-orange-thumb.jpg"
              alt="Orange nikes"
            />Nike Orange</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-pastel-thumb.jpg"
              alt="Pastel colored nikes"
            />Nike Pastel</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-rainbow-thumb.jpg"
              alt="Rainbow nikes"
            />Nike Rainbow</a
          >
        </div>
        <div class="shoes">
          <a href="#" target="_blank" rel="noopener noreferrer"
            ><img
              src="./img-til-opgave/Nike-whitered-thumb.jpg"
              alt="White and red nikes"
            />Nike White/Red</a
          >
        </div>
      </div>
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
