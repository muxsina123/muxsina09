<?php
function tub($a){
    $s = 0;
    for($i=2; $i<$a; $i++){
        if($a%$i==0){
            $k=true;
            // break;
        }
    }
if($k==false){
    return "tub son ";
}
else{
    return "tub son emas";
}

}
$n=19;
echo tub($n);
?>
