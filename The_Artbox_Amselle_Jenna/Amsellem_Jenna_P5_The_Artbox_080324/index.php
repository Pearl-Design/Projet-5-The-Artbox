<?php require_once(__DIR__ . '\include\header.php'); ?>
<?php require_once(__DIR__ . '\include\oeuvres.php'); ?>
<main>
  <div id="liste-oeuvres">
<!--boucle pour éviter de répéter la structure-->
<?php foreach ($workDetails as $work) { ?>
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?php echo $work['id']; ?>"><!-- récupération de l'id dans l'url et en allant chercher dans oeuvres.php -->
            <img src="<?php echo $work['img']; ?>" alt="<?php echo $work['title']; ?>"/>
            <h2><?php echo $work['title']; ?></h2>
            <p class="description"><?php echo $work['author']; ?></p>
        </a>
    </article>
<?php } ?>
  </div>
</main>
<?php require_once(__DIR__ . '\include\footer.php'); ?>
