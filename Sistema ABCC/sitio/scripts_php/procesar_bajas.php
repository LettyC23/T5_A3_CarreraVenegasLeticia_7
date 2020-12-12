<?php

  include('alumnoDAO.php');

  //validacion datos

  $aDAO = new alumnoDAO();

  $nc= $_GET['nc'];
  $aDAO->eliminarAlumno($nc);


?>