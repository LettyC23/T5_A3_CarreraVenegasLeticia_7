<?php
 session_start();
 if($_SESSION['autenticado'] == false){
     header("location:../vista/login_usuario.php");
 }
  

  include('../sitio/scripts_php/alumnoDAO.php');

  //validacion datos

  $aDAO = new alumnoDAO();

  $nc= $_GET['nc'];
  $n= $_GET['n'];
  $pa= $_GET['pa'];
  $sa= $_GET['sa'];
  $e= $_GET['e'];
  $s= $_GET['s'];
  $c= $_GET['c'];


  //$aDAO->modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c);
  require_once('../vista/header.html');

echo"<h3 style='background-color:#4CAF50; text-align:center;
padding:15px; margin-bottom:15px; border:0px; color:white;'>MODIFICAR ALUMNO</h3>
<form method='POST' action='../sitio/scripts_php/procesar_cambios.php?nc=$nc'>



<div class='form-row'>
        <div class='form-group col-md-6'>
           <label for='inputEmail4'>Numero de control</label>
           <input type='text' class='form-control' id='inputEmail4' placeholder='Numero de control' name='caja_num_control' disabled='disabled' value='$nc'>
         </div>
<div class='form-group col-md-6'>
         <label for='inputPassword4'>Nombre</label>
         <input type='text' class='form-control' id='inputPassword4' placeholder='Nombre' name='caja_nombre' value='$n'>
        </div>
</div>
    <div class='form-group'>
  <label for='inputAddress'>Primer Apellido</label>
  <input type='text' class='form-control' id='inputAddress' placeholder='solo letras' name='caja_primer_ap' value='$pa'>
</div>
<div class='form-group'>
  <label for='inputAddress2'>Segundo Apellido</label>
  <input type='text' class='form-control' id='inputAddress2' placeholder='solo letras' name='caja_segundo_ap' value='$sa'>
</div>
<div class='form-row'>
  <div class='form-group col-md-6'>
    <label for='inputCity'>Edad</label>
    <input type='text' class='form-control' id='Solo numeros' name='caja_edad' value='$e'> 
  </div>
  <div class='form-group col-md-4'>
    <label for='inputState'>Semestre</label>
    <select id='inputState' class='form-control' name='select_semestre' >
      <option"; ?>
      <?php
      if($s=='1'){
          echo "selected";
      }  
      echo ">1</option>
      <option"; ?>
      <?php
      if($s=='2'){
          echo "selected";
      }  
      echo ">2</option>
      <option"; ?>
      <?php
      if($s=='3'){
          echo "selected";
      }  
      echo ">3</option>
      <option"; ?>
      <?php
      if($s=='4'){
          echo "selected";
      }  
      echo ">4</option>
      <option"; ?>
      <?php
      if($s=='5'){
          echo "selected";
      }  
      echo ">5</option>
    </select>
  </div>
  <div class='form-group col-md-2'>
    <label for='inputZip'>Carrera</label>
    <input type='text' class='form-control' id='inputZip' name='caja_carrera' value='$c'>
  </div>
</div>
  <button type='submit' class='btn btn-primary'>GUARDAR MODIFICACIONES</button>
</form>

";

?>