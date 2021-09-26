<?php


class hewan {
	public $jumlah_kaki, $terbang, $suaranya;
}

class kucing extends hewan{
	function suaranya(){
		return "Meooonggg";
	}
}

$muezza = new Kucing;
$muezza->jumlah_kaki = "4";
$muezza->terbang = "Tidak bisa terbang";


class harimau extends hewan{
	function suaranya(){
		return "ghraaaawww";
	}

}

$harimau = new Kucing;
$harimau->jumlah_kaki = "4";
$harimau->terbang = "Tidak bisa terbang";


class kambing extends hewan{
	function suaranya(){
		return "Mbeeekk";
	}

}

$kambing = new Kambing;
$kambing->jumlah_kaki = "4";
$kambing->terbang = "Tidak bisa terbang";


class Ayam extends hewan{
	function suaranya(){
		return "Kukuruyuuukkkk";
	}

}

$ayam = new Ayam;
$ayam->jumlah_kaki = "2";
$ayam->terbang = "Bisa terbang";


echo "Muezza adalah kucing <br>";
echo "Punya kaki sebanyak : $muezza->jumlah_kaki <br>";
echo "Bisa terbang : $muezza->terbang <br>";
echo "Suaranya: " . $muezza->suaranya() . "<br>";


echo "<hr>";

echo "Kronik adalah Harimau <br>";
echo "Punya kaki sebanyak : $harimau->jumlah_kaki <br>";
echo "Bisa terbang : $harimau->terbang <br>";
echo "Suaranya : " . $harimau->suaranya() . "<br>";


echo "<hr>";

echo "Wonfi adalah kambing <br>";
echo "Punya kaki sebanyak : $kambing->jumlah_kaki <br>";
echo "Bisa terbang : $kambing->terbang <br>";
echo "Suaranya : " . $kambing->suaranya() . "<br>";


echo "<hr>";

echo "Jago adalah ayam <br>";
echo "Punya kaki sebanyak : $ayam->jumlah_kaki <br>";
echo "Bisa terbang : $ayam->terbang <br>";
echo "Suaranya : " . $ayam->suaranya() . "<br>";


echo "<hr>";

?>