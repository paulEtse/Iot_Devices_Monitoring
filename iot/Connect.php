<?php
    namespace Iot;
    class Connect{
        static private $host = 'localhost';
        // Database name
        static private $dbname = 'iot';
        // Username
        static private $sdbuser = 'paul';
        // Password
        static private $dbpass = 'mysqlserver';
        function __construct(){}
        static function connect(){
            $connexion = mysqli($host,$sdbuser,$dbpass,$dbname)
            or die("Connexion refused");
        }
    }
?>
