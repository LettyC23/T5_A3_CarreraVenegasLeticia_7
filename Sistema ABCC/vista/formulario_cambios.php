
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>MODIFICAR ALUMNOS</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
        <style>
    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    }
    </style>

    </head>

    <body>

    <?php
       require_once('header.html');

      

    ?>
    <h3 style="background-color:blue; text-align:center;
    padding:15px; margin-bottom:15px; border:0px; color:white;">MODIFICAR ALUMNO</h3>
   

   <table id="customers">
      <tr> <th>Num. Control</th> 
           <th>Nombre</th> 
           <th>Primer Ap.</th> 
           <th>Segundo Ap.</th>
           <th>Edad</th> 
           <th>Semestre</th> 
           <th>Carrera</th> 
           <th>ACCIONES</th>
        </tr>

           <?php
              include('../sitio/scripts_php/conexion_bd.php');
              $con = new ConexionBD();
              $conexion = $con->getConexion();

              $sql = "SELECT * from alumnos2";

              $res = mysqli_query($conexion , $sql);

              //var_dump($resultado);
              if(mysqli_num_rows($res)>0){
                        //mysqli_fetch_row
                  while($fila=mysqli_fetch_assoc($res)){
                            printf("<tr><td>".$fila['Num_Control']."</td>".
                            "<td>".$fila['Nombre_Alumno']."</td>".
                            "<td>".$fila['Primer_Ap_Alumno']."</td>".
                            "<td>".$fila['Segundo_Ap_Alumno']."</td>".
                            "<td>".$fila['Edad']."</td>".
                            "<td>".$fila['Semestre']."</td>".
                            "<td>".$fila['Carrera']."</td>".
                                   "<td> <a href='../vista/formulario_modificacion.php?nc=%s&n=%s&pa=%s&sa=%s&e=%s&s=%s&c=%s'>MODIFICAR</a> </td> </tr>", $fila['Num_Control'],$fila['Nombre_Alumno'],$fila['Primer_Ap_Alumno'],$fila['Segundo_Ap_Alumno'],$fila['Edad'],$fila['Semestre'],$fila['Carrera']         
                                

                                   
                      );
                  }
              }else{
                  echo ('No hay datos');
              }

           ?>

      

   </table>
        

        
    </body>

</html>