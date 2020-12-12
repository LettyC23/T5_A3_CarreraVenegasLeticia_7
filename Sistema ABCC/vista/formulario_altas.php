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
      
    <title>Alta alumnos</title>

    </head>
  <body>
        <!--//agrega lo de header primero y luego lo de abajo-->
      <?php 
            require_once('header.html');

            echo "<p style=\"text-align:center; color:red;\"> REGISTRO......... </p>";
      ?>

      <h4 style="background-color:#29C053;
      text-align:center;
      padding:15px;
      margin-botton:15px;
      border: 0px;"> AGREGAR ALUMNOS</h4>
      
      <form method="POST" action="../sitio/scripts_php/procesar_altas.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Num Control</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Numero de control" name="caja_num_control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Solo letras" name="caja_nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Primer Apellido</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Solo letras" name="caja_primer_ap">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Segundo Apellido</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Solo letras" name="caja_segundo_ap">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Edad</label>
      <input type="text" class="form-control" id="Solo numeros" name="caja_edad">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Semestre</label>
      <select id="inputState" class="form-control" name="select_semestre">
        <option selected>Elige opcion...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Carrera</label>
      <input type="text" class="form-control" id="inputZip" name="caja_carrera">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" >AGREGAR ALUMNO</button>
</form>
      

  </body>
</html>