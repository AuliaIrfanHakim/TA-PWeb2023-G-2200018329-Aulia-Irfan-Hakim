<?php
    $arrHarga = array("Buku" => 3000, "Polpen" => 2000, "Penggaris" => 1500, "Spidol" => 4000);
    echo "Menampilkan isi array asosiatif menggunakan foreach: <br>";
    foreach ($arrHarga as $barang => $harga) {
        echo "Harga $barang = $harga<br>";
    }

    echo "<br>Menampilkan isi array asosiatif menggunakan WHILE dan LIST: <br>";
    reset($arrHarga);
    $tempArr = array();
    foreach ($arrHarga as $key => $value) {
        $tempArr[] = array($key, $value);
    }
    $index = 0;
    while ($index < count($tempArr)) {
        list($barang, $harga) = $tempArr[$index];
        echo "Harga $barang = $harga<br>";
        $index++;
    }
?>