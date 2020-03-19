<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>
    
    <?php 
    class Module
    {
        private $numero;
        private $name;
        private $type;
        private $description;
    
        function __construct($name,$type,$description){
            $this->name=$name;
            $this->type=$type;
            $this->description=$description;
        }
        function toString(){
            return $this->name.$this->type;
        }
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
    
        function set_type($type){
            $this->type = $type;
        }
        function get_type(){
            return $this->type;
        }
    
        function set_description($description){
            $this->description = $description;
        }
        function get_description(){
            return $this->description;
        }
    }
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
    echo $m->toString();
?>
</p>
</body>
</html>
