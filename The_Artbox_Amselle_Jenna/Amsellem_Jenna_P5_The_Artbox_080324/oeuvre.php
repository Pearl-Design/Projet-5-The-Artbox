<?php require_once(__DIR__ . '\include\header.php'); ?>
<?php
// Récupérer l'ID de l'œuvre depuis l'URL
if (isset($_GET['id'])) {
    $workId = $_GET['id'];

    // Inclure le fichier avec les détails des œuvres
    include('include/oeuvres.php');

    // Vérifier si l'ID existe dans le tableau des détails
    if (array_key_exists($workId, $workDetails)) {
        // Récupérer les détails de l'œuvre
        $work = $workDetails[$workId];
    } else {
        // Rediriger si l'ID n'existe pas dans le tableau
        header("Location: index.php");
        exit();
    }
} else {
    // Rediriger si l'ID n'est pas présent
    header("Location: index.php");
    exit();
}
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
