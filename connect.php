<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('dbsetting.php');
$setting = new dbsetting().getSeting();
$connexion = new mysqli($setting['dbhost'],$setting['dbusernamen'],$setting['dbpassword'])
or die("unable to connect to "+$setting['dbhost']);
echo("paul");
?>
</body>
</html>
