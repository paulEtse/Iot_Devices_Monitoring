<?php
namespace Iot;
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
?>