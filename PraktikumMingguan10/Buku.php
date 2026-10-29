<?php

class Buku
{
    private $kodeBuku;
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construct($kodeBuku, $judul, $penulis, $tahunTerbit)
    {
        $this->kodeBuku = $kodeBuku;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getKodeBuku()
    {
        return $this->kodeBuku;
    }

    public function getDetailBuku()
    {
        return "Kode: " . $this->kodeBuku .
               " | Judul: " . $this->judul .
               " | Penulis: " . $this->penulis .
               " | Tahun: " . $this->tahunTerbit;
    }
}
