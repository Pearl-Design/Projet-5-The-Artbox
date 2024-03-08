<?php require_once(__DIR__ . '\include\header.php'); ?>
<?php require_once(__DIR__ . '\include\oeuvres.php'); ?>
<main>
  <div id="liste-oeuvres">
    <?php foreach ( $works as $work ) { ?>
    <article class="oeuvre"> <a href="<?php echo $work['url']; ?>"> <img src="<?php echo $work['img']; ?>" alt="<?php echo $work['title']; ?>"/>
      <h2><?php echo $work['title']; ?></h2>
      <p class="description"><?php echo $work['author']; ?></p>
      </a> </article>
    <?php
    }
    ?>
  </div>
</main>
<?php require_once(__DIR__ . '\include\footer.php'); ?>
