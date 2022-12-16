<?php 
class Movie{
    public $titolo;
    public $annoProduzione;
    public $poster;
    public $trailer;

    function __construct($_titolo,$_anno,$_poster,$_trailer){
        $this->titolo = $_titolo;
        $this->annoProduzione = $_anno;
        $this->poster = $_poster;
        $this->trailer = $_trailer;

    }
    
    public function annoCheck() {
        if ( $this-> annoProduzione > 2016) {
            return "$this->titolo è stato prodotto dopo il 2016";
        } else {
            return "$this->titolo è stato prodotto prima del 2016";
        }
    }
}

class Book{
    
    public $titolo;
    public $annoProduzione;
    public $poster;
    public $link;

    function __construct($_titolo,$_anno,$_poster,$_link){
        $this->titolo = $_titolo;
        $this->annoProduzione = $_anno;
        $this->poster = $_poster;
        $this->link = $_link;
    }
}


?>