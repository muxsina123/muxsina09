<?php
if(!empty($_POST["burger"])){
    $burger=37000;
}
else{
    $burger=0;
}
if(!empty($_POST["pepsi"])){
    $pepsi=12000;
}
else{
    $pepsi=0;
}
if($burger>0 && $pepsi>0){
    echo ($burger+$pepsi)*0.9. "som";
}
else{
    echo ($burger+$pepsi)."som";
}
?>
