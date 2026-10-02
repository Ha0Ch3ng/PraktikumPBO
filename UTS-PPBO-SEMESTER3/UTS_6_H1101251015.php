<?php

abstract class MenuFoodTruck {
    protected $id;
    protected $nama;
    protected $hargaDasar;

    public function __construct($id, $nama, $hargaDasar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->hargaDasar = $hargaDasar;
    }

    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHargaDasar() {
        return $this->hargaDasar;
    }

    abstract public function hitungTotal();

    abstract public function getJenis();
}

class Burger extends MenuFoodTruck {
    private $patty;

    public function __construct($id, $nama, $hargaDasar, $patty) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->patty = $patty;
    }

    public function hitungTotal() {
        return $this->hargaDasar + (3000 * $this->patty);
    }

    public function getJenis() {
        return "Burger";
    }

    public function cetakDetail() {
        return "Jumlah Patty: " . $this->patty;
    }
}

class Hotdog extends MenuFoodTruck {
    private $sosis;

    public function __construct($id, $nama, $hargaDasar, $sosis) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->sosis = $sosis;
    }

    public function hitungTotal() {
        return $this->hargaDasar + (2500 * $this->sosis);
    }

    public function getJenis() {
        return "Hotdog";
    }

    public function cetakDetail() {
        return "Jumlah Sosis: " . $this->sosis;
    }
}

class Kentang extends MenuFoodTruck {
    private $gram;

    public function __construct($id, $nama, $hargaDasar, $gram) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->gram = $gram;
    }

    public function hitungTotal() {
        $total = $this->hargaDasar + (100 * $this->gram);

        if ($this->gram > 200) {
            $total = $total - ($total * 0.10);
        }

        return $total;
    }

    public function getJenis() {
        return "Kentang";
    }

    public function cetakDetail() {
        return "Berat: " . $this->gram . " gram";
    }
}

$menu1 = new Burger("M001", "Hao", 20000, 2);

$menu2 = new Hotdog("M002", "Iqbal", 18000, 2);

$menu3 = new Kentang("M003", "Pita", 10000, 250);

$menu4 = new Burger("M004", "Rizki", 25000, 3);

$menu5 = new Hotdog("M005", "Deril", 22000, 3);

$menu = [
    $menu1,
    $menu2,
    $menu3,
    $menu4,
    $menu5
];

$totalKeseluruhan = 0;
$no = 1;

foreach ($menu as $item) {

    $total = $item->hitungTotal();
    $totalKeseluruhan += $total;

    echo "No: " . $no . "<br>";
    echo "ID: " . $item->getId() . "<br>";
    echo "Nama: " . $item->getNama() . "<br>";
    echo "Jenis: " . $item->getJenis() . "<br>";
    echo "Harga Dasar: Rp " .
         number_format($item->getHargaDasar(), 0, ',', '.') . "<br>";
    echo "Total: Rp " .
         number_format($total, 0, ',', '.') . "<br>";

    echo "-----------------------------<br>";

    $no++;
}

echo "<b>Total Keseluruhan: Rp " .
     number_format($totalKeseluruhan, 0, ',', '.') .
     "</b>";

?>