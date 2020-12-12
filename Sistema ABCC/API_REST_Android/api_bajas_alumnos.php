<?php

    include('../sitio/scripts_php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $cadena_JSON = file_get_contents('php://input'); // prepara PHP para recibir informacion a traves de HTTP

        if($cadena_JSON == false){
            echo "No hay peticion HTTP";
        }else{
            $datos = json_decode($cadena_JSON, TRUE);

            $nc = $datos['nc'];
    
            $sql= "DELETE FROM alumnos2 WHERE num_Control ='$nc'";
    
            $res = mysqli_query($conexion, $sql);
    
            $respuesta = array();
            if($res){
                //todo bien
                $respuesta['exito'] = true;
                $respuesta['mensaje'] = "Eliminación correcta";
                echo json_encode($respuesta);
                //var_dump($cad);
            }else{
                //todo mal
                $respuesta['exito'] = false;
                $respuesta[] = "Eliminación incorrecta";
                echo json_encode($respuesta);
                var_dump($cad);
            }
        }
        
    }
?>