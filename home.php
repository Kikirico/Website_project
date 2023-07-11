<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>

    <title>Kelompok_V</title>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ceksensor").load('ceksensor.php');
            }, 1000);
        });
    </script>


<script type="text/javascript">
    var refreshid = setInterval(function(){
        $('#responsecontainer').load('data.php');
    }, 1000);
</script>
</head>
<body>
  <!--  <nav class="navbar navbar-yellow bg-yellow"> -->
   <!-- <div class="container" style="text-align: center; padding-top: 1%; width: 500px">-->
  <!--  <div class="container-fluid">=-->
   <!-- <a class="navbar-brand" href="#"><img src="https://i0.wp.com/ft.unwir.ac.id/wp-content/uploads/2022/01/logo-ft-png.png?resize=640%2C610&ssl=1" alt="" width="30" height="30" class="d-inline-block align-text-top"><b>Teknik Komputer</b></a>-->
   <!-- </div>-->
      <!--  <h2>nilai sensor</h2>
            <div class="panel panel-default">
            <div class="panel-body">
            <h1> <span id="ceksensor"></span>c </h1>
        </div>
        </div>
    </div>-->
<!--</nav>-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <strong> <!--buat text-->
      <a class="navbar-brand" href="index.php">
        <img src="ft.webp" style="width: 40px; height: 40px;">KELOMPOK 5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-sm-0">
        <li class="nav-item">
      <h2> <a class="nav-link active" href="home.php">Home</a> </h2>
        </li>
        <li class="nav-item">
      <h2> <a class="nav-link active" href="anggota.php">Anggota</a></h2>
    </strong>
        </li>
          </ul>
        </li>
      </li>
    </div>
  </div>
</nav>








<div class="container" style="text-align: center; padding-top: 2%; width: 500px;">
            <div class="panel panel-default">
              <div class="panel-body">
              <h2>Suhu Sekitaran</h2>
            <h1 href="card-text"> <span id="ceksensor"></span> °C</h1> 
            </div>
            </div>         
  </div>
    <div class="container" style="text-align: center; padding-top: 2%">
              <h2>Menampilkan 5 data terakhir</h2>
    </div>
    <div class="container">
        <div class="container" id="responsecontainer" style="width: 85%; text-align: center"></div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>

</body>
</html>


