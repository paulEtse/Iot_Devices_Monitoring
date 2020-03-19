<?php

namespace Iot;
require_once 'Connect.php';

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
		static function getModules(){
			$connexion = mysqli($host,$sdbuser,$dbpass,$dbname)
            or die("Connexion refused");
			$sql="SELECT * FROM module";
			$res=$connexion->query($sql);
			return res;
		}
		static function putModule($m){
            $connexion = mysqli($host,$sdbuser,$dbpass,$dbname)
            or die("Connexion refused");
            $sql = "INSERT INTO module VALUES (null,".$m->get_name().",".$m->get_Type().",".$m->get_description().")";
			$connexion->exec($sql);
		}
        function toString(){
            return Nom." ".$this->name."\n".$this->description;
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
?>