<?php
    // Membuat Fungsi hitungUmur
    function hitungUmur($tgl_lahir) {
        $umur = date('Y') - $tgl_lahir;
        return $umur;
    }

    function perkenalan($channel, $salam="Selamat Pagi") {
        echo $salam."<br>";
        echo "Selamat datang di channel ".$channel."<br>";
        // Memanggil fungsi lain
        echo "Sekarang youtuber berusia ".hitungUmur(2001). " tahun<br>";
        echo "Nice to meet you...";
    }

    //Memanggil fungsi perkenalan
    perkenalan("Fanny");
?>