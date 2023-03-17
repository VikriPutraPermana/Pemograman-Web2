<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
<?php 
// ini sebuah komentar
/* ini juga sebuah komentar */
# komentar pake simbol kres



echo "Hello World <br>";
echo 'Hello World <br>';
print_r("vikri putra permana <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";


$nama = "Vikri PP";
$umur = 20;
$berat = 60.1;
$mahasiswa = true;

echo "Nama saya $nama <br>";
echo "Umur saya $umur tahun <br>";
echo " Berat saya $berat kg <br>";
echo "<hr>";


//membuat array
$programs = ["php", "javascript", "html", "css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}
?>
<?php
require_once "layouts/footer.php";

?>