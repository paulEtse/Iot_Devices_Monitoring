<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>
    <?php
    $host = 'localhost';
    // Database name
    $dbname = 'iot';
    // Username
    $sdbuser = 'paul';
    // Password
    $dbpass = 'mysqlserver';
    echo "paul" ;
    $connexion = new mysqli($host,$sdbuser,$dbpass,$dbpass)
    or die("Connexion refused");
    echo "paul" ;
    ?>
</p>
</body>
</html>
