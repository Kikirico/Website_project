<?php
    $konek = mysqli_connect("localhost", "root", "", "web");
    //membaca id
//membaca informasi seluruh data
$sql_ID = mysqli_query($konek, "SELECT MAX(ID) FROM tb_sensor");
$data_ID = mysqli_fetch_array($sql_ID);
$ID_akhir = $data_ID['MAX(ID)'];
$ID_awal = $ID_akhir -4;
    $tanggal = mysqli_query($konek, "SELECT tanggal FROM tb_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
    $suhu = mysqli_query($konek, "SELECT suhu FROM tb_sensor WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
?>

<!--TAmpilan unutk grafik-->
<div class="panel panel-primary">
    <div class="panel-heading">
        GRAFIK
    </div>
    <div class="panel-body">
        <canvas id="myChart"></canvas>
        <script type="text/javascript">
            var canvas = document.getElementById('myChart');
            var data = {
                labels : [
                    <?php
                    while($data_tanggal = mysqli_fetch_array($tanggal))
                    {
                        echo '"'.$data_tanggal['tanggal'].'",' ;
                    }
                    ?>
                ],
                datasets : [{
                    label : "Suhu",
                    file : true,
                    backgroundColor: "rgba(138, 240, 133, .2)",
                    borderColor : "rgba(52, 231, 43, 1)",
                    lineTension : 0.5,
                    pointRadius : 5,
                    data : [
                        <?php
                        while($data_suhu = mysqli_fetch_array($suhu))
                        {
                            echo $data_suhu['suhu'].',' ;
                        }
                        ?>
                    ]
                }]
            };
            var option ={
                showLines : true,
                animation : {duration : 5}
            };
            var myLineChart = Chart.Line(canvas,{
                data : data,
                options : option
            });
        </script>
    </div>
</div>