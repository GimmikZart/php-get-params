<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nome e Cognome</title>
    <?php

      $nomeUtente = $_GET["nome"];
      $cognomeUtente = $_GET["cognome"];

    ?>
  </head>
  <body>

    <?php
      echo "Ciao" .
            " " .
            $nomeUtente .
            " " .
            $cognomeUtente ;
    ?>

  </body>
</html>
