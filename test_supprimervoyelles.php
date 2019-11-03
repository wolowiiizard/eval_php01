<?php
/*
require_once("superfonctions.php");

echo supprimerLettres("bonjour", "o");
echo supprimerLettres("Hello World", "o");
*/
$chaine = "bonjour";
$lettre_a_supprimer = "o";
$i = 'abcdefghijklmnopqrstuvwxyz';

while ($chaine[$i] < strlen($chaine)) {
  if ($i = $lettre_a_supprimer)  {
    echo "\n";
  } else {
    $chaine_retour = $chaine[$i++];
  }
  echo "La nouvelle phrase est : \n".$chaine;
}
