<?php
  include('conexion_bd.php');

  class AlumnoDAO{
      private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }

      //===============METODOS PARA ABCC ===============

      //------------------------------- ALTAS ------------------------------------------------------------

      public function agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
          $sql= "INSERT INTO alumnos2 VALUES('$nc','$n','$pa','$sa', $e, $s,'$c');";
          if(mysqli_query($this->conexion->getConexion(),$sql)  ){
              echo("<script> alert('Agregado con Exito')</script>");
              //header('location:../vista/formulario_altas.php');
              //echo "PREFECTO, CASI SOY ISC =)";
          }else{
              echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
              echo mysqli_error($this->conexion->getConexion());
          }
      }//agregar

      //------------------------------ BAJAS -----------------------------------

      public function eliminarAlumno($nc){
        $sql= "DELETE FROM alumnos2 WHERE num_Control ='$nc'";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            echo("<script> alert('Eliminado con EXITO')</script>");
            //header('location:../vista/formulario_bajas.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar


    //----------------------------- MODIFICAR ---------------------------------

    public function modificarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
        $sql= "UPDATE alumnos2 SET Nombre_Alumno='$n',Primer_Ap_Alumno='$pa',Segundo_Ap_Alumno='$sa',Edad=$e,Semestre=$s,Carrera='$c' WHERE Num_Control='$nc';";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            //echo("<script> alert('Agregado con Exito')</script>");
           // header('location:../vista/formulario_cambios.php');
            //echo $sql;
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
            echo $sql;
        }
    }//modificar

  }
?>