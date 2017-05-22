<?php
include '../index.php';
?>

<div class="ex">
<h2>Exercice 1</h2>
<p>Enoncé de l'exercice : Faire une fonction qui retourne true.</p>
<p class="result">
<?php
function essai(){  // on crée la fction essai 
return true;       // on  retourne  true   
}
$var = essai();    // on crée une variable qui stock la valeur retournée de la fction
echo $var;         // on affiche la valeur de la variable. 
?>
</p>
</div>
    </body>
</html>
