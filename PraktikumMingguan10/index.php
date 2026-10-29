<?php

require_once __DIR__ . "/Buku.php";
require_once __DIR__ . "/Anggota.php";
require_once __DIR__ . "/Peminjaman.php";

$buku = new Buku(
    "BK001",
    "Pemrograman Berorientasi Objek",
    "Budi Santoso",
    2024
);

$anggota = new Anggota(
    "AG001",
    "Nadia Putri",
    "Pontianak",
    "081234567890"
);

$peminjaman = new Peminjaman(
    "PJ001",
    $buku,
    $anggota,
    date("Y-m-d")
);

ob_start();

echo "========== DATA ANGGOTA ==========\n";
echo $anggota->getDetailAnggota() . "\n\n";

echo "========== DATA BUKU ==========\n";
echo $buku->getDetailBuku() . "\n\n";

echo "========== PROSES PEMINJAMAN ==========\n";
$peminjaman->catatPeminjaman();

echo "\n========== PROSES PENGEMBALIAN ==========\n";
$peminjaman->catatPengembalian(date("Y-m-d"));

echo "\n========== DETAIL AKHIR TRANSAKSI ==========\n";
echo $peminjaman->getDetailPeminjaman() . "\n";

$hasil = ob_get_clean();
?>

<pre><?php echo htmlspecialchars($hasil); ?></pre>
