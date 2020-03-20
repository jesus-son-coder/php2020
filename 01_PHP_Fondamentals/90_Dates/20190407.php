<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <!-- Librairies de Style -->
  <!-- ------------------- -->
  <link rel="stylesheet" href="/tests/00_Librairies/01_01_Bootstrap_4/css/bootstrap.min.css">
  <link rel="stylesheet" href="">

</head>
<body>
<div class="container">
  <h1>Kit Tools Dates & Time</h1>


  <?php
  $maDate = new \DateTime();
  print_r(date('Y-m-d', $maDate->getTimestamp()));die();


  ?>
</div>
  <script src="/tests/00_Librairies/01_00_jquery/jquery_3_3_1.js"></script>
  <script src="/tests/00_Librairies/01_01_Bootstrap_4/js/bootstrap.min.js"></script>
</body>
</html>