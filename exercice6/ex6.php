<?php
include '../index.php';
?>
<div class="ex">
    <h2>Exercice 6</h2>
    <p>Enoncé de l'exercice : Faire une fonction qui prend trois paramètres : nom, prenom et age.
        Elle doit renvoyer une chaine de la forme :
        "Bonjour" + nom + prenom + ",tu as" + age + "ans".
    <p class="result">
        <?php
        /**
         * présentation d'une personne
         * @param string $name
         * @param string $firstName
         * @param int $age
         * @return string
         */
        function sentence($name, $firstName, $age){  //déclaration de la fction
            $var = 'Bonjour '.  $name. $firstName. $age;
            return $var;   // renvoi le résultat. 
        }
        echo sentence('Coadic ','Elodie, ','tu as '. '33'.'ans ');  // affiche la phrase
        ?>
    </p>
</body>
</html>
