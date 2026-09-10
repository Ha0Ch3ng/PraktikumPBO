<?php
class Mobil {

    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    public function getMerek() {
        return $this->merek;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }

    public function setKecepatan($kecepatan) {
        if ($kecepatan < 0) {
            return "Kecepatan tidak boleh negatif.";
        }

        if ($kecepatan > 200) {
            return "Kecepatan maksimal 200 km/jam.";
        }

        $this->kecepatan = $kecepatan;
    }

    public function setWarna($warna) {
        if (empty($warna)) {
            return "Warna tidak boleh kosong.";
        }

        if (strlen($warna) < 3) {
            return "Warna minimal 3 karakter.";
        }

        $this->warna = $warna;
    }

    public function getInfo() {
        return "Mobil " . $this->getMerek() .
               " berwarna " . $this->getWarna() .
               " dengan kecepatan " . $this->getKecepatan() .
               " km/jam.<br>";
    }

    public function jalankan() {
        return "Mobil " . $this->getMerek() . " berjalan...<br>";
    }

    public function berhenti() {
        return "Mobil " . $this->getMerek() . " berhenti.<br>";
    }
}

$mobil1 = new Mobil("BYD", "Putih", 150);
$mobil2 = new Mobil("Hotwheels", "Pink", 100);
$mobil3 = new Mobil("Jaklingko", "biru", 120);

echo $mobil1->getInfo();
echo $mobil1->jalankan();
echo $mobil1->berhenti();
echo "<br>";

echo $mobil2->getInfo();
echo $mobil2->jalankan();
echo $mobil2->berhenti();
echo "<br>";

echo $mobil3->getInfo();
echo $mobil3->jalankan();
echo $mobil3->berhenti();
?>