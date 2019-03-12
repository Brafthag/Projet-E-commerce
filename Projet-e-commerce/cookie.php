<?php 
include "Connexion.php.php";
setcookie('nom', $donnees['Nom'], time() + 365*24*3600, null, null, false, true);
setcookie('prenom', $donnees['Prenom'], time() + 365*24*3600, null, null, false, true);


?>