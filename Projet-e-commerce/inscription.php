<?php
    include "connexion.php";
    $Prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : null;
    $Nom = isset($_POST['Name']) ? $_POST['Name'] : null;
    $password = isset($_POST['Password']) ? $_POST['Password'] : null;
    $password2 = isset($_POST['Password2']) ? $_POST['Password2'] : null;
    $email = isset($_POST['Email']) ? $_POST['Email'] : null;
    $civilite = isset($_POST['option']) ? $_POST['option'] : null;
    $adresse = isset($_POST['Adress']) ? $_POST['Adress']: null;
    $tel = isset($_POST['Phone']) ? $_POST['Phone']: null;
    $donnee = isset($donnees["email"]) ? $donnees["email"]: null;
    $emailErr = null;
    $nomErr = null;
    $prenomErr = null;
    $motdepasseErr = null;
    $conErr = null;


    
        if($password != null){
            $password8 = password_hash($password, PASSWORD_ARGON2I);
            //$verify = $connextion->query("INSERT INTO compte(prenom, nom, password, email, civilite, adresse, tel) VALUES ('$Prenom', '$Nom', '$password8', '$email','$civilite','$adresse','$tel')");
            $verify = $connextion->query("SELECT email  FROM compte WHERE email = '$email'");
            $donnees = $verify->fetch();
            if($donnees["email"] != $email){

            $verify = $connextion->query("INSERT INTO `compte` (`IDUtilisateur`, `prenom`, `nom`, `civilite`, `email`, `password`, `adresse`, `tel`) VALUES (NULL, '$Prenom', '$Nom', '$civilite', '$email', '$password8', '$adresse', '$tel')");
            }
            else{
            }
        }

    // $reponse = $connextion->query("SELECT * FROM compte where email = '$coEmail'AND password = '$coPassword' ");
    // // print_r($reponse);
    // $donnees=$reponse->fetch();
    // // print_r($donnees);
    // $reponse->closeCursor();

    // if ($coPassword == null){
    //     $conErr = null;
    // }
    // elseif ($donnees == false){
    //     echo "Email ou mot de passe incorrect.";
    // }
    // else{
    //     if($coPassword && $coEmail != null){echo "Vous etes reconnu"."<br>";}
    // }
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

    </div>

    <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h2 class="w3-center">Inscription</h2>
    <?php 
     if($donnee != $email){
        echo  "<p class='w3-text-green'> Bravo vous etes enrengistrer</p>";
     }else {
        echo "<p class='w3-text-red'> Cette adresse email a deja ete utiliser";
     }
    ?>
    <hr>
    <form name="myForm" class="w3-margin-right-32" action="inscription.php" method="post">
      <div class="w3-section">
        <label>Nom</label>
        <input class="w3-input w3-border w3-animate-input" type="text" onkeyup="nomOk()" required name="Name" id="Name" style="width: 50%">
      </div>
      <div class="w3-section">
        <label>Prenom</label>
        <input class="w3-input w3-border w3-animate-input" type="text" onkeyup="prenomOk()" id="Prenom" required name="Prenom" style="width: 50%">
      </div>
      <div class="w3-section">
        <label>Mail</label>
        <input class="w3-input w3-border w3-animate-input" type="email" required name="Email" style="width: 50%">
      </div>
      <div class="w3-section">
        <label>Mot de passe</label>
        <input type ="password" class="w3-input w3-border w3-animate-input" required onkeyup="mdpOk()" name="Password" id="mdp" style="width: 50%">
        <input type ="checkbox" onclick="seePass()"> Voir le mot de passe
      </div>

      <div class="w3-section">
        <label>Comfirmer votre mot de passe</label>
        <input type ="password" class="w3-input w3-border w3-animate-input" onkeyup="mdpOk()" id="mdp2" required name="Password2" style="width: 50%">
        <input type ="checkbox" onclick="seePass2()"> Voir le mot de passe
      </div>

      <div class="w3-section">
        <select class="w3-select w3-animate-input" id="jul" name="option" required style="width: 50%">
        <option value="" disabled selected>Choisisez votre civilité</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        <option value="Orc">Orc</option>
        <option value="Poulet">Poulet</option>
        <option value="Elfe">Elfe</option>
        <option value="Nain">Nain</option>
        <option value="Hobbit">Hobbit</option>
        <option value="Soron">Soron</option>
        <option value="Alien">Alien</option>
        <option value="Goblin">Goblin</option>
        </select>
    </div>

    <div class="w3-section">
        <label>Votre addrese</label>
        <input class="w3-input w3-border w3-animate-input" type="text" required name="Adress" style="width: 50%">
      </div>

      <div class="w3-section">
        <label>Votre numéro de téléphone</label>
        <input class="w3-input w3-border- w3-animate-input" type="text" required name="Phone" style="width: 50%">
      </div>

      <button type="submit" class="w3-button w3-block w3-dark-grey" onClick="validateForm()" style="width: 50%">Envoyer</button>
    </form><br>
    <!--<audio autoplay="false" id="beep" src="wesh-alors.mp3">-->
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
    <script>

    function seePass(){
        var pass = document.getElementById("mdp");
        console.log(pass);
        if (pass.type === "password"){
            pass.type = "text";
        }else{
            pass.type = "password";
        }
    }

    function seePass2(){
        var pass = document.getElementById("mdp2");
        console.log(pass);
        if (pass.type === "password"){
            pass.type = "text";
        }else{
            pass.type = "password";
        }
    }

    function nomOk(){
        var nom = document.getElementById("Name");
        var value = nom.value;
        console.log(value.length);
        if(value.length > 60 | value.length < 3) {
            document.getElementById("Name").classList.add("w3-border-red");
        }
        else{
            document.getElementById("Name").classList.remove("w3-border-red");
            document.getElementById("Name").classList.add("w3-border-green");
        }
    }

    function prenomOk(){
        var nom = document.getElementById("Prenom");
        var value = nom.value;
        console.log(value.length);
        if(value.length > 60 | value.length < 3) {
            document.getElementById("Prenom").classList.add("w3-border-red");
        }
        else{
            document.getElementById("Prenom").classList.remove("w3-border-red");
            document.getElementById("Prenom").classList.add("w3-border-green");
        }
    }

    function mdpOk(){

        var mpd = document.getElementById("mdp"); 
        var value = mdp.value;
        var mpd2 = document.getElementById("mdp2"); 
        var value2 = mdp2.value;
        console.log(value);
        console.log(value2);
        if (value == value2){
            document.getElementById("mdp").classList.remove("w3-border-red");
            document.getElementById("mdp2").classList.remove("w3-border-red");
            
            document.getElementById("mdp").classList.add("w3-border-green");
            document.getElementById("mdp2").classList.add("w3-border-green");
        }
        else{
            document.getElementById("mdp").classList.add("w3-border-red");
            document.getElementById("mdp2").classList.add("w3-border-red");
        }

    }

    function validateForm() {
    var x = document.forms["myForm"]["Password"].value;
    var y = document.forms["myForm"]["Password2"].value;
    console.log(x);
    console.log(y);
    if (x != y) {
        alert("Toute les champs doit etre correcte");
        return false;
    }
    } 

    // function weshAlors(){
    //     var jul = document.getElementById("jul");
    //     var julValue = jul.value;
    //     var son = document.getElementById("beep")
    //     console.log(julValue);
    //     if (julValue === "Jul"){
    //         son.play();
    //     }
    // }
    </script>
</body>



</html>