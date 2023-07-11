<?php
//kirm data dari nodmcu ke database/codingan ide (GRAFIK)
    $konek =mysqli_connect("localhost", "root", "", "web");
    $suhu = $_GET["suhu"];
    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    $simpan = mysqli_query($konek, "INSERT INTO tb_sensor(suhu)VALUES('$suhu')");
    if($simpan)
    echo "Berhasil Disimpan";
    else
    echo "Gagal Disimpan";
?>


