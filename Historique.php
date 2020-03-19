<?php
require_once 'Connect.php';

    class Historique
    {
        private $numero;
        private $etat;
        private $duree;    
        function __construct($numero,$etat,$duree){
            $this->numero=$numero;
            $this->etat=$etat;
            $this->duree=$duree;
		}
        function toString(){
            return Numero." ".$this->etat."\n".$this->duree;
        }
        function set_numero($numero){
            $this->numero = $numero;
        }
        function get_numero(){
            return $this->numero;
        }
    
        function set_etat($etat){
            $this->etat = $etat;
        }
        function get_etat(){
            return $this->etat;
        }
    
        function set_duree($duree){
            $this->duree = $duree;
        }
        function get_duree(){
            return $this->duree;
		}
    }
?>