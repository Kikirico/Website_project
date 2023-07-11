<?php
$konek = mysqli_connect("localhost", "root", "", "web");
$sql = mysqli_query($konek, "select * from tb_sensor order by id desc limit 1");
$data = mysqli_fetch_array($sql);
$nilai = $data["suhu"];
echo $nilai;
?>