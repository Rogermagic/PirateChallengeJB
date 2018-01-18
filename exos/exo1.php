<?php

/*
 * On doit trouver un chiffre aléatoire entre 0 et 1000 qui a été généré en secret !
 * Ce chiffre aléatoire peut être tester grâce à la fonction "isSecretNumber" que tu peux
 * utiliser ainsi :
 *
 * ex : $test = isSecretNumber(123);
 *
 * Si le chiffre passé en paramètre est le bon, la fonction retourne "true", sinon
 * elle retourne "false".
 *
 * Une fois que tu as trouvé le bon nombre, tu dois le retourner avec "return"
 * Conseils : Le mieux c'est de tester toutes les possibilités avec une boucle ;)
 */


function searchAndFind() {
 // créer un tableau contenant tous les nombres de 0 à 1000
  $table = range(1, 1000);

//   //explorer le tableau jusqu'à ce que l'on trouve l'aléa
  foreach ($table as $value){
//       //on lance la fonction isSecretNumber
     if ( isSecretNumber($value) == true) {

 //on le retourne
        return $value;}

    }
}
