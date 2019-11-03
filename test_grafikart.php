<?php
/*
$prenom = "Marc";
$nom = "Doe";
$note1 = 10;
$note2 = 20;

echo "Bonjour $prenom $nom vous avez eu ".(($note1 + $note2) / 2)." de moyenne.";
*/

$classe = [
  [
    'nom' => "Grousson ",
    'prenom' => "Louis ",
    'notes' => [20, 15, 8, 14],
  ],

  [
    'nom' => 'Grousson',
    'prenom' => 'Nicolas',
    'notes' => [8, 18, 10, 12],
  ],

  [
    'nom' => 'Perrier',
    'prenom' => 'Elodie',
    'notes' => [20, 20, 20, 20],
  ]
];
  echo $classe[0]['nom']." ".$classe[0]['prenom']." a "
  .$classe[0]['notes'][0]."/20, "
  .$classe[0]['notes'][1]."/20, "
  .$classe[0]['notes'][2]."/20 et "
  .$classe[0]['notes'][3]."/20.";

  echo "</BR>";
  echo "La moyenne est donc de :".(array_sum ($classe[0]['notes']))/4;

  echo "</BR>";
  echo "</BR>";

  echo $classe[1]['nom']." ".$classe[1]['prenom']." a "
  .$classe[1]['notes'][0]."/20, "
  .$classe[1]['notes'][1]."/20, "
  .$classe[1]['notes'][2]."/20 et "
  .$classe[1]['notes'][3]."/20.";
  echo "</BR>";
  echo "La moyenne est donc de : ".(array_sum ($classe[1]['notes']))/4;

  echo "</BR>";
  echo "</BR>";

  echo $classe[2]['nom']." ".$classe[2]['prenom']." a "
  .$classe[2]['notes'][0]."/20, "
  .$classe[2]['notes'][1]."/20, "
  .$classe[2]['notes'][2]."/20 et "
  .$classe[2]['notes'][3]."/20.";
  echo "</BR>";
  echo "La moyenne est donc de :".(array_sum ($classe[2]['notes']))/4;
