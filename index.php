<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="asset/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
<script src="//unpkg.com/leaflet-gesture-handling"></script>
  </head>
  <body>
    <div class="insade-frea-img">
      <div class="container">
    
     <nav>
      <div class="logo-border"></div>
      <div class="logo"><img src="img/logo.png" alt=""></div>
        <ul class="mob-mar">
          <li>
              <a href="/">naslovna</a>
          </li>
          <li>
              <a href="https://blog.parentstime.rs/">blog</a>
          </li>
          <li>
              <a href="/contact">kontakt</a>
          </li>
      </ul>
    </nav>

        <div class="insade-frea-wrapper">
          <div class="insade-wrapper">
            <h1>MAPA <br> Divljih <br> deponija </h1>
            <p>Otkrivanje Divljih Deponija Mapiranje i Analiza</p>
            <a href="#" class="btn btn-green">Prijavi Deponiju</a>
          </div>
        </div>
      </div>
      <img id="bg" src="https://lokalnasamouprava.org/cls-mapa/img/uvac.jpg" class="img-fluid" style="top: 0px;">
    </div>
    <div class="container">
      <div class="map-info">Prikaz Svih deponija</div>
      <div class="map-wrapper">
        <div id="map"></div>
      </div>
    </div>
    <section class="subscribe-index">
      <div class="container">
        <h5>Zašto se prijaviti na našu mejl listu?</h5>
        <h6>Pridružite se borbi protiv divljih deponija!</h6>
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="subscribe-index-flex">
                  <div class="icon-wrap">
                    <div class="subscribe-index-icon">
                      <i class="fa-solid fa-info"></i>
                    </div>
                  </div>
                  <div class="subscribe-index-text">Budite korak ispred u rešavanju zagađenja sa informacijama o novim divljim deponijama</div>
                </div>
                <div class="subscribe-index-flex">
                  <div class="icon-wrap">
                    <div class="subscribe-index-icon">
                      <i class="fa-regular fa-bell"></i>
                    </div>
                  </div>
                  <div class="subscribe-index-text">Redovna obaveštenja o napretku projekta pružaju uvid u našu predanost borbi protiv divljih deponija.</div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="subscribe-index-flex">
                  <div class="icon-wrap">
                    <div class="subscribe-index-icon">
                      <i class="fa-regular fa-handshake"></i>
                    </div>
                  </div>
                  <div class="subscribe-index-text">Specijalne ponude za pretplatnike nagrađuju vašu podršku u očuvanju životne sredine.</div>
                </div>
                <div class="subscribe-index-flex">
                  <div class="icon-wrap">
                    <div class="subscribe-index-icon">
                      <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                  </div>
                  <div class="subscribe-index-text">Edukativni saveti za aktivno učešće u zaštiti životne sredine i smanjenju divljih deponija</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="subscribe-form">
                <h3>Subscribe</h3>
                <div class="mb-3">    
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" >
                  </div>
                  <div class="mb-3">    
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vaše ime" >
                  </div>
                  <input type="submit" class="fsubmit" value="prijavi se">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="waste" >
        <div class="container text-center">
          <h3>Kako prijaviti  divlju deponiju?</h3>
          <h4>Sve u dva koraka</h4>
          <ul>
            <li class="map-report-step"><div class="map-report-number" >1</div><p>Dozvolite GPS lociranje ili ručno postavite marker na mapi.</p></li>
            <li class="map-report-step"><div class="map-report-number" >2</div><p>Izaberite do tri slike i klikni na Dodaj deponiju</p></li>
            
          </ul>
          <p class="waste-info-bottom" >Prijavljivanjem divlje deponije pomažete u očuvanju životne sredine i stvaranju bezbednijeg i čistijeg okruženja za sve</p>
          <a href="#" class="fsubmit" >klik</a>
        </div>
    </section>


    <section class="faq">
   <div class="container">
     <div class="row">
       <div class="col-lg-4">
         <div class="faq-text">
           <h4>Najčešće postavljana pitanja</h4>
           <p>Skup često postavljanih pitanja posetilaca sa odgovorima, pružajući brze odgovore na uobičajene nedoumice ili poteškoće. Cilj je olakšati pronalaženje informacija i poboljšati korisničko iskustvo na našem sajtu.</p>
         </div>
       </div>
       <div class="col-lg-8">
         <div class="faq-text">
           <div class="accordion" id="accordionExample">
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Kako prepoznati divlje deponije? </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body"> Divlje deponije često su mesta gde se otpad nelegalno odlaga, van propisanih deponija ili postrojenja za tretman otpada. To mogu biti napuštena mesta u prirodi, prazni placovi ili ivice puteva gde se vidi nagomilani otpad. </div>
               </div>
             </div>
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Ko je odgovoran za čišćenje divljih deponija? </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body"> Odgovornost za čišćenje divljih deponija može varirati u zavisnosti od lokalnih propisa i zakona. U nekim slučajevima, to može biti odgovornost lokalnih vlasti, dok u drugim situacijama može biti potrebno da se angažuje privatni sektor ili organizacije za zaštitu životne sredine.</div>
               </div>
             </div>

             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Koji su negativni uticaji divljih deponija na životnu sredinu i zdravlje ljudi? </button>
               </h2>
               <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">Divlje deponije mogu izazvati štetne posledice po životnu sredinu i zdravlje ljudi, uključujući zagađenje voda i vazduha, širenje bolesti, privlačenje štetočina i životinja, kao i degradaciju prirodnih ekosistema.</div>
               </div>
             </div>


             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">Kako prijaviti divlje deponije lokalnim vlastima?</button>
               </h2>
               <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">Lokalne vlasti često imaju procedure za prijavljivanje divljih deponija. To može uključivati kontaktiranje odgovarajućeg odeljenja za zaštitu životne sredine ili komunalne usluge putem telefona, e-pošte ili online obrasca za prijavu.</div>
               </div>
             </div>


             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsSix" aria-expanded="false" aria-controls="collapseThree">Kakve su mere prevencije i rešavanja problema divljih deponija?</button>
               </h2>
               <div id="collapsSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">Mere prevencije i rešavanja divljih deponija mogu obuhvatiti edukaciju javnosti o pravilnom postupanju sa otpadom, jačanje zakonodavstva i sprovođenje strožih kazni za nelegalno odlaganje otpada, organizovanje akcija čišćenja i recikliranje otpada, kao i unapređenje sistema za upravljanje otpadom i reciklažu.</div>
               </div>
             </div>



           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <section class="blog">
  <div class="mission-bubble"></div>
  <div class="container">
    <div class="blog-text-title">
      <h3>
        <span> Eko-Informator</span> najnovije vesti iz sveta ekologije
      </h3>
      <p>Budite informisani i angažovani - pratite najnovija dešavanja iz sveta ekologije kod nas!</p>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="blog-main">
          <div class="blog-img">
            <img class="img-fluid" src="img/golubac.jpg" alt="">
          </div>
          <div class="blog-text">
            <h3>Self-Guided Driving & Tours Walk Of Greater City</h3>
            <p>In ornare pellentesque sed elementum sed ac adipiscing suscipit auctor molestie eget sociis</p>
            <a class=" btn-news-info" href="#">Detaljnije</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-main">
          <div class="blog-img">
            <img class="img-fluid" src="img/golubac.jpg" alt="">
          </div>
          <div class="blog-text">
            <h3>Self-Guided Driving & Tours Walk Of Greater City</h3>
            <p>In ornare pellentesque sed elementum sed ac adipiscing suscipit auctor molestie eget sociis</p>
            <a class=" btn-news-info" href="#">Detaljnije</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-main">
          <div class="blog-img">
            <img class="img-fluid" src="img/golubac.jpg" alt="">
          </div>
          <div class="blog-text">
            <h3>Self-Guided Driving & Tours Walk Of Greater City</h3>
            <p>In ornare pellentesque sed elementum sed ac adipiscing suscipit auctor molestie eget sociis</p>
            <a class=" btn-news-info" href="#">Detaljnije</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="dupmweek">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <h3>Divlja deponija nedelje</h3>
        <p>Otkrijte novu divlju deponiju nedelje. Pogledajte koja loacija je pod lupom ovog meseca! Kliknite da otkrijete više o ovoj aktuelnoj ekološkoj temi, uključujući informacije o njenom uticaju na okolinu i mogućim rešenjima za ovo hitno pitanje.</p>
        <a href="#" class="secondmap">detaljnije</a>
      </div>
      <div class="col-lg-7">
        <div class="dupmweekimg">
          <img src="img/slika.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>



<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="footer-info">          
          <p>Posvećeni smo otkrivanju, dokumentovanju i rešavanju problema divljih deponija kako bismo unapredili životnu sredinu i podigli svest o važnosti čistog okruženja</p>
        </div>
        <div class="footer-social">
          <ul>
            <li>
              <a href="">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div class="footer-map-report">
          <h3>Zašto prijaviti divlju deponiju</h3>
          <ul>
            <li> <span>1 </span>Zagađenje okoline</li>
            <li> <span>2 </span>Očuvanje prirode</li>
            <li> <span>3 </span>Zaštita zdravlja.</li>
          </ul>
          <p>Prijavljivanjem divlje deponije pomažete u očuvanju životne sredine i stvaranju bezbednijeg i čistijeg okruženja za sve</p>
           <a  class="footerbtn" href="">prijavi</a> 
        </div>
      </div>
    </div>
    
    <div class="footer-bootom text-center">
    <div class="logo-footer">
            <img src="img/logofooter2.png" alt="">
          </div>  
    </div>
    <!-- <div class="footercopy">ⓒ ekoh2o 2024</div> -->
  </div>
  
</footer>
<?php

?>

    <script>
var map = L.map('map',{
  center:[43.823556124161556, 20.862692362420842],
  zoom:7,
  gestureHandling: true,
  gestureHandlingOptions: {
        duration: 2000 //5 secs
    }
});


      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
      

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </body>
</html>