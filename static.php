<?php
class A{
    public static $name="john";
    public static function son($a,$b){
        return $a*$b;
    }
}
// echo A::$name;
$a=new A();
echo $a->son(18,200);
?>

