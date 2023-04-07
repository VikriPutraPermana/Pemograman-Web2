<?php 

class Fruit {
    //Membuat property
    public $name;
    public $color;
    public $flavor;

    //Membuat Method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Buah = " . $this->name . "<br>Warna = " . $this->color . "<br>Rasa = " . $this->flavor;
    }
    
}

//Membuat Objek 
$fruit1 = new Fruit();
$fruit1->name = "Semangka";
$fruit1->color = "Hijau";
$fruit1->flavor = "Manis";
echo "Buah = " .$fruit1->getName();
echo "<br>";
echo $fruit1->getInfo();
echo "<hr>";
$fruit2 = new Fruit();
$fruit2->name = "Mangga";
$fruit2->color = "Hijau";
$fruit2->flavor = "Manis dan Asam";
echo $fruit2->getInfo();
