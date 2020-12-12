<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Iniciar Sesion</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type="text/css" media='screen' href="..sitio/estilos/login.css">
        
    </head>

    <body> 

        <?php
          require_once('header.html');
       ?>
        <div class="wrapper fadeInDown">

        
            <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Iniciar </h2>
        
            
        
            <!-- Login Form -->
            <form id="login-form" class="form" action="../sitio/scripts_php/validar_usuario.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="caja_usuario" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="caja_password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" >
                                <a href="registro.php" class="text-info">Register here</a>
                            </div>
                        </form>
        
            </div>
        </div>
    </body>
</html>