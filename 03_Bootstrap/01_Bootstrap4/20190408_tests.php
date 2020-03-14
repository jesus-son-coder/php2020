<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 4</title>
  <!-- Librairies de Style -->
  <!-- ------------------- -->
  <link rel="stylesheet" href="/tests/00_Librairies/01_01_Bootstrap_4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/app.css">

</head>
<body>
<div class="container">
    <h1 class="display-3 mt-4 learning-heading-top-container-1"><strong>Le "Display Heading" avec Bootstrap 4</strong></h1>

    <!-- La classe "display-4" -->
    <h1 class="display-4">h1 - Display 4</h1>
    <h2 class="display-4">h2 - Display 3</h2>
    <p class="display-4">p - Display 2</p>

    <div class="card bg-light col-md-12 mt-4">
        <p>
            Le Display heading propose une alternance de 4 tailles allant de display-4 (la plus haute) à display-1 (la plus basse).
        </p>
        <h1 class="display-4">Display 4</h1>
        <h1 class="display-3">Display 3</h1>
        <h1 class="display-2">Display 2</h1>
        <h1 class="display-1">Display 1</h1>
    </div>

    <div class="separator-t5-b5">
        <mark class="display-4 lead">Display 2</mark>
    </div>

    <div class="separator-t5-b5">
        <div class="jumbotron">
            <h1 class="display-3">Adminstration Space</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="m-y-md">
            It uses utility classes for typography and spacing to space content out within the larger container.
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="footer mt-4"></div>
</div>
  <script src="/tests/00_Librairies/01_00_jquery/jquery_3_3_1.js"></script>
  <script src="/tests/00_Librairies/01_01_Bootstrap_4/js/bootstrap.min.js"></script>
</body>
</html>