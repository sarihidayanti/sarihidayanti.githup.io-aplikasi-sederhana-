<?php
class Orang {
    public $nama;
    public $asal;

    public function __construct($nama, $asal) {
        $this->nama = $nama;
        $this->asal = $asal;
    }

    public function salam() {
        return "Halo, nama saya $this->nama dari $this->asal. Senang bertemu dengan Anda!";
    }
}

// Contoh penggunaan class Orang
$orang1 = new Orang("Sari Hidayanti", "Kuantan Singingi-Provinsi Riau");
echo "<br>";
echo $orang1->salam(); // Output: Halo, nama saya Sari Hidayanti dari Kuantan Singingi-Provinsi Riau. Senang bertemu dengan Anda!

$orang2 = new Orang("Kanaya Putri Novan", "Kuantan Singingi-Provinsi Riau");
echo "<br>";
echo $orang2->salam() . "\n"; // Output: Halo, nama saya Kanaya Putri Novan dari Kuantan Singingi-Provinsi Riau. Senang bertemu dengan Anda!
?>