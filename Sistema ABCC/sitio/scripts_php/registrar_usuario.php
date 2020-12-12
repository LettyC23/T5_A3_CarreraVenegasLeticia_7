<?php

    include('../scripts_php/conexion_bd_usuarios.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if($conexion){

        $u = $_POST['caja_usuario'];
        $p = $_POST['caja_password'];

        if(empty($u)|| empty($p)){
            echo "<p style='color:red;'>campos vacios</p>";
        }else{

        $u_cifrado = sha1($u);
        $p_cifrado = sha1($p);

        //echo $u_cifrado;

        $sql = "SELECT * FROM usuarios WHERE usuario='$u_cifrado' AND password='$p_cifrado'";

        $res = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($res)==1){
            echo "<p style='color:green;'>Ya existe usuario</p>";
        }else{
            $sql2="INSERT INTO Usuarios VALUES(sha1('$u'), sha1('$p'))";
            mysqli_query($conexion, $sql2);
            header('location:../vista/login_usuario.php');
        }

    }
}

?>