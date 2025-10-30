<?php
$zaryad=$_POST["zaryad"];
if(!empty($_POST["a"])){
    $a=true;
}
else{
    $a=false;
}
if($zaryad<=20 && $a==false){
    echo "telefon zaryadi kam zaryadlash kk";
}
if($zaryad<90 && $a==true){
    echo "qurilma quvvatlanmoqda";
}
else{
    if($zaryad>20 && $a==false){
        echo "qurilmada quvvat bor";
    }
    if($zaryad>=90 && $a==true){
        echo "qurilmadan ajrating";
    }
}


   
?>