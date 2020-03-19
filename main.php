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
require_once 'iot/Module.php';
require_once 'iot/Historique.php';
$res =Module::getModules();
while($row = $res->fetch_assoc()) {
    echo "numero: " . $row["numero"]. " - Nom: " . $row["nom"]. " " . $row["type"]. "<br>";
}
?>
</body>