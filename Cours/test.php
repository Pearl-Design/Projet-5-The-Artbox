<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
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

  foreach ( $recipes as $recipe ) { ?>
    <p class="description"><?php echo $recipe['author']; ?></p>
<?php  }
 ?>
</div>
</body>
</html>