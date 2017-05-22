<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 8</h2>
<p>Enoncé de l'exercice :Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>

<p class="result">
<?php
/**
 * addition de tous les paramètres
 * @param int $number1
 * @param int $number2
 * @param int $number3
 * @return int
 */
function finish($number1=0, $number2=0, $number3=0){  // pr mettre la valeur par défaut on met 0. 
    $var = $number1 + $number2 + $number3;
    return $var;
}
echo finish(3, 2, 2);
?>
</p>
    </body>
</html>
