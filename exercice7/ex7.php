<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 7</h2>
    <p>Enoncé de l'exercice : Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :
    Homme
    Femme
La fonction doit renvoyer en fonction des paramètres :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
Gérer tous les cas.
    <p class="result">
 <?php
 function check($age, $gender){
     if($gender == "femme"&& $age >= 18){
                return "Vous êtes une femme et vous êtes majeure";
            }elseif($gender == "femme"&& $age < 18){
                return " Vous êtes une femme et vous êtes mineure";
            }elseif ($gender == "homme"&& $age >= 18){
                return " Vous êtes un homme et vous êtes majeur";
            }else{
                return " vous êtes un homme et vous êtes mineur";
            }
 }
 echo check(25 , 'femme');
 ?>
    </p>
    </body>
</html>
