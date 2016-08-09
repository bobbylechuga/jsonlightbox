<?php
  include('funciones.php');
  if (!file_exists('alexis100.json')) {
    guardarJson();
  }
  $ArchivoJson = json_decode(file_get_contents('alexis100.json'));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>Alexis 100 partidos</h1>

      <?php
      $html = "";
        $cont = 1;
        foreach ($ArchivoJson as $key) {
          $html .= '
          <form id="guardarDescripcion'.$key->ID.'">
            <div class="row contenido">
              <img class="img-responsive" src="img/'.$key->Imagen.'">
              <div class="form-group tex-editar">
                <label for="comment">'.$cont.' - '.$key->Imagen.' Descripci&oacute;n:</label>
                <textarea name="desctext" class="form-control" rows="5" id="descripcion">'.$key->Desc.'</textarea>
                <button id="guardar" type="submit" class="btn btn-primary btn-lg" >Guardar</button>
                <input type="hidden" id="id" name="id" value="'.$key->ID.'">
              </div>
            </div>
          </form>
          ';
          $cont++;
        }
        echo $html;
      ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
