<?php
class Orang {
    private $nama;
    private $asal;

    // Constructor untuk inisialisasi nama dan asal
    public function __construct($nama, $asal) {
        $this->nama = $nama;
        $this->asal = $asal;
    }

    // Method untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }


    // Method untuk mendapatkan asal
    public function getAsal() {
        return $this->asal;
    }
}

// Contoh penggunaan class Orang
$orang = new Orang("Sari Hidayanti", "Kuantan Singingi-Provinsi Riau");

// Menggunakan method untuk mendapatkan nilai properti
echo "Nama: " . $orang->getNama(); // Output: Nama: Sari Hidayanti
echo "<br>";
echo "Asal: " . $orang->getAsal(); // Output: Asal: Kuantan Singingi-Provinsi Riau