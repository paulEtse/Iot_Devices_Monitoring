<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>
    
    <?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    use iot\Module;
    $host = 'localhost';
    // Database name
    $dbname = 'iot';
    // Username
    $sdbuser = 'paul';
    // Password
    $dbpass = 'mysqlserver';
    $connexion = new mysqli($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    $m = new Module("phone","mobile","Un téléphone");
    echo $m;
?>
</p>
</body>
</html>
