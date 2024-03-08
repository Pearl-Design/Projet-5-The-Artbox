<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apprendre le PHP</title>
<style>
div {
    margin-bottom: 30px
}
</style>
</head>

<body>
<div> <!-- le texte peut etre ecrit avec ou sans parenthèse --> 
  <?php echo "Ceci est du texte"; ?><br/>
  
  <!-- print a la meme signification que echo --> 
  <?php print("Ceci est du texte"); ?><br/>
  <?php echo "Ceci est du <strong>texte</strong>"; ?><br/>
  
  <!-- pour les guillemets mettre des anti slash --> 
  <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?></div>
<div>
  <h2>Affichage de texte avec PHP</h2>
  <p> Cette ligne a été écrite entièrement en HTML.<br />
    <?php echo("Celle-ci a été écrite entièrement en PHP."); ?> </p>
</div>
<div>
  <h2>Ma page web</h2>
  <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
</div>
<div>
  <?php
  $fullname = "Jenna Amsellem";
  echo "Bonjour {$fullname} et bienvenue sur le site !"; // avec guillemet double
  ?>
</div>
<div> Bonjour
  <?php
  $fullname = "Jenna Amsellem"; // en mixant html et php
  echo $fullname;
  ?>
  et bienvenue sur le site ! </div>
<div>
  <?php
  $fullname = 'Jenna Amsellem';
  echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // concaténation avec guillemet simple en utilsant le point
  ?>
</div>
<div>
  <?php
  $number = 2 + 4; // $number prend la valeur 6
  $number = 5 - 1; // $number prend la valeur 4
  $number = 3 * 5; // $number prend la valeur 15
  $number = 10 / 2; // $number prend la valeur 5

  // Allez on rajoute un peu de difficulté
  $number = 3 * 5 + 1; // $number prend la valeur 16
  $number = ( 1 + 2 ) * 2; // $number prend la valeur 6
  ?>
</div>
<div>
  <?php
  $number = 10;
  $result = ( $number + 5 ) * $number; // $result prend la valeur 150
  ?>
</div>
<div>
  <?php
  $isEnabled = true; // La condition d'accès

  if ( $isEnabled === true ) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
  }
  ?>
</div>
<div>
  <?php
  $isEnabled = true;

  if ( $isEnabled === true ) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
  } else {
    echo "Accès refusé ❌ ";
  }
  ?>
</div>
<div>
  <?php
  $isAllowedToEnter = "Oui";

  // SI on a l'autorisation d'entrer
  if ( $isAllowedToEnter === "Oui" ) {
    // instructions à exécuter quand on est autorisé à entrer
  } // SINON SI on n'a pas l'autorisation d'entrer
  elseif ( $isAllowedToEnter === "Non" ) {
      // instructions à exécuter quand on n'est pas autorisé à entrer
    } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
  else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
  }
  ?>
</div>
<div>
  <?php
  $isAllowedToEnter = true;

  if ( $isAllowedToEnter ) {
    echo "Bienvenue petit nouveau. :o)";
  } else {
    echo "T'as pas le droit d'entrer !";
  }
  ?>
</div>
<div>
  <?php
  $isEnabled = true;
  $isOwner = false;

  if ( $isEnabled && $isOwner ) {
    echo 'Accès à la recette validé ✅';
  } else {
    echo 'Accès à la recette interdit ! ❌';
  }
  ?>
</div>
<div>
  <?php
  $isEnabled = true;
  $isOwner = false;
  $isAdmin = true;

  if ( ( $isEnabled && $isOwner ) || $isAdmin ) {
    echo 'Accès à la recette validé ✅';
  } else {
    echo 'Accès à la recette interdit ! ❌';
  }
  ?>
</div>
<div>
  <?php
  $chickenRecipesEnabled = true;

  if ( $chickenRecipesEnabled ) {
    echo '<h1>Liste des recettes à base de poulet</h1>';
  }
  ?>
</div>
<div>
  <?php $chickenRecipesEnabled = true; ?>
  <?php if ($chickenRecipesEnabled): ?>
  <!-- Ne pas oublier le ":" -->
  
  <h1>Liste des recettes à base de poulet</h1>
  <?php endif; ?>
  <!-- Ni le ";" après le endif --> 
</div>
<div>
  <?php
  $grade = 16;

  if ( $grade === 0 ) {
    echo "Il faudra revoir tout le cours !";
  } elseif ( $grade === 5 ) {
    echo "Tu dois réviser plusieurs chapitres";
  }

  elseif ( $grade === 7 ) {
    echo "Il te manque quelques révisions pour atteindre la moyenne";
  }

  elseif ( $grade === 10 ) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
  }

  elseif ( $grade === 12 ) {
    echo "Tu es assez bon";
  }

  elseif ( $grade === 16 ) {
    echo "Tu te débrouilles très bien !";
  }

  elseif ( $grade === 20 ) {
    echo "Excellent travail, c'est parfait !";
  }

  else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
  }
  ?>
</div>
<div>
  <?php
  $grade = 10;

  switch ( $grade ) // on indique sur quelle variable on travaille
  {
    case 0: // dans le cas où $grade vaut 0
      echo "Il faudra revoir tout le cours !";
      break;

    case 5: // dans le cas où $grade vaut 5
      echo "Tu dois réviser plusieurs modules";
      break;

    case 7: // dans le cas où $grade vaut 7
      echo "Il te manque quelques révisions pour atteindre la moyenne ";
      break;

    case 10: // etc. etc.
      echo "Tu as pile poil la moyenne, c'est un peu juste…";
      break;

    case 12:
      echo "Tu es assez bon";
      break;

    case 16:
      echo "Tu te débrouilles très bien !";
      break;

    case 20:
      echo "Excellent travail, c'est parfait !";
      break;

    default:
      echo "Désolé, je n'ai pas de message à afficher pour cette note";
  }
  ?>
</div>
<div>
  <?php
  $userAge = 24;

  if ( $userAge >= 18 ) {
    $isAdult = true;
  } else {
    $isAdult = false;
  }
  ?>
</div>
<div>
  <?php
  $userAge = 24;

  $isAdult = ( $userAge >= 18 ) ? true : false;

  // Ou mieux, dans ce cas précis
  $isAdult = ( $userAge >= 18 );
  ?>
</div>
<div>
  <?php

  // Premier utilisateur
  $userName1 = 'Mickaël Andrieu';
  $userEmail1 = 'mickael.andrieu@exemple.com';
  $userPassword1 = 'S3cr3t';
  $userAge1 = 34;

  // Deuxième utilisatrice
  $userName2 = 'Laurène Castor';
  $userEmail2 = 'laurene.castor@exemple.com';
  $userPassword2 = 'P4ssW0rD';
  $userAge2 = 28;

  // ... et ainsi de suite pour les autres utilisateurs.	
  ?>
</div>
<div>
  <?php

  $user1 = [ 'Mickaël Andrieu', 'email', 'S3cr3t', 34 ];

  echo $user1[ 0 ]; // "Mickaël Andrieu"
  echo $user1[ 1 ]; // "email"
  echo $user1[ 3 ]; // 34	
  ?>
</div>
<div>
  <?php

  $mickael = [ 'Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34 ];
  $mathieu = [ 'Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33 ];
  $laurene = [ 'Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28 ];

  $users = [ $mickael, $mathieu, $laurene ];

  echo $users[ 2 ][ 1 ]; // "laurene.castor@exemple.com"	
  ?>
</div>
<div>
  <?php
  $lines = 1;

  while ( $lines <= 5 ) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
  }
  ?>
</div>
<div>
  <?php
  $lines = 1;

  while ( $lines <= 5 ) {
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
  }
  ?>
  
  <!--

Ceci est la ligne n°1
Ceci est la ligne n°2
...
--> 
</div>
<div>
  <?php
  $users = [
    [
      'full_name' => 'Mickaël Andrieu',
      'email' => 'mickael.andrieu@exemple.com',
      'age' => 34,
    ],
    [
      'full_name' => 'Mathieu Nebra',
      'email' => 'mathieu.nebra@exemple.com',
      'age' => 34,
    ],
    [
      'full_name' => 'Laurène Castor',
      'email' => 'laurene.castor@exemple.com',
      'age' => 28,
    ],
  ];
  $lines = 3; // nombre d'utilisateurs dans le tableau
  $counter = 0;
  while ( $counter < $lines ) {
    echo $users[ $counter ][ 'full_name' ] . ' ' . $users[ $counter ][ 'email' ] . '<br />';
    $counter++;
  }
  ?>
</div>
<div>
  <?php

  // Déclaration du tableau des recettes
  $recipes = [
    [ 'Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true, ],
    [ 'Couscous', '[...]', 'mickael.andrieu@exemple.com', false, ],
  ];

  ?>
  <h2>Affichage des recettes</h2>
  <ul>
    <?php for ($lines = 0; $lines <= 1; $lines++): ?>
    <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
    <?php endfor; ?>
  </ul>
</div>
<div>
<?php

$recipes = [
  [
    'title' => 'Cassoulet',
    'author' => 'mickael.andrieu@exemple.com',
  ],
  [
    'title' => 'Couscous',
    'author' => 'mickael.andrieu@exemple.com',
  ],
  [
    'title' => 'Escalope milanaise',
    'author' => 'mathieu.nebra@exemple.com',
  ],
  [
    'title' => 'Salade Romaine',
    'author' => 'laurene.castor@exemple.com',
  ],
];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Affichage des recettes</title>
</head>
<body>
<ul>
  <?php for ($lines = 0; $lines <= 3; $lines++) : ?>
  <li><?php echo $recipes[$lines]['title'] . ' (' . $recipes[$lines]['author'] . ')'; ?></li>
  <?php endfor; ?>
</ul>
</body>
</html>
</div>
<div>
  <?php
  $recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
  ];

  foreach ( $recipe as $value ) {
    echo $value;
  }

  /**
   * AFFICHE
   * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
   */
  ?>
</div>
<div>
  <?php

  $recipes = [
    [
      'title' => 'Cassoulet',
      'recipe' => '',
      'author' => 'mickael.andrieu@exemple.com',
      'is_enabled' => true,
    ],
    [
      'title' => 'Couscous',
      'recipe' => '',
      'author' => 'mickael.andrieu@exemple.com',
      'is_enabled' => false,
    ],
    [
      'title' => 'Escalope milanaise',
      'recipe' => '',
      'author' => 'mathieu.nebra@exemple.com',
      'is_enabled' => true,
    ],
    [
      'title' => 'Salade Romaine',
      'recipe' => '',
      'author' => 'laurene.castor@exemple.com',
      'is_enabled' => false,
    ],
  ];

  foreach ( $recipes as $recipe ) {
    echo $recipe[ 'title' ] . ' contribué(e) par : ' . $recipe[ 'author' ] . PHP_EOL;
  }
  ?>
</div>
<div>
  <?php
  $recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
  ];

  foreach ( $recipe as $property => $propertyValue ) {
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
  }
  ?>
</div>
<div>
  <?php

  $recipes = [
    [
      'title' => 'Cassoulet',
      'recipe' => '',
      'author' => 'mickael.andrieu@exemple.com',
      'is_enabled' => true,
    ],
    [
      'title' => 'Couscous',
      'recipe' => '',
      'author' => 'mickael.andrieu@exemple.com',
      'is_enabled' => false,
    ],
  ];

  echo '<pre>';
  print_r( $recipes );
  echo '</pre>';
  ?>
</div>
<div>
  <?php
  $recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
  ];

  if ( array_key_exists( 'title', $recipe ) ) {
    echo 'La clé "title" se trouve dans la recette !';
  }

  if ( array_key_exists( 'commentaires', $recipe ) ) {
    echo 'La clé "commentaires" se trouve dans la recette !';
  }
  ?>
</div>
<div>
  <?php
  $users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
  ];

  $positionMathieu = array_search( 'Mathieu Nebra', $users );
  echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

  $positionLaurène = array_search( 'Laurène Castor', $users );
  echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;
  ?>
</div>
<div>
  <?php
  $recipes = [
    [
      'title' => 'Cassoulet',
      'recipe' => 'Etape 1 : des flageolets !',
      'author' => 'mickael.andrieu@exemple.com',
      'is_enabled' => true,
    ],
    [
      'title' => 'Couscous',
      'recipe' => 'Etape 1 : de la semoule',
      'author' => 'mickael.andrieu@exemple.com',
      'is_enabled' => false,
    ],
    [
      'title' => 'Escalope milanaise',
      'recipe' => 'Etape 1 : prenez une belle escalope',
      'author' => 'mathieu.nebra@exemple.com',
      'is_enabled' => true,
    ],
  ];

  ?>
  <h2>Afficher la recette</h2>
  <?php foreach ($recipes as $recipe) : ?>
  <!-- si la clé existe et a pour valeur "vrai", on affiche -->
  <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) : ?>
  <article>
    <h3><?php echo $recipe['title']; ?></h3>
    <div><?php echo $recipe['recipe']; ?></div>
    <i><?php echo $recipe['author']; ?></i></article>
  <?php endif; ?>
  <?php endforeach ?>
</div>
</body>
</html>
