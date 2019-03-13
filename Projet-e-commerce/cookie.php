<?php 

$pseudo = (isset($_SESSION['mail'])) ? $_SESSION['mail'] : 'visiteur';
if ($pseudo!="visiteur" && $pseudo!="") {//=== il est dejas logue

}
else {
$pseudoCookie = (isset($_COOKIE['pseudo'])) ? $_COOKIE['pseudo'] : 'visiteur';
$mdp = (isset($_COOKIE['mdp'])) ? $_COOKIE['mdp'] : '';
if ($pseudoCookie !="visiteur" && $pseudoCookie !="")
 {
    //=== il est dejas logue sans session on lui crée
    // mais avant on controle dans Mysql si mdp==OK
    $pseudo = $pseudoCookie;
    $_SESSION['pseudo']=$pseudoCookie;
    var_dump($_SESSION['pseudo']);

    setCookie('nom',$nom,(time()+60*60*24*365));
    setCookie('prenom',$prenom,(time()+60*60*24*365));
 }
}
?>