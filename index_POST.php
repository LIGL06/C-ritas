<?php
  session_start();
  $_SESSION['centre'] = $_POST['centre'];
  header('location: asistencia.php');
 ?>
