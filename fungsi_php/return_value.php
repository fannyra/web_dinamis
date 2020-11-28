<?php
    // Membuat Fungsi yang Mengembalikan Nilai
    function hitungUmur($tgl_lahir) {
        $umur = date('Y') -$tgl_lahir;
        return $umur;
    }

    // Memanggil fungsi dengan Return
    echo "Umur saya adalah ".hitungUmur(2001);
?>