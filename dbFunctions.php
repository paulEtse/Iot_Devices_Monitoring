<?php
require_once 'Connect.php';
require_once 'Module.php';
function getModules(){
    $connexion = mysqli_connect($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    $sql="SELECT * FROM module";
    $res=$connexion->query($sql);
    $result="";
    while($row = $res->fetch_assoc()) {
      $result .=  "<tr>
            <th scope='row'>".$row['numero']."</th>
            <td>".$row['nom']."</td>
            <td>".$row['type']."</td>
            <td>".$row['state']."</td>
            <td class='hidden-xs hidden-sm'>".$row['description']."</td>
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