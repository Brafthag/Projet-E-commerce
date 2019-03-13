<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta charset="ISO-8859-1"> 
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
    <link href="Stars.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>




<?php include "header.php";?>

<div class="w3-row">
    <div class="w3-col m4 l3">
    <div class="w3-bar-block w3-light-gray">
        <h2 class="w3-center"> Wesh alors</h2>
        <input type="text" placeholder="Rechercher" onkeyup="tri()"  id="myInput" aria-label="Search">
        </br>
        <span class="filter-category">Prix</span>
        <p>
            <label for="amount"></label>
            <input type="text" id="amount" readonly class="w3-light-gray" style="border : none">
        </p>
            <div id="slider-range"></div>
        <br>
        <p>Filtrer par prix :</p>  
        <ul class="rate-area w3-bar-item">
        <input type="radio" id="5-star" name="rating" value="5" /><label for="5-star" title="Amazing">5 stars</label>
        <input type="radio" id="4-star" name="rating" value="4" /><label for="4-star" title="Good">4 stars</label>
        <input type="radio" id="3-star" name="rating" value="3" /><label for="3-star" title="Average">3 stars</label>
        <input type="radio" id="2-star" name="rating" value="2" /><label for="2-star" title="Not Good">2 stars</label>
        <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star" title="Bad">1 star</label>
	</ul>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    </div>

    <div class= 'w3-col m8 l9'>
<?php



    include "connexion.php";
    echo "<ul id ='myUl'>";
    $reponse = $connextion->query("SELECT * FROM produit where categorie = '4'");
    while ($donnees = $reponse->fetch()){
        $random =  rand ( 0 , 1);
        if ($random == 0){
            $result = "float: right ";
        }else {
            $result = "float: left ";
        }

        echo "<li id ='ilferbo'>";
        
        echo "<div class='w3-card-4 w3-margin-left' style='width:45%;".$result."'"."id='produit'>";
        echo"<img class='w3-center' src='".$donnees["img"]."'"."width='200px'"."height='200px'".">";
        echo" <div class='w3-container w3-center'> <a href ='".$donnees['nomProduit']."'".">".$donnees['nomProduit']."</a>";

        echo "</div>";
        echo("</br>");
        echo" <div class='w3-container w3-center'> <p>".$donnees[2]." €"."</p>";
        echo "</div>";
        echo "</br>";
        echo" <div class='w3-container w3-center'> <p>".$donnees["description"]."</p>";
        echo" <a href='#' class='w3-bar-item w3-button w3-orange'>Ajouter au panier</a>";
        echo "</div>";
        echo "</div>";
        echo("<br>");
        echo "</li>";
    }
    echo "</ul>";
    $reponse->closeCursor();

?>
</div>
</div>
<style>
    #ilferbo {
        list-style-type: none;
        margin : none;
    }
    #produit {
        max-width : 450px;
        max-height: 505px;
        min-width : 450px;
        min-height: 505px;
        padding : 5px;
    }
    img {
        margin : auto;
        margin-left: 136px;
    }
</style>
<script>
            // js pour le slider
            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 10000,
                    values: [1, 10000],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( ui.values[ 0 ] + "€" + " - " + ui.values[ 1 ] + "€" );
                    }
                });
                $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "€" + " - " + $( "#slider-range" ).slider( "values", 1 ) + "€" );
            } );

            function tri() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUl");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];   
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
        } else {
        li[i].style.display = "none";
        }
    }
    }
</script> 
</body>
</html>