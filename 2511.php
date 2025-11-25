<?php
class Cars {
    public $rangi;
    public $balonlar_soni;
    public $chiroqlar_soni;

    public function __construct() {
        $this->rangi="oq";
        $this->balonlar_soni=4;
        $this->chiroqlar_soni=6;
    }
}
class BMW extends Cars {
    public function __construct() {
        parent::__construct();
        $this->rangi = "qora"; 
    }
}
class Cobalt extends BMW {
    public function getChiroqlarSoni() {
        return $this->chiroqlar_soni;
    }
}
$cobalt = new Cobalt();
echo $cobalt->getChiroqlarSoni();
?>
