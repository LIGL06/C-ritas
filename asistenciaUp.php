<?php
  session_start();
  $centre = $_SESSION['centre'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One|Sumana:700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="master.css">
    <title>Cáritas de Tampico, AC.</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand" style="font-family: 'Rozha One', serif;"><img src="logo.png" class="img-logo"/><span class="blue">Cáritas de Tampico, CA.</span></a>
        </div>
      </div>
    </nav>
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
          <div>
            <h3 class="text-center blue">Nueva Asistencia en: <small><?php echo $centre; ?></small></h3>
            <form style="margin-top:20px;" action="asistenciaUp_POST.php" method="POST">
              <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-l12">
                <label for="nombre">Nombre del Beneficiario</label>
                <input type="text" name="name" class="form-control" required id="name">
              </div>
              <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="address">Domicilio</label>
                <input type="text" name="address" class="form-control" required id="address">
              </div>
              <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label for="family">Int. de Familia</label>
                <input type="number" name="family" class="form-control" required id="family">
              </div>
              <input type="submit" class="btn btn-danger pull-right">
            </form>
          </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
