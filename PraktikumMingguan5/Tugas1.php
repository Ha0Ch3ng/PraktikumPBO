<?php

interface Bentuk {
    public function hitungLuas();
    public function getKeterangan();
}

class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function getKeterangan() {
        return "Luas Persegi (sisi={$this->sisi}): " . $this->hitungLuas();
    }
}

class Lingkaran implements Bentuk {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        // Menggunakan nilai pi 3.14 atau M_PI
        return 3.14 * $this->radius * $this->radius;
    }

    public function getKeterangan() {
        return "Luas Lingkaran (radius={$this->radius}): " . $this->hitungLuas();
    }
}

$daftarBentuk = [
    new Persegi(5),
    new Lingkaran(7)
];

foreach ($daftarBentuk as $bentuk) {
    echo $bentuk->getKeterangan() . "<br>";
}

?>