<?php 

$dbname="loginnamen";
$dbhost="localhost";
$dbuser="root";
$dbpass="";

$dbconnection = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($dbconnection->connect_errno) {     
    throw new RuntimeException('mysqli connection error: ' . $dbconnection->connect_error); 

}
$dbconnection -> query("CREATE TABLE IF NOT EXISTS artikel(
    ID int UNSIGNED NOT NULL AUTO_INCREMENT,
       Name varchar(255) NOT NULL,
        Preis float,
        beschreibung varchar (255),
        Bild blob,
        PRIMARY KEY(ID) )
        ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;
    ;");

$dbconnection ->query("CREATE TABLE IF NOT EXISTS bestellung (
  nutzerID int UNSIGNED NOT NULL,
  artikelID int UNSIGNED NOT NULL,
  anzahl int NOT NULL,
  bestalltan date NOT NULL,
  FOREIGN KEY (nutzerID) REFERENCES nutzer(ID),
  FOREIGN KEY (artikelID) REFERENCES artikel(ID))
  ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;");
  
//mysql_query("INSERT INTO artikel (Name, Preis, Menge, Bildhochladen, Text) VALUES ('name', 'preis', 'menge', 'bildhochladen', 'text'");



?>
