<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 2</h2>
<p>Enoncé de l'exercice : Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
.</p>
<p class="result">
<?php
function myFunction($string){    // on déclare la fction et on lui donne un paramètre
$string="Horreurs!!!!";        // la variable est égale a la chaine de caractère
return $string;                  // on retourne la var
}
echo myFunction("Horreurs!!!!")  // on affiche le paramètre de la fction

?>
</p>
    </body>
</html>
