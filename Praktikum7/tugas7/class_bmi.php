<?php 
//Buat Class
class bmiPasien {
    // buat property
    public $nama;
    public $umur;
    public $jk;
    public $berat_badan;
    public $tinggi;

    // Membuat Method
    function __construct($nama, $umur, $jk, $berat_badan, $tinggi){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jk = $jk;
        $this->berat_badan = $berat_badan;
        $this->tinggi = $tinggi;
    }

    // buat method (fungsi)
    public function hasilBMI() {
        $tinggi_b = $this->tinggi/100;
        $bmi = $this->berat_badan/($tinggi_b *  $tinggi_b);
        return round($bmi);
    }
    //method bmi
    public function statusBMI()
    {
        // simpan data BMI
        $bmi = $this->hasilBMI();
        //cek data jadi status 
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";

        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (Ideal)";
        }elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        }
        else {
            return "Kegemukan(Obesitas)";
        }
        
    }

}

?>