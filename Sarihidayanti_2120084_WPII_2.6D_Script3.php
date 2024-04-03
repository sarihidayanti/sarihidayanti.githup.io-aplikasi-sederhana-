<?php
class Orang {
    protected $nama;
    protected $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getInfo() {
        return "Nama: {$this->nama}, Umur: {$this->umur}";
    }
}

class Pekerja extends Orang {
    private $pekerjaan;

    public function __construct($nama, $umur, $pekerjaan) {
        parent::__construct($nama, $umur);
        $this->pekerjaan = $pekerjaan;
    }

    public function getPekerjaan() {
        return $this->pekerjaan;
    }
}

// Contoh penggunaan kelas Pekerja
$pekerja = new Pekerja("Sari Hidayanti", 30, "Staff Partai Politik Golkar dan Pengurus Cabang Olahraga");
echo $pekerja->getInfo() . "<br>"; // Output: Nama: Sari Hidayanti, Umur: 30
echo "Pekerjaan: " . $pekerja->getPekerjaan(); // Output: Pekerjaan: Staff Partai Politik Golkar dan Pengurus Cabang Olahraga