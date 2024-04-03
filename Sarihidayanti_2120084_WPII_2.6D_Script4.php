<?php

// Definisikan kelas dasar 'Orang'
class Orang {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function sapa() {
        return "Halo, saya adalah {$this->nama}.";
    }
}
// Definisikan kelas anak 'Mahasiswa' yang mewarisi dari kelas 'Orang'
class Mahasiswa extends Orang {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    // Override metode 'sapa'
    public function sapa() {
        return "Halo, saya {$this->nama} dan NIM {$this->nim}.";
    }
}

// Definisikan kelas anak 'Dosen' yang mewarisi dari kelas 'Orang'
class Dosen extends Orang {
    private $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // Override metode 'sapa'
    public function sapa() {
        return "Halo, Saya adalah Dosen dengan nama {$this->nama} dan NIDN {$this->nidn}.";
    }
}

// Fungsi untuk menyapa objek Orang apa pun
function sapaOrang(Orang $orang) {
    echo $orang->sapa() . "\n";
}

// Membuat objek Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa("Sari Hidayanti", "2120084");
$dosen = new Dosen("Kanaya Putri Novan", "1234567");

// Menyapa objek-objek
sapaOrang($mahasiswa); // Output: Halo, saya adalah mahasiswa dengan nama Sari Hidayanti dan NIM 2120084.
echo "<br>";
sapaOrang($dosen);     // Output: Halo, saya adalah dosen dengan nama Kanaya Putri Novan dan NIDN 1234567.
?>
Laravel memiliki delapan konsep yaitu, 
1. Kelas dan Objek 2.Enkapsulasi 3. Pewarisan 4. Abstraksi 5. Polimorfisme 6. Antarmuka 7. Traits dan ke 8. Dependency Injection