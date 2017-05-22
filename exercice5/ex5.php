<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 5</h2>
<p>Enoncé de l'exercice :Faire une fonction qui prend en paramètre un nombre et
    une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
.</p>
<p class="result">
<?php
/**
 * faire une fction en prenant  en paramètre une chaine de caractères et un nbre. 
 * @param string $string
 * @param int $number
 * @return string
 */
function concat($string , $number){   // déclaration de ma fction avec mes 2 paramètres
    $concat = $string . $number;      // ma var qui concatène les 2 paramètres
    return $concat;
}
echo concat("les fctions vont avoir ma peau ", 23);

?>
</p>
    </body>
</html>
