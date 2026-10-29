<?php

class Anggota
{
    private $idAnggota;
    private $nama;
    private $alamat;
    private $noTelepon;

    public function __construct($idAnggota, $nama, $alamat, $noTelepon)
    {
        $this->idAnggota = $idAnggota;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->noTelepon = $noTelepon;
    }

    public function getIdAnggota()
    {
        return $this->idAnggota;
    }

    public function getDetailAnggota()
    {
        return "ID: " . $this->idAnggota .
               " | Nama: " . $this->nama .
               " | Alamat: " . $this->alamat .
               " | Telepon: " . $this->noTelepon;
    }
}
