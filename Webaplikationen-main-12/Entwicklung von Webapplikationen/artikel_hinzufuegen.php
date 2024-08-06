<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

<head>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="bootstrap.css">    
</head>


<body style="background-color: rgb(221, 219, 208);">

 <!-- Obere Navigationsleiste mit Shop-Name, Adminbereich und Konto -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(40, 40, 43)">
    <a class="navbar-brand" href="Startseite_Admin.html">Schuh Deluxe</a>
    <a class="navbar-brand" href="#">Adminbereich</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" >
      <div class="control">
        <form class="form-inline">
      <ul class="navbar-nav mr-auto" id="navbarSupportedContent">
        <li class="nav-item active">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Konto.html">Konto</a>
        </li>
      </ul>
     </form>
     </div>
    </div>  
  </nav>

   <!-- Untere Navigationsleiste. Es können alle Warenkörbe oder alle Nutzer angesehen werden. Und es können neue Artikel hinzugefügt werden-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 255, 255);">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <a class="navbar-brand" href="Nutzer_Liste.html">Nutzer</a>
    </li>
    <li class="nav-item">
    <a class="navbar-brand" href="Warenkorb_Liste.html">Warenkörbe</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand" href="#">Neuer Artikel</a>
      </li>
    </ul>
  </div>
  
     <!-- Suchleiste-->
       <div class="control">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search">
      </div>
        <button class="btn float-right btn-outline-success" id="suche" type="submit" placeholder="Schuhe finden">Suchen</button>
</form>
  </nav>
     

  <!-- Neuen Artikel anlegen-->
 <form id="form" action="article.php" method="post" enctype="multipart/form-data">
    <div class="card" id="neueArtikel">
     <h3 id="title">Neuen Artikel anlegen</h3>
     <div class="form-group" id="artikelTitel">
      <h6>Name</h6>
      <input type="text" class="form-control" name="name"><br>
      <h6>Preis</h6>
      <input type="text" class="form-control" name="preis"><br>
      <h6>Menge</h6>
      <input type="text" class="form-control" name="menge">
    </div>
    <div class="form-group" id="Bildhochladen">
      <h6>Bild hochladen</h6>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bild">
    </div>
     <div class="form-group" id="Textfeld">
      <h6>Beschreibung des Artikels</h6>
      <textarea class="form-control"  rows="6" name="beschreibung"></textarea><br>
      <button class="btn float-right btn-danger"  type="submit">Neuen Artikel anlegen</button>
    </div>
     </div>
  </form>
  </body>
  </html>
