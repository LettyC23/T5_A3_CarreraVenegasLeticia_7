<?php

    include('../sitio/scripts_php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $cadena_JSON = file_get_contents('php://input'); // prepara PHP para recibir informacion a traves de HTTP

        //if($cadena_JSON == false){
          //  echo "No hay peticion HTTP";
        //}else{
            $filtro = json_decode($cadena_JSON, TRUE);

            $sql = "SELECT * FROM alumnos2";
    
            $res = mysqli_query($conexion, $sql);
    
            //var_dump($res);

            $datos['alumnos'] = array();
            if($res){
                //todo bien
                while($fila = mysqli_fetch_assoc($res)){
                    $alumno = array();

                    $alumno['nc'] = $fila['Num_Control'];
                    $alumno['n'] = $fila['Nombre_Alumno'];
                    $alumno['pa'] = $fila['Primer_Ap_Alumno'];
                    $alumno['sa'] = $fila['Segundo_Ap_Alumno'];
                    $alumno['e'] = $fila['Edad'];
                    $alumno['s'] = $fila['Semestre'];
                    $alumno['c'] = $fila['Carrera'];

                    array_push($datos['alumnos'], $alumno);

                    echo json_encode($datos);
                }
            }else{
                //todo mal
                
            //}
        }
        
    }
?>