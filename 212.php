<?php

class Cons{
  const a = "salom";
  public function cons() {
    echo self::a;
  }
}

$b = new Cons();
$b->cons();
?>



