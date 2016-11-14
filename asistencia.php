<?php
  session_start();
  $centre = $_SESSION['centre'];
  $today = date('Y-m-d');
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
            <h1 class="text-center blue" id="date">Asistencia del: <small><?php echo $today;?></small> en: <small><?php echo $centre;?></small></h1>
          </div>
          <?php
               include('conection.php');
               $query = $conection->query("SELECT * FROM asistance WHERE date LIKE '%$today%' AND centre LIKE '%$centre%'");
               if ($query->num_rows>0) {
                 echo'
                 <table class=" table table-responsive table-stripped">
                   <thead>
                     <tr>
                       <th>N°</th>
                       <th>Nombre</th>
                       <th>Domicilio</th>
                       <th>Int. de Familia</th>
                       <th>Fecha</th>
                       <th>Centro de reparto</th>
                     </tr>
                   </thead>
                   <tbody>
                 ';
                 while ($row = $query->fetch_assoc()) {
                   echo '<tr><td>'.$row['number'].'</td><td>'.$row['name'].'</td><td>'.$row['address'].'</td><td>'.$row['family'].'</td><td>'.$row['date'].'</td><td>'.$row['centre'].'</td></tr>';
                 }
                 echo '</tbody></table>';
               }else {
                 echo '<h2>0 Resultados...</h2>';
               }
               $conection->close();
            ?>
            <div class="form-group">
              <a href="asistenciaUp.php" class="btn pull-right blue">Crear nueva</a>
              <a href="asistenciaFind.php" class="btn pull-left blue">Filtrar asistencias</a>
            </div>
        </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>
