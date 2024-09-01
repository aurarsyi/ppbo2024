<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
$waktu_menit = date('i');
$waktu_detik = date('s');

echo "Selamat pagi{$nama} sekarang pukul {$waktu}\n";

