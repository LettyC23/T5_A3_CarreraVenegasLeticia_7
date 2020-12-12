<?php

  include('alumnoDAO.php');
  //validacion de datos

  $nc = $_GET['nc'];
  $n = $_POST['caja_nombre'];
  $pa = $_POST['caja_primer_ap'];
  $sa = $_POST['caja_segundo_ap'];
  $e = $_POST['caja_edad'];
  $s=$_REQUEST['select_semestre'];
  $c = $_POST['caja_carrera'];

  $aDAO = new alumnoDAO();

  $aDAO->modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c);




?>