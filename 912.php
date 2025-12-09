<?php


date_default_timezone_set("Asia/Tashkent");
// echo date_default_timezone_get();
// echo  date("h:i:s");

$d=mktime(11, 14, 54, 8, 12, 2009);
echo  date("Y-m-d h:i:sa", $d);


?>