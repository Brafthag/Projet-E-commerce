<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Petit test">
        <meta name="author" content="Moi">
        <link rel="SHORTCUT ICON" href="Potion.png">

        <title>Livres de sorts</title>
        
        <!-- Bootstrap core CSS -->
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="Carousel.css" rel="stylesheet">
        <link href="Navbar.css" rel="stylesheet">
        <link href="Text.css" rel="stylesheet">
        <link href="FilterSearch.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jquery pour le slider prix -->
        <link rel="stylesheet" href="jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <div class="row">
            <div class="col-sm-8">
                <p class="text-left">Magic e-quipement magasin de vente d'objet magique en tout genre<p>
            </div>
            <div class="col-sm-4"> 
                <p class="text-right">Service clients : 06 05 04 01 05</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <img src="Potion2.png" width="113" heigth="113">
            </div>
            <div class="col-lg-4"> 
                <h1>Magic E-quipement</h1>
                <div class="search">
                </div>
            </div>
            <div class="col-lg-4"> 
                <div class="nav">
                    <a href="#about">S'enregistrer</a>
                    <a href="Connexion.html"><i class="fa fa-fw fa-user"></i>Connexion</a>
                    <!-- <a href="#contact">Panier</a>
                    <a href="#contact"><img src="Panier.png" width="50" heigth="50"></a> -->
                </div>
            </div>
        </div>
        
        <div class="topnav">
            <a href="Beta.html">Home</a>
            <a href="Nouveautes.html">Nouvautés</a>
            <a href="Potion.html">Potions</a>
            <a href="Parchemins.html">Parchemins</a>
            <a class="active" href="Livres.php">Livres de sorts</a>
            <a href="Accessoires.html">Equipements et accessoires</a>
            <form>
                <input type="text" placeholder="Rechercher" aria-label="Search">
                <button type="submit">Rechercher</button>
            </form>
        </div>

        <div id="container">
            <!-- ----- Filtres de recherche ----- -->
            <div class="filterSearch">
                <div class="blockTitle">FILTRER</div>

                <div class="filter">
                    <!-- Filtre par prix -->
                    <span class="filter-category">Prix</span>
                    <div id="slider-range"></div>
                    <p>
                        <label for="amount"></label>
                        <input type="text" id="amount" readonly>
                    </p>
                    
                
                    <!-- Filtre par note -->
                    <span class="filter-category">Notes</span>
                    <label class="check" id="star5"><span class="choice">5 étoiles</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="check" id="star4"><span class="choice">4 étoiles</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="check" id="star3"><span class="choice">3 étoiles</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="check" id="star2"><span class="choice">2 étoiles</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="check" id="star1"><span class="choice">1 étoile</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <!-- Filtre par marque -->
                    <span class="filter-category">Marques</span>
                    <label class="check" id="seller1"><span class="choice">HPFactory</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="check" id="seller2"><span class="choice">MortalStuff</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="check" id="seller3"><span class="choice">Merlin</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="check" id="seller3"><span class="choice">ScRoll</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <label class="check" id="seller3"><span class="choice">MWander</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                    <div class="submit">
                        <input type="submit" class="btn btn-outline-primary" value="Rechercher">
                    </div>
                    
                </div>
            </div> 
            <!-- -----  ----- -->

            <div class="page">
                
                <!-- <div class="produit">
                    <span class="nomProduit">Les Chroniques de Merlin</span>
                    <div class="illustration"> <img src="img_grimoires/Grimoire1.png" style="position: relative; width: 100%"> </div>
                    <p>La plus grande biographie jamais réalisée sur le grand mage Merlin!</p>
                    <div class="prix"> 89.99€ </div>
                    <div class="placer-panier">
                        <input type="submit" class="btn btn-outline-primary" value="Mettre dans le panier">
                    </div>
                </div>

                <div class="produit">
                    <span class="nomProduit">La Magie pour les nuls!</span>
                    <div class="illustration"> <img src="img_grimoires/Grimoire2.png" style="position: relative; width: 100%"> </div>
                    <p>Tout ce qu'il faut savoir pour apprendre à maîtriser la magie.</p>
                    <div class="prix"> 25€ </div>
                    <div class="placer-panier">
                        <input type="submit" class="btn btn-outline-primary" value="Mettre dans le panier">
                    </div>
                </div>  -->

                <div class="produit">
                <?php
                    include('produit.php');
                    while ($donnees2 = $reponse2->fetch())
                    {
                        echo "<span class=\"nomProduit\">".$donnees2["nomProduit"]."</span>";
                        echo "<div class=\"illustration\"> <img src='".$donnees2["img"]."' style=\"position: relative; width: 100%\"> </div>";
                        echo "<p>".$donnees2["description"]."</p>";
                        echo "<div class=\"prix\">".$donnees2["prix"]."€ </div>";
                        echo "<div class=\"placer-panier\">";
                            echo "<input type=\"submit\" class=\"btn btn-outline-primary\" value=\"Mettre dans le panier\">";
                        echo "</div>";
                    }
                ?>
                </div>
                
            </div>
        </div>

        <?php
            include('produit.php');
        ?>

        <script>
            // js pour le slider
            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 1000,
                    values: [1, 1000],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( ui.values[ 0 ] + "€" + " - " + ui.values[ 1 ] + "€" );
                    }
                });
                $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "€" + " - " + $( "#slider-range" ).slider( "values", 1 ) + "€" );
            } );

        </script> 
    </body>
</html>