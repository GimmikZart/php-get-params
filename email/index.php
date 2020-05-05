<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email validator</title>
    <?php
      $emailUtente = $_GET["email"];
    ?>
  </head>
  <body>

    <?php
    $spot = ".";
    $slug = "@";
    $findspot = strpos($emailUtente, $spot);
    $findslug = strpos($emailUtente, $slug);

    if ($findspot == true && $findslug == true){
      echo "OK";
    } else {
      echo "NO";
    }

    ?>

  </body>
</html>
