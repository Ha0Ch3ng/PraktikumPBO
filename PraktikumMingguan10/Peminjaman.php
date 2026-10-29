<?php

require_once __DIR__ . "/Buku.php";
require_once __DIR__ . "/Anggota.php";

class Peminjaman
{
    private $idPeminjaman;
    private $buku;
    private $anggota;
    private $tanggalPeminjaman;
    private $tanggalPengembalian;
    private $statusPeminjaman;

    public function __construct($idPeminjaman, $buku, $anggota, $tanggalPeminjaman)
    {
        $this->idPeminjaman = $idPeminjaman;
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->tanggalPeminjaman = $tanggalPeminjaman;
        $this->tanggalPengembalian = "-";
        $this->statusPeminjaman = "Dipinjam";
    }

    public function catatPeminjaman()
    {
        echo "Peminjaman " . $this->idPeminjaman . " berhasil dicatat.\n";
        echo "Anggota: " . $this->anggota->getIdAnggota() . "\n";
        echo "Buku: " . $this->buku->getKodeBuku() . "\n";
        echo "Tanggal pinjam: " . $this->tanggalPeminjaman . "\n";
        echo "Status: " . $this->statusPeminjaman . "\n";
    }

    public function catatPengembalian($tanggalKembali)
    {
        $this->tanggalPengembalian = $tanggalKembali;
        $this->perbaruiStatus("Dikembalikan");

        echo "Buku berhasil dikembalikan pada " . $tanggalKembali . ".\n";
    }

    public function perbaruiStatus($statusBaru)
    {
        $this->statusPeminjaman = $statusBaru;
    }

    public function getDetailPeminjaman()
    {
        return "ID: " . $this->idPeminjaman .
               " | Buku: " . $this->buku->getKodeBuku() .
               " | Anggota: " . $this->anggota->getIdAnggota() .
               " | Tanggal pinjam: " . $this->tanggalPeminjaman .
               " | Tanggal kembali: " . $this->tanggalPengembalian .
               " | Status: " . $this->statusPeminjaman;
    }
}
