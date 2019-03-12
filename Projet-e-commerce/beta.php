<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Petit test">
    <meta name="author" content="Moi">
    <link rel="SHORTCUT ICON" href="Potion.png">

    <title>Beta test</title>
    <!-- Bootstrap core CSS -->

    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="Carousel.css" rel="stylesheet">
    <link href="Navbar.css" rel="stylesheet">
    <link href="Text.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
// fichier php qui fait le header
 include "header.php";
?>

    <main role="main">
      <div class="jumbotron">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="Potion1.png" alt="First slide">
                    <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Le plus populaire</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir l'article</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="Potion3.png" alt="Second slide">
                    <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>A consommer sans attendre</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir l'article</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="Potion4.png" alt="Third slide">
                    <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Le best du best</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir l'article</a></p>
                    </div>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
       </div>
     </div>

    <div class="row">
        <div class="col-sm-4">
            <img src="armure.png">
        </div>

        <div class="col-sm-8">
            <blockquote>
                <h1 class='text-right'>"Une armure quand on en a pris l'habitude devient aussi confortable qu'une robe de chambre."</h1>
                <h1>"Le temps qui apporte des remèdes aux maux les rend quelquefois incurables."</h1>
                <footer> chuck norris</footer>
            </blockquote>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir les articles</a></p>
        </div>
    </div>
    <div class="blanc"><p></p></div>
    <div class="row">
            <div class="col-sm-4">
            <img src="livre.png" width='390' heigth='390'>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir les articles</a></p>
        </div>

        <div class="col-sm-8">
            <blockquote>
                <h1 class='text-right'>"Les livres de magic e-quipement sont les meilleurs du marché"</h1>
                <footer>Merlin</footer>
                <h1>"J'achete tout mes livres pour mon ecole sur magic e-quipement"</h1>
                <footer>Albus Dumbledore</footer>
            </blockquote>
        </div>
    </div>

    <!--<div class="jumbotron">
        <div class="container">
            <div id="slider">
                <figure>
                    <img src="Potion1.png" width="1200" heigth="361.45" alt>
                    <img src="Potion3.png" width="1200" heigth="361.45" alt>
                    <img src="Potion4.png" width="1200" heigth="361.45" alt>
                    <img src="Potion5.png" width="1200" heigth="361.45" alt>
                    <img src="Potion6.png" width="1200" heigth="361.45" alt>
                </figure>
            </div>
        </div>
    -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>