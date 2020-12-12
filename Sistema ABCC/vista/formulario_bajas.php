<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
    <title>BAJA ALUMNOS</title>

    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 90%;
        }
        #customers td, #customers th{
          border: 1px solid #ddd;
          padding:8px;
        }

        #customers tr:nth-child(even){background-color:#f2f2f2;}

        #customers tr:hover {background-color: #ddd}

        #customers th{
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
    </style>
    </head>
  <body>
        <!--//agrega lo de header primero y luego lo de abajo-->
      <?php 
            require_once('header.html');

      ?>

      <h4 style="background-color: red;
      text-align:center;
      padding:15px;
      margin-botton:15px;
      border: 0px;"> ELIMINAR ALUMNOS</h4>
      
   <table  id="customers">

      <tr> <th>Num. Control</th><th>Nombre</th><th>Primer Ap.</th><th>Segundo Ap.</th><th>Edad</th><th>Semestre</th><th>Carrera</th><th>ACCIONES</th></tr>
      
      <?php

        include('../sitio/scripts_php/conexion_bd.php');

        $con = new ConexionBD();
        $conexion = $con->getConexion();

        $sql = "SELECT * FROM alumnos2";

        $res = mysqli_query($conexion, $sql);

        //var_dump($res);

        if(mysqli_num_rows($res)>0){
          while($fila = mysqli_fetch_assoc($res)){
                printf("<tr><td>".$fila['Num_Control']."</td>".
                "<td>".$fila['Nombre_Alumno']."</td>".
                "<td>".$fila['Primer_Ap_Alumno']."</td>".
                "<td>".$fila['Segundo_Ap_Alumno']."</td>".
                "<td>".$fila['Edad']."</td>".
                "<td>".$fila['Semestre']."</td>".
                "<td>".$fila['Carrera']."</td>".
                "<td> <a href='../sitio/scripts_php/procesar_bajas.php?nc=%s'>ELIMINAR </a> </td> </tr>", $fila['Num_Control']
              );
          }
        }else{
          echo ('no hay datos');
        }

      ?>
  
  </table>

  </body>
</html>