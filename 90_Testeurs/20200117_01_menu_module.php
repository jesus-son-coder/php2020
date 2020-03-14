<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <!-- Librairies de Style -->
  <!-- ------------------- -->
  <link rel="stylesheet" href="./00_Librairies/01_01_Bootstrap_4/css/bootstrap.min.css">
  <link rel="stylesheet" href="">

</head>
<body>

<?php
$var1 = false;
var_dump($var1);

$var2 = "false";
var_dump(boolval($var2));

if($var2 == "false") {
    $var3 = false;
    var_dump(boolval($var3));
}

?>

  <!-- Librairies JavaScrip -->
  <!-- -------------------- -->
  <script src="./00_Librairies/01_00_jquery/jquery_3_3_1.js"></script>
  <script src="./00_Librairies/01_01_Bootstrap_4/js/bootstrap.min.js"></script>
</body>
</html>