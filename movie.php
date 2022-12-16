<?php 
class Movie{
    public $titolo;
    public $annoProduzione;

    function __construct($_titolo,$_anno){
        $this->titolo = $_titolo;
        $this->annoProduzione = $_anno;
    }
    
    public function annoCheck() {
        if ( $this-> annoProduzione > 2000) {
            return "$this->titolo è stato prodotto dopo gli anni 2000";
        } else {
            return "$this->titolo è stato prodotto prima del 2000";
        }
    }
}


?>