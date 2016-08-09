<?php
  function leerDirectorio() {
    /*
    $directorio = opendir("img");
    $cont = 0;
    while ($archivo = readdir($directorio))  {
        if ($archivo == "." || $archivo == "..") {

        }else{
          $cont++;
          $dirArray[] = array ("ID" => $cont, "Imagen" => utf8_encode($archivo), "Desc" => "");
        }

    }*/
    $directorio = scandir("img/");
    $dirArray = array();
    sort($directorio, SORT_NUMERIC);
    $cont = 0;
    foreach ($directorio as $archivo) {
      if ($archivo == "." || $archivo == "..") {
      }else {
        $dirArray[] = array ("ID" => $cont, "Imagen" => utf8_encode($archivo), "Desc" => "");
        $cont++;
      }
    }
    $jsonArray = json_encode($dirArray);
    //print_r($jsonArray);
    return $jsonArray;
  }
  function guardarJson() {
    $json = leerDirectorio();
    //print_r($json);
    $fp = fopen("alexis100.json", 'w');
    fwrite($fp, $json);
    fclose($fp);
  }
  //guardarJson();
?>
