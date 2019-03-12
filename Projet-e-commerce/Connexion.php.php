<?php
session_start();
include "connexion.php";
include "cookie.php";


$email = isset($_POST['email']) ? $_POST['email'] : 'visiteur';
$password = isset($_POST['mdp']) ? $_POST['mdp'] : NULL;

$_SESSION['mail'] = $email;


$reponse = $connextion->query("SELECT * FROM compte WHERE email = '$email'");
$donnees = $reponse->fetch();





$hashed_password = password_hash($password,PASSWORD_ARGON2I);
$verif_password = password_verify($password,$donnees['password']);



if ($verif_password == true){
    if ($_SESSION["mail"] == 'visiteur'){
    $_SESSION['nom'] = $donnees["nom"];
    $_SESSION['prenom'] = $donnees["prenom"];
    }
}
else {
    echo 'Le mot de passe ou le le mail est pas le bon';
}
?>

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
    <link href="body.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="Navbar.css" rel="stylesheet">
    <link href="Text.css" rel="stylesheet">
</head>

<body>

<?php
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