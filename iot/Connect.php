<?php
    namespace Iot;
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
            $connexion = new mysqli($host,$sdbuser,$dbpass,$dbname)
            or die("Connexion refused");
        }
    }
?>
