<?php
// $massiv = array(10, 20, 30); 
// for ($i = 0; $i < count($massiv); $i++) {
//     echo $massiv[$i] . "<br>";
// }
$massiv = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$s=0;
for($i=0; $i<count($massiv); $i++) {
  
    for ($j = 0; $j < count($massiv[$i]); $j++) {
                                                                             
            $s=$massiv[$i][$j];
       
    }
}

echo  $s;
?>


