<?php
function tub($a){
    $k=0;
        for($i=2; $i<=sqrt($a); $i++){
                if($a%$i==0){
                    return $k++;
                    break;
                }        
        }
        if($k==0){
            return true;
        }
        else{
            return false;
        }
}
$n=4;
$m=10;
$k=0;
if($n==2){
    echo 1;
}
else{
    for($i=$n; $i<=$m; $i++){
            if(tub($i)){
                    $k++;
            }
           
    }
    
    echo $k;
}
    $n=4;
    $m=10;


?>

