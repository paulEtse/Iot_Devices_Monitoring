<?php
require_once 'Connect.php';
require_once 'Module.php';
function getModules(){
  global $host,$dbname,$dbpass,$sdbuser;
  $connexion = mysqli_connect($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    $sql="SELECT id_projet, nom_projet,date_debut_projet, date_fin_projet FROM projet";
    $res=$connexion->query($sql);
    $result="";
    while($row = $res->fetch_assoc()) {
      $result .=  "<tr>
            <th scope='row'>".$row['id_projet']."</th>
            <td>".$row['nom_projet']."</td>
            <td>".$row['date_debut_projet']."</td>
            <td>".$row['date_fin_projet']."</td>
            <td class='hidden-xs hidden-sm'>".$row['date_fin_projet']."</td>
            <td>See more ... </td>
          <tr>";
    } 
  return $result;  
  }
  function putModule(Module $m){
    global $host,$dbname,$dbpass,$sdbuser;
    $connexion = mysqli_connect($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    $sql = "INSERT INTO module(nom,type,description,state) VALUES ('".$m->get_name()."','".$m->get_Type()."','".$m->get_description()."','state')";
    echo($sql);
    $connexion->query($sql) or die ("eroor");
  }
  function getHistorique($numero){
    $connexion = mysqli_connect($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    $res=$connexion->query($sql);
    return $res;   
  }
  function putHistorique($historique){
    $connexion = mysqli_connect($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    $sql = "INSERT INTO module VALUES (null,".$m->get_name().",".$m->get_Type().",".$m->get_description().")";
    $connexion->exec($sql);
  }
?>
