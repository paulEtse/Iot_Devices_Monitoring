<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require_once 'dbFunctions.php';
  $m = new Module($_POST["name"],$_POST["type"],$_POST["description"]);
  putModule($m);
?>
</body>