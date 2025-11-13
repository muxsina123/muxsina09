<?php
function yigindi($n){
    $s = 0;
    for($i=0; $i<=$n; $i++){
        if($i % 2==0){ 
            $s=$s+$i;
        }
    }
    return $s;
}

$a = 10;
echo yigindi($a);
?>
