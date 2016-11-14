<?php
  session_start();
  $name = $_POST['name'];
  $address = $_POST['address'];
  $family = $_POST['family'];
  $centre = $_SESSION['centre'];
  include('conection.php');

  mysqli_query($conection,"INSERT INTO `asistance` (`number`,`name`,`address`,`family`,`date`,`centre`) VALUES (null,'$name','$address','$family',CURRENT_TIMESTAMP,'$centre')");
  mysqli_close($conection);
  header('location: asistencia.php');
?>
