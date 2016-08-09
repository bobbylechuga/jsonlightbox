<?php
  echo $_POST['id']." / ". $_POST['desctext'];
  $jsonString = file_get_contents('alexis100.json');
  $data = json_decode($jsonString);
  foreach ($data as $key) {
    if ($key->ID == $_POST['id']) {
      $descLimpio = trim(preg_replace('/\s\s+/', ' ', $_POST['desctext']));
      $key->Desc = htmlentities($descLimpio);
    }
  }
  $newJsonString = json_encode($data);
  file_put_contents('alexis100.json', $newJsonString);
?>
