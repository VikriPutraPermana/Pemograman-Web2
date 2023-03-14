<?php 
$domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];

$program_studi = [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digital"
];

$skills = [
    "HTML"=>10,
    "CSS"=>10,
    "Javascript"=>20,
    "RWD Boostrap"=>20,
    "PHP"=>30,
    "Python"=>30,
    "Java"=>50,
];

function Skor($skor) {
    if($skor ==0){
        return "Tidak Menandai";
    }
    if($skor >=0 && $skor <=40){
        return "Kurang";
    }
    if($skor >=40 && $skor <=60){
        return "Cukup";
    }
    if($skor >=60 && $skor <=100){
        return "Baik";
    }
    if($skor >=100 && $skor <=150){
        return "Sangat Baik";
    }
};

?>