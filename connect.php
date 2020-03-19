<?php
include('dbsetting.php');
$setting = new dbsetting().getSeting();
$connexion = new mysqli($setting['dbhost'],$setting['dbusernamen'],$setting['dbpassword']);
echo(con);
?>