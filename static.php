<?php
class A{
    public static $name="john";
    public static function son($a,$b){
        return $a*$b;
    }
}
// echo A::$name;
$a=new A();
// echo $a->son(18,200);
class Cons{
  const a = "salom";
  public function cons() {
    echo self::a;
  }
}

$b = new Cons();
$b->cons();
?>

