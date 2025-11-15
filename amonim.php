
<?php
function tub($son){
    if ($son<2) return false;     
    for ($i=2; $i<=sqrt($son); $i++) {
        if ($son%$i ==0){
            return false;
        }
    }
    return true;
}
function tubson($n){
    $a=0;
    for($i=1; $i<=$n; $i++) {
        if(tub($i)){
            $a++;
        }
    }
    return $a;
}
$n =10;

echo tubson($n, $m);
