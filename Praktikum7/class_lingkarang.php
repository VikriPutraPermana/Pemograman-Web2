<?php 

class Lingkaran {
    //Membuat Property
    public $jari_jari;
    public const PHI = 3.14;
    //Membuat Method
    public function __construct($r){
        $this->jari_jari = $r;
    }

    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari ;
    }

    public function keliling(){
        return 2 * self::PHI * $this->jari_jari ;
    }

}

//Membuat Objek / Instance
$lingkaran1 = new Lingkaran(10);
echo "Luas Lingkaran = " . $lingkaran1-> luas();
echo "<hr>";
echo "Keliling Lingkaran = " . $lingkaran1-> keliling();