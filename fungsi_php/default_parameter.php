<?php
    // Membuat Fungsi/Function dengan Default Parameter
    function perkenalan($salam, $nama) {
        echo $salam." <br>";
        echo "Selamat datang di channel ".$nama."<br>";
        echo "Jangan lupa like, comment, dan subscribe ya:))<br>";
        echo "<hr>";
    }

    // Memanggil fungsi dengan parameter
    perkenalan("Selamat Pagi", "Fanny");

    $salam = "Selamat Sore";
    $nama = "Rachmawati";
    perkenalan($salam, $nama);
?>
