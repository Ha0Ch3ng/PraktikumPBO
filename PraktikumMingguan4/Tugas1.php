<?php

class Produk {
    protected $merek;
    protected $harga;

    public function __construct($merek, $harga) {

        if ($harga <= 0) {
            $harga = 0;
        }

        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getInfo() {
        return "Merek: $this->merek<br>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}

class Makanan extends Produk {
    protected $tanggalKadaluarsa;

    public function __construct($merek, $harga, $tanggalKadaluarsa) {
        parent::__construct($merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo() {
        return "Produk: Makanan - Mie Instan<br>" .
               "Merek: $this->merek<br>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>" .
               "Tanggal Kadaluarsa: $this->tanggalKadaluarsa<br>" .
               "Status: Segar";
    }
}

class Elektronik extends Produk {
    protected $garansi;

    public function __construct($merek, $harga, $garansi) {
        parent::__construct($merek, $harga);
        $this->garansi = $garansi;
    }

    public function getInfo() {
        return "Produk: Elektronik - Smart TV<br>" .
               "Merek: $this->merek<br>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>" .
               "Garansi: $this->garansi bulan";
    }
}

$makanan = new Makanan("Indomie", 3500, "2025-06-30");
$elektronik = new Elektronik("Samsung", 5000000, 12);

echo $makanan->getInfo();

echo "<br><br>";

echo $elektronik->getInfo();

?>