<?php

// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }


// function perkenalan($nama, $salam = "Assalamualaikum")
// {
//     echo "$salam, ";
//     echo "Perkenalkan, nama saya $nama<br/>";

//     echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun <br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// perkenalan("Nero", "Hallo");

// echo "<hr>";
// $saya = "Ratna";
// $ucapSalam = "Selamat Pagi";

// perkenalan($saya);

function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
?>