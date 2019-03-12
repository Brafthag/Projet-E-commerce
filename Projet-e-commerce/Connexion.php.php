<?php
session_start();
include "connexion.php";
include "cookie.php";


$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$password = isset($_POST['mdp']) ? $_POST['mdp'] : NULL;

$_SESSION['mail'] = $_POST['email'];


$reponse = $connextion->query("SELECT * FROM compte WHERE email = '$email'");
var_dump($reponse);
$donnees = $reponse->fetch();
var_dump($donnees);

$_SESSION['nom'] = $donnees["nom"];
$_SESSION['prenom'] = $donnees["prenom"];


$hashed_password = password_hash($password,PASSWORD_ARGON2I);
$verif_password = password_verify($password,$donnees['password']);



if ($verif_password == true){
    echo 'bienvenue '. $_SESSION['prenom']. ' '. $_SESSION['nom'];
}
else {
    echo 'Le mot de passe ou le le mail est pas le bon';
}

include "header.php";

?>


    <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h2 class="w3-center">Connexion</h2>
    <hr>
    <form method = "post" action="Connexion.php.php">
    <div class="w3-section">
        <label for="email">Adresse email:</label>
        <input type="email" class="w3-input w3-animate-input" id="email" name="email" style="width: 50%">
    </div>
    <div class="w3-section">
        <label for="mdp">Mot de pass:</label>
        <input type="password" class="w3-input w3-animate-input" id="myInput" name="mdp" style="width: 50%">
        <p id="text" style="color: red; display:none">Attention! Le Caps lock est activer.</p>
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Se souvenir de moi</label>
    </div>
    <button type="submit" class="w3-button w3-animate-bottom w3-block w3-dark-grey" style="width: 50%">Connexion</button>
    </form><br>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
    <script>

    var input = document.getElementById("myInput");
    var text = document.getElementById("text");
    input.addEventListener("keyup", function(event) {

    if (event.getModifierState("CapsLock")) {
        text.style.display = "block";
    } else {
        text.style.display = "none"
    }
    });
    </script>
</body>



</html>