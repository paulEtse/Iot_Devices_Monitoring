<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>
    <?php
    use iot/Module as Module;
    
    namespace iot;

    $host = 'localhost';
    // Database name
    $dbname = 'iot';
    // Username
    $sdbuser = 'paul';
    // Password
    $dbpass = 'mysqlserver';
    echo "paul" ;
    $connexion = new mysqli($host,$sdbuser,$dbpass,$dbname)
    or die("Connexion refused");
    echo "paul" ;
    // Check connection
if ($connexion->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</p>
</body>
</html>
