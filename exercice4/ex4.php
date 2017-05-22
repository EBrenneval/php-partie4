<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 4</h2>
<p>Enoncé de l'exercice :Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux
.</p>
<p class="result">
<?php
function number($number1 , $number2) {     // déclaration de ma fction avec mes 2 paramètres.
   if ($number1 > $number2){              // SI number 1 et plus grand que number2
      $result = 'le premier nombre est plus grand';   
   }elseif ($number1 < $number2){
       $result = 'le premier nombre est plus petit';
   } else {
      $result ='les deux nombres sont identiques';
   }  
   return $result;    // on retourne la variable $result
}

echo number(2,5);                 // on affiche et on donne des valeur à nos 2 paramètres. 
$var1 = 5;
$var2 = 5;
echo number($var1, $var2);
echo number(52,18);
?>
    
</p>
    </body>
</html>
