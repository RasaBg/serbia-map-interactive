<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <link href="asset/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
<script src="//unpkg.com/leaflet-gesture-handling"></script>
<style>
  #map{
    height:750px;
  }
</style>
  </head>
  <body>
    <div class="insade-frea-img-map-report">
      <div class="container">
        <nav></nav>
        <div class="insade-frea-wrapper">
          <div class="insade-wrapper">
            <h1>Prijavite divlju deponiju</h1>
            <p>Otkrivanje Divljih Deponija Mapiranje i Analiza</p>            
          </div>
        </div>
      </div>
      <img id="bg" src="https://lokalnasamouprava.org/cls-mapa/img/uvac.jpg" class="img-fluid" style="top: 0px;">
    </div>
    


<section class="map-report-main">
  <div class="container">
    <div class="map-report-warning col-lg-6">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mapreport" aria-expanded="false" aria-controls="mapreport">Kako prijaviti divlju deponiju:</button>
          </h2>
          <div id="mapreport" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lociranje divlje deponije na mapi:</p>
              <p>Ako ste na lokaciji gde se nalazi divlja deponija možete da dozvolite pristup vašoj trenutnoj lokaciji klikom na dugme "Dozvoli lociranje"  ili ručno postavite marker na mapi.</p>
              <p>Ako niste na lokaciji gde se nalazi divlja deponija koju ste slikali, pomerite mapu na željena lokaciju.</p>
              <p>Napomena: Molimo vas da prilikom prijave divlje deponije pružite što preciznije informacije</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <diw class="row">
      <div class="col-lg-8">
        <div class="map-report-wrapper">
          <div id="map"></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="map-form-send">
        <div class="row mt-3">
        <div class="col">
            <button class="btn btn-info" onclick="getLocation()">Moja lokacija</button>
        </div>
    </div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
            <div class="form-group mb-3">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="longitude">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" readonly>
                </div>
                <div>Adresa: <span id="address"></span></div>
              <label for="email" class="form-label">Vaš e-mail</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Vaše ime</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Dodajte 3 slike maksimum</label>
              <input type="file" class="form-control" id="image">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Dodatna napomena</label>
              <textarea name="" class="form-control" id="message" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" class="map-report-btn" value="prijava">
          </form>
        </div>
      </div>
    </diw>
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
    <div class="footer-divider"></div>
    <div class="footer-bootom text-center">ⓒ ekoh2o 2024</div>
  </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </body>
</html>