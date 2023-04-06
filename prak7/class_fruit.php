<?php

class Fruit{
// membuat property 
    public $name;
    public $color;
    public $flavor;

// membuat method 
    public function getName(){
        return $this->name;
    } 

    public function getInfo(){
        return "Nama Buah = " . $this->name . "<br> Warna Buah = " . $this->color . "<br> Rasa Buah = " . $this->flavor;
    }
}

// membuat objek /instance
$fruit1 = new Fruit();
$fruit1->name = "Mangga";
$fruit1->color = "Greem";  
$fruit1->flavor = "Manis";
 
$fruit2 = new Fruit();
$fruit2->name = "Semangka";
$fruit2->color = "Green";  
$fruit2->flavor = "Manis";

$fruit3 = new Fruit();
$fruit3->name = "Pisang";
$fruit3->color = "Yellow";  
$fruit3->flavor = "Manis";

echo $fruit1->getName();
echo "<br>";
echo $fruit1->getInfo();
echo '<hr>';
echo $fruit2->getName();
echo "<br>";
echo $fruit2->getInfo();
echo '<hr>';
echo $fruit3->getName();
echo "<br>";
echo $fruit3->getInfo();