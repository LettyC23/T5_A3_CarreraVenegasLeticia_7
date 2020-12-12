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
            $n = $datos['n'];
            $pa = $datos['pa'];
            $sa = $datos['sa'];
            $e = $datos['e'];
            $s = $datos['s'];
            $c = $datos['c'];
    
            $sql = "INSERT INTO alumnos2 VALUES('$nc','$n','$pa','$sa','$e','$s','$c')";
    
            $res = mysqli_query($conexion, $sql);
    
            $respuesta = array();
            if($res){
                //todo bien
                $respuesta['exito'] = true;
                $respuesta['mensaje'] = "Inserccion correcta";
                echo json_encode($respuesta);
                //var_dump($cad);
            }else{
                //todo mal
                $respuesta['exito'] = false;
                $respuesta[] = "Insercion incorrecta";
                echo json_encode($respuesta);
                var_dump($cad);
            }
        }
        
    }
?>