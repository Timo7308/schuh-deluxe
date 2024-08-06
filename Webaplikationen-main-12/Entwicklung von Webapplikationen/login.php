<?php 

$pdo = new PDO('mysql:host=localhost;dbname=loginnamen', 'root', '');
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $rightMessage = 'Login erfolgreich <a href="Startseite_Nutzer.html">Startseite</a>';
    } else {
        $errorMessage = "E-Mail oder Passwort ungültig<br>";
    }
     if($email == 'admin@minishop.de' && $passwort == '12345')  {
       $adminMessage = 'Willkommen <a href="Startseite_Admin.html">Startseite</a>';
       $rightMessage = false;
       $errorMessage = false;
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
    
    
  <!-- Login-->
      <div class="text-center">   
      <form action="?login=1" method="post">
       <img src="Bilder/loginLogo.png" height="90">
          <label for="emailAddress" 
            class="sr-only">Anmelden</label>
           <input type="email"
               class="form-control mb-3" 
               name="email";
               placeholder= "Email">
          <label for="password" class="sr-only">
              <input type="password" name="passwort"
               placeholder="Passwort" class="form-control">
          </label>
        <div class="mt-3">
           <button class="btn w-100 btn-lg btn-primary" type="submit">Login</button>
          </div>   
          
       <div class="message">
       <?php 
         
         if(isset($errorMessage)) {
           echo $errorMessage;
         }
         
          if(isset($rightMessage)) {
            echo $rightMessage;
          }
          if(isset($adminMessage)) {
            echo $adminMessage;
            
          }
        ?>
        </div>
      </form>
      </div> 
    </body>
   </html>
