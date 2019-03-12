<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            <div class="searsh">
            </div>
        </div>
        <div class="col-lg-4"> 
            <div class="nav">
                <a href="inscription.php">S'enrengistrer</a>
                <a href="Connexion.php.php"<i class="fa fa-fw fa-user"></i> Connexion</a>
                <!--<a href="#contact">Panier</a>-->
               <!-- <a href="#contact"><img src="Panier.png" width="50" heigth="50"></a>-->
            </div>
        </div>
    </div>
    <div class="topnav">
        <a class="active" href="beta.php">Home</a>
        <a href="#">Nouvautés</a>
        <a href="potion.php">Potion</a>
        <a href="#">Recette</a>
        <a href="livre.html">Livre de sort</a>
        <form>
         <input type="text" placeholder="Rechercher" aria-label="Search">
         <button type="submit">Rechercher</button>
        </form>
    </div>

        <!-- Navbar sur petit ecran -->
    <div class="w3-left w3-bar-block w3-border-right">
        <button id="burger" class="w3-button w3-teal w3-xlarge" onclick="ouvert()">☰</button>
    <div class="w3-sidebar w3-light-grey" id="mySidebar" style="display: none">
    <button onclick="fermer()" class="w3-bar-item w3-large">Fermer &times;</button>
    <a href="beta.php" class="w3-sidebar-item w3-button">Home</a>
    <a href="#" class="w3-sidebar-item w3-button">Nouvautés</a>
    <a href="potion.html" class="w3-sidebar-item w3-button">Potion</a>
    <a href="#" class="w3-sidebar-item w3-button">Potion</a>
    <a href="livre.html" class="w3-sidebar-item w3-button">Potion</a>   
    <form>
         <!--<input type="text" class="w3-sidebar" placeholder="Rechercher" aria-label="Search" style="width: 10%">-->
         <!--<button type="submit" class="w3-sidebar">Rechercher</button>-->
    </form>
    </div>
    </div>
    
    <script>
    function ouvert(){
        document.getElementById("mySidebar").style.display = "block";
    }

    function fermer(){
        document.getElementById("mySidebar").style.display = "none";
    }

    </script>