<?php
// on définit la fonction numbers qui stockera la variables firstN et secondN qui sera utilisé lors de l'affichage
function numbers($firstN, $secondN){
  // condition qui indique que si le premier nombre est supérieur au deuxième qu'il retourne la phrase indiquer
  if ($firstN > $secondN) {
    return 'Le premier nombre est plus grand';
  } else if ($firstN < $secondN)  {// autrement, si le premier nombre est inférieur qu'il retourne la phrase indiquer
    return'Le premier nombre est plus petit';
  } else { //Sinon qu'il retourne la phrase indiquer
    return 'Les deux nombres sont identiques';
  }
}
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice4</title>
  </head>
  <body>
    <p>
      <?php
      // affichage de numbers
        echo numbers(8, 2);
       ?>
    </p>
  </body>
</html>
