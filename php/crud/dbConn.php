<?php
/******Datenbank erstellen********/

// zuweisen der MySQL-Anweisung einer Variablen

 $servername = "localhost";
  $username = "root";
  $state = "";
  $dbname = "blubb";

// Create connection
$conn = new mysqli($servername,$username,$state,"");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo($conn->host_info);     // TCP/IP

/******Datenbank erstellen********/
$sql = 'CREATE DATABASE IF NOT EXISTS blubb'; //anlegen der Datenbank

$result = mysqli_query($conn, $sql)
or die("Connection failed at Database creation: " . $conn->connect_error);

$conn->close();

/********Benutzer Tabelle anlegen********/

$conn_1 = new mysqli($servername,$username,$state,$dbname);
$sql_1 = "
    CREATE TABLE IF NOT EXISTS user (
    id INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    username VARCHAR( 150 ) NOT NULL ,
    email VARCHAR( 150 ) NULL ,
    state VARCHAR (150) NULL
    ) ENGINE = MYISAM ;
    ";
$db_erg = mysqli_query($conn_1, $sql_1) 
or die("Anfrage fehlgeschlagen: " . mysqli_error($conn_1 ));
  //falls die Verbindung fehlschlägt
  $conn_1 -> close();

/********Event Tabelle anlegen********/

$conn_2 = new mysqli($servername,$username,$state,$dbname);
$sql_2 = "
    CREATE TABLE IF NOT EXISTS Event (
    id INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Genre VARCHAR( 150 ) NOT NULL ,
    likes INT( 150 ) NOT NULL ,
    Kommentar VARCHAR( 200 ) NOT NULL
    ) ENGINE = MYISAM ;
    ";
$db_erg = mysqli_query($conn_2, $sql_2) 
or die("Anfrage fehlgeschlagen: " . mysqli_error($conn_2 ));
  //falls die Verbindung fehlschlägt

$conn_2 ->close();


?>