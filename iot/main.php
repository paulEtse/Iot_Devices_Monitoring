<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modules IOT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="script.js"></script>
  </head>
  <body>
<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require_once 'Module.php';
  require_once 'Historique.php';
  $connexion = mysqli_connect($host,$sdbuser,$dbpass,$dbname)
  or die("Connexion refused");
  function getModules(){
    global $connexion;
    $sql="SELECT * FROM module";
    $res=$connexion->query($sql);
    return res;
  }
  function putModule($m){
    global $connexion;
    $sql = "INSERT INTO module VALUES (null,".$m->get_name().",".$m->get_Type().",".$m->get_description().")";
    $connexion->exec($sql);
  }
  function getHistorique($numero){
    global $connexion;
    $res=$connexion->query($sql);
    return res;
  }
  function putHistorique($historique){
    global $connexion;
    $sql = "INSERT INTO module VALUES (null,".$m->get_name().",".$m->get_Type().",".$m->get_description().")";
    $connexion->exec($sql);
  }
  $res =getModules();
  while($row = $res->fetch_assoc()) {
    echo "numero: " . $row["numero"]. " - Nom: " . $row["nom"]. " " . $row["type"]. "<br>";
}
?>
</body>