<?php 

class Animal {
	public $momo,$doggo, $zya, $masha;
}

class Kucing extends Animal{
	function bersuara(){
		return "Meong";
	}
}
class Anjing extends Animal{
	function bersuara(){
		return "Guk guk guk";
	}
}
 
 class Elang extends Animal{
	function bersuara(){
		return "Miiiip";
	}
}
class Angsa extends Animal{
	function bersuara(){
		return "Kwaaak kwaaak";
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
$momo->tidak_terbang = "Tidak Bisa Terbang";
echo "Momo Adalah Kucing <br>";
echo "Jumlah kakinya adalah : ". $momo->jumlah_kaki. "<br>";
echo $momo->tidak_terbang. "<br>";
echo "Suaranya adalah : ". $momo->bersuara(). "<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
$doggo->tidak_terbang = "Tidak Bisa Terbang";
echo "Doggo Adalah Anjing <br>";
echo "Jumlah kakinya adalah : ". $doggo->jumlah_kaki. "<br>";
echo $doggo->tidak_terbang. "<br>";
echo "Suaranya adalah : ". $doggo->bersuara(). "<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
$zya->Bisa_terbang = "Bisa Terbang";
echo "zya Adalah Elang <br>";
echo "Jumlah kakinya adalah : ". $zya->jumlah_kaki. "<br>";
echo $zya->Bisa_terbang. "<br>";
echo "Suaranya adalah : ". $zya->bersuara(). "<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
$masha->Bisa_terbang = "Bisa Terbang";
echo "Masha Adalah Angsa <br>";
echo "Jumlah kakinya adalah : ". $masha->jumlah_kaki. "<br>";
echo $masha->Bisa_terbang. "<br>";
echo "Suaranya adalah : ". $masha->bersuara(). "<br>";
echo "<hr>";



?>