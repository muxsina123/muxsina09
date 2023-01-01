<?php
// class Person{
//     private $name;
//     public function setName($a){
//         if($a>0){
//             $this->name=$a;
//         }
//     }
//         public function getName(){
//             return $this->name;
//         }
// }
// $rano=new Person();
// $rano->setName("rano");
// echo $rano->getName();





class Cars {
    private $sped=0;

    public function gaz($tezlik) {
        if ($tezlik>0) {
            $this->sped+=$tezlik;
        }
    }
    public function tormoz($a){
        if ($a>0){
            $this->sped-=$a;
        }
    }
    public function getSped(){
        return $this->sped;
    }
}

$BMW = new Cars();
$BMW->gaz(50);
$BMW->tormoz(30);
echo $BMW->getSped();

?>


