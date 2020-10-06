<?php

$url = 'http://127.0.0.1:3900/api/v1/posts/';
$fetchPosts = file_get_contents($url);

$decodedPost = json_decode($fetchPosts,true);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">

    <style>
        .wording-container {
            margin-top: 60px;
        }

        .btn.btn-success.btnSubmit {
            width:150px;
        }

        .col-md-6.register-form {
            padding-left: 0px !important;
        }

    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <div class="row">
            <div class="container register-form">
                <div class="form">
                    <div class="note">
                        <h3>Register !</h2>
                    </div>

                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-12">
                            <form action="http://127.0.0.1:3900/api/v1/users/add" method="post">
                                <!--<input type="hidden" name="_method" value="put" />-->
                                <div class="col-md-6 register-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" value="" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email *" value="" name="email" />
                                    </div>
                                </div>
                                <div class="col-md-6 register-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Password *" value="" name="password" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btnSubmit">Sign up</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Example row of columns -->
        <div class="row wording-container">
            <div class="col-md-12">
                <hr>
            </div>
            <?php
            foreach($decodedPost as $post) {
                echo '<div class="col-md-4">';
                echo '<h2>' . $post['title'] . '</h2>';
                echo '<p>' . $post['body'] . '</p>';
                echo '<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>';
                echo '</div>';
            }
            ?>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Company 2020-2021</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
