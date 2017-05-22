<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 3</h2>
    <p>Enoncé de l'exercice : Faire une fonction qui prend en paramètre deux chaines
        de caractères et qui revoit la concaténation de ces deux chaines
        .</p>
    <p class="result">
        <?php

        function concat($string1, $string2) {    // declaration de la fction avec 2 paramètres
            $strings = $string1. $string2;  // concaténation des 2 chaines.
            return $strings;                        // on retourne la var
        }

        echo concat('je comprends ', 'rien');     // affiche la fction. ici on donne les valeur des chaines. 
        ?>
    </p>
</body>
</html>
