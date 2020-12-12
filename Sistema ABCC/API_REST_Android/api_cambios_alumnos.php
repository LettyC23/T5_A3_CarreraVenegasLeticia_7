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

        $sql= "UPDATE alumnos2 SET Nombre_Alumno='$n',Primer_Ap_Alumno='$pa',Segundo_Ap_Alumno='$sa',Edad=$e,Semestre=$s,Carrera='$c' WHERE Num_Control='$nc';";

        $res = mysqli_query($conexion, $sql);

        $respuesta = array();
        if($res){
            //todo bien
            $respuesta['exito'] = true;
            $respuesta['mensaje'] = "Modificación correcta";
            echo json_encode($respuesta);
            //var_dump($cad);
        }else{
            //todo mal
            $respuesta['exito'] = false;
            $respuesta[] = "Modificación incorrecta";
            echo json_encode($respuesta);
            var_dump($cad);
        }
    }
    
}
?>