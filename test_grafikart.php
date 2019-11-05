<?php
/*
$prenom = "Marc";
$nom = "Doe";
$note1 = 10;
$note2 = 20;

echo "Bonjour $prenom $nom vous avez eu ".(($note1 + $note2) / 2)." de moyenne.";


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
  echo "La moyenne est donc de : ".((array_sum ($classe[0]['notes']))/4)."/20";

  echo "</BR>";
  echo "</BR>";

  echo $classe[1]['nom']." ".$classe[1]['prenom']." a "
  .$classe[1]['notes'][0]."/20, "
  .$classe[1]['notes'][1]."/20, "
  .$classe[1]['notes'][2]."/20 et "
  .$classe[1]['notes'][3]."/20.";
  echo "</BR>";
  echo "La moyenne est donc de : ".((array_sum ($classe[1]['notes']))/4)."/20";

  echo "</BR>";
  echo "</BR>";

  echo $classe[2]['nom']." ".$classe[2]['prenom']." a "
  .$classe[2]['notes'][0]."/20, "
  .$classe[2]['notes'][1]."/20, "
  .$classe[2]['notes'][2]."/20 et "
  .$classe[2]['notes'][3]."/20.";
  echo "</BR>";
  echo "La moyenne est donc de : ".((array_sum ($classe[2]['notes']))/4)."/20";

$notes = [];
$action = "";

while ($action !== "fin") {
  $action = readline("Saisir une note ou entrer fin : \n");
  if ($action !== "fin") {
    $notes[] = (int)$action;
    if (($action < 0) || ($action > 20)) {
      echo " Attention ! Données incorrectes ! \n";
      break;
    }
  }
}foreach ($notes as $note) {
  echo "La note est : - ".$note."\n";
}
*/
$creneaux = [];

while (true) {
  $debut = (int)readline("Saisissez l'heure d'ouverture : ");
  $fin = (int)readline("Saisissez l'heure de fermeture : ");

  if ($debut >= $fin) {
    echo "Erreur, l'heure d'ouverture ($debut) ne peut être supérieur ou égale à la fermeture ($fin)";
  }else {
    $creneaux[] = [$debut, $fin];
    $rep = readline ("Souhaitez ajouté un autre créneau ? o/n : ");
      if ($rep === "n") {
        break;
      }
  }
}

echo "Le magasin est ouvert de ";
foreach ($creneaux as $key => $creneau) {
  if ($key > 0) {
    echo "et de ";
  }
  echo $creneau[0]."h à ".$creneau[1]."h ";
}
/*
  $heure = readline("A quelle heure souhaitez vous visiter le magasin ? : ");
  $creneauheure = false;

  foreach ($creneaux as $creneau ) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
      $creneauheure = true;
      break;
    }
  }


if ($creneauheure = true) {
  echo "Le magasin est ouvert.";
}else {
  echo "Le magasin est fermé";
}
*/
