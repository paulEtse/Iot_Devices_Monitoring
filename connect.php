<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>
    <?php 
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
