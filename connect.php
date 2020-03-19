<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
include('dbsetting.php');
$setting = new dbsetting().getSeting();
$connexion = new mysqli($setting['dbhost'],$setting['dbusernamen'],$setting['dbpassword'])
or die("unable to connect to "+$setting['dbhost']);
echo("paul");
?>
</body>
</html>
