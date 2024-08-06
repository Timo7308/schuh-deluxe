<?php 
error_reporting(E_ALL);
ini_set('display_errors', "On");

session_start();
$pdo = new PDO('mysql:host=localhost;dbname=loginnamen', 'root', '');
?>

<?php
if(isset($_GET['register'])) {
    $error = false;
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
    
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage='Ungültige Email';
        $error = true;
    }   
    if(strlen($passwort) ==0) {
      $errorMessage='Bitte Passwort eingeben';
      $error = true;
    }
    if(strlen($passwort != $passwort2)) {
      $errorMessage='Passwörter nicht gleich';
      $error = true;
    }
    if(strlen($passwort) < 5) {
      $errorMessage='Passwort zu kurz';
      $error = true;
    }
   
    
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO user (email, passwort, vorname, nachname) VALUES (:email, :passwort, :vorname, :nachname)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'vorname' => $vorname, 'nachname' => $nachname));  
    

    if($result){
        $errorMessage = 'Erfolgreich registriert<br>';
        $error = false;
    }
  }
}
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

<head>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="bootstrap.css">   
</head>



<body style="background-color: rgb(221, 219, 208);">

 <!-- Obere Navigationsleiste mit Shop-Name, Adminbereich und Konto -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(40, 40, 43);">
    <a class="navbar-brand" href="#">Schuh Deluxe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" >
      <div class="control">
        <form class="form-inline">
      <ul class="navbar-nav mr-auto" id="navbarSupportedContent">
        <li class="nav-item active">
      
        </li>
        <li class="nav-item">
         
        </li>
      </ul>
     </form>
     </div>
    </div>     
  </nav>

<!-- Untere Navigationsleiste. Es können Damen oder Herrenschuhe gewählt werden und es können Schuhe über die Suchleiste gefunden werden-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 255, 255);">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <a class="navbar-brand" href="#">Damen</a>
    </li>
    <li class="nav-item">
    <a class="navbar-brand" href="">Herren</a>
    </li>
    </ul>
  </div>
       <div class="control">
      <form class="form-inline">
        <input class="form-control mr-sm-2" placeholder="Schuhe finden" type="search">
      </div>
        <button class="btn float-right btn-outline-success" id="suche" type="submit">Suchen</button>
      </form> 
  </div>
  </nav>
   

     <!-- Registrieren-->
     
     <div id="error"> </div>
     
    <div id="Regis" class="text-center">   
          
    <form action="?register=1" id="form" method="post">
   
          <label for="emailAddress" 
            class="sr-only">Registrieren</label>
          
       <input type="text"
               id="fname"
               name="vorname"
               class="form-control mb-3" 
               placeholder= "Vorname"  autofocus>
                    
       <input type="text"
               name="nachname"
               class="form-control mb-3" 
               placeholder= "Name"  autofocus>
                  
        <input type="email"
               id="emailAddresse"
               class="form-control mb-3" 
               name="email"
               placeholder= "Email" autofocus>
               
          <label for="password" class="sr-only">
              <input type="password" id="passwort" name="passwort"
                     placeholder="Passwort" class="form-control" >
              
                <label for="password" class="sr-only">
              <input type="password" id="passwort1" name="passwort2"
                     placeholder="Passwort Wiederholung" class="form-control" >
          </label>
            <div class="mt-3">
            <button class=" w-100 btn btn-lg btn-primary" type="submit">Anmelden</button>
           </div>  
     
       <div class="text" style="font-size: 12pt" "align-left">     
      <?php
        
        if(isset($errorMessage)) {
          
          echo $errorMessage;
        }
        
        ?> 
       <div class="text" style="font-size: 12pt" "align-left">     
       <a href="login.php">Zum Login</a>
       </div>
        
       </div>
      </form>
     </div>
    </body>
 </html>



















