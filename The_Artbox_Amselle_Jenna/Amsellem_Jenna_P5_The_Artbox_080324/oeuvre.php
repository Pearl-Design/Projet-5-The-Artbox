<?php require_once(__DIR__ . '\include\header.php'); ?>
<?php
// Récupérer l'ID de l'œuvre depuis l'URL
$workId = isset($_GET['id']) ? $_GET['id'] : null;

// Inclure le fichier avec les détails des œuvres
include('include/oeuvres.php');

// Vérifier si l'ID existe dans le tableau des détails
if (!array_key_exists($workId, $workDetails)) {
    // Rediriger si l'ID n'existe pas dans le tableau
    header("Location: index.php");
    exit();
}

// Récupérer les détails de l'œuvre
$work = $workDetails[$workId];
?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $work['img']; ?>" alt="<?php echo $work['title']; ?>"/>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $work['title']; ?></h1>
            <p class="description"><?php echo $work['author']; ?></p>
            <p class="description-complete">
                <?php echo $work['description']; ?>
            </p>
        </div>
    </article>
</main>
<?php require_once(__DIR__ . '\include\footer.php'); ?>
