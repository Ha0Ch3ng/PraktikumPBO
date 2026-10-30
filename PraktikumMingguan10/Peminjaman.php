<?php
require_once __DIR__ . "/Buku.php";
require_once __DIR__ . "/Anggota.php";

class Peminjaman
{
    private $idPeminjaman;
    private $idAnggota;
    private $kodeBuku;
    private $buku;
    private $anggota;
    private $tanggalPeminjaman;
    private $tanggalPengembalian;
    private $statusPeminjaman;

    public function __construct($idPeminjaman, $buku, $anggota, $tanggalPeminjaman)
    {
        $this->idPeminjaman = (int) $idPeminjaman;
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->idAnggota = (int) $anggota->getIdAnggota();
        $this->kodeBuku = $buku->getKodeBuku();
        $this->tanggalPeminjaman = $tanggalPeminjaman;
        $this->tanggalPengembalian = "-";
        $this->statusPeminjaman = "Dipinjam";
    }

    public function catatPeminjaman()
    {
        echo "Peminjaman " . $this->idPeminjaman . " berhasil dicatat.\n";
        echo "ID Anggota: " . $this->idAnggota . "\n";
        echo "Kode Buku: " . $this->kodeBuku . "\n";
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
        return "ID Peminjaman: " . $this->idPeminjaman .
               " | ID Anggota: " . $this->idAnggota .
               " | Kode Buku: " . $this->kodeBuku .
               " | Tanggal pinjam: " . $this->tanggalPeminjaman .
               " | Tanggal kembali: " . $this->tanggalPengembalian .
               " | Status: " . $this->statusPeminjaman;
    }
}
