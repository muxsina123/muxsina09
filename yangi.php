<?php
class Cars{
    public $rangi;
    public $baloni;
    public $ogirliki;
    public $chiroqlari;
}
$damas=new Cars();

$damas->rangi="Oq";
$damas->baloni="4.ta";
$damas->ogirliki="500.kg";
$damas->chiroqlari="6.ta";
foreach ($damas as $key => $value) {
    echo   $value . "<br>";
}
?>
