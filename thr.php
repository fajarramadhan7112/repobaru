<?php

// Input jumlah pemakaian air
$pemakaian_air = 65; // ganti dengan input yang sesuai

// Inisialisasi variabel biaya
$biaya = 0;

// Biaya untuk 25 m3 pertama
if ($pemakaian_air <= 25) {
  $biaya += $pemakaian_air * 150;
} else {
  $biaya += 25 * 150;
  $pemakaian_air -= 25;
}

// Biaya untuk 25 m3 kedua
if ($pemakaian_air > 0) {
  if ($pemakaian_air <= 25) {
    $biaya += $pemakaian_air * 170;
  } else {
    $biaya += 25 * 170;
    $pemakaian_air -= 25;
  }
}

// Biaya untuk 25 m3 ketiga dan seterusnya
if ($pemakaian_air > 0) {
  $biaya += $pemakaian_air * 250;
}

// Output total biaya tagihan
echo "Total biaya tagihan pelanggan: Rp. " . number_format($biaya, 0, ',', '.') . "\n";
