<?php
$talabalar = [
    ["muxsina", 16,"yosh", "xorazm"],
    ["rayhona", 16, "yosh", "xorazm"],
    ["rano", 16,"yosh", "xorazm"],
    ["zuxra", 16, "yosh","xorazm"]
];
for ($i = 0; $i < count($talabalar); $i++) {
    for ($j = 0; $j < count($talabalar[$i]); $j++) {
        echo $talabalar[$i][$j] . "<br> ";
    }
}
?>

<?php
class Students{
    public $boyi;
    public $yoshi;
    public $vazni;
  
}
set_atter(165);
$rano=new Students();
$rano->boyi=155;
$rano->yoshi=16;
$rano->vazni=46;

foreach ($rano as $key => $value) {
    echo $key . " ---- " . $value . "<br>";
}
?>
