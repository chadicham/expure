<?php
$title = "Accueil";
$description = "Art et Evénementiel : Inspirer un mouvement autour de l’art et la culture pour rendre chaque expérience unique et mémorable.";
?>

<?php if (isset($_SESSION["user"]) && $_SESSION["user"]["isAdmin"] === 1): ?>


<h1>NOS ARTISTES</h1>
<?php if (isset($_SESSION["message"])): ?>
    <p class="message"><?= $_SESSION["message"] ?></p>
<?php endif; unset($_SESSION["message"]) ?>

<!-- Section principale -->
<section id="main-admin">
    <!-- Toutes les cartes -->

    <?php foreach ($artistes as $artiste): ?>
        <div id="cards">
            <div id="card">
                <img class="produit-card" src="<?=$artiste->img ?>" alt="<?= $artiste->name_products ?>">
                <div id="card-header">
                    <h4 id="title"><?= $artiste->name_artiste ?></h4>
                </div>
                <div id="card-body">
                    <p><?= $artiste->description_artiste ?> </p>
                    <p>#<?= $artiste->categorie ?> </p>
                </div>
                <button class="btn"> <a href="/artistes/modify/<?=$artiste->id?>">Modifier</a></button>
                <button class="btn"> <a href="/artistes/delete/<?=$artiste->id?>">Supprimer</a></button>
            </div>
        </div>
    <?php endforeach;?>

    <?php else: ?>


<h1>NOS ARTISTES</h1>

<!-- Section principale -->
<section class="main">
    <!-- Toutes les cartes -->

    <?php foreach ($artistes as $artiste): ?>
        <div class="cards">
            <div class="card">
                <img class="produit-card" src="<?=$artiste->img ?>" alt="<?= $artiste->name_products ?>">
                <div class="card-header">
                    <h4 class="title"><?= $artiste->name_artiste ?></h4>
                </div>
                <div class="card-body">
                    <p><?= $artiste->description_artiste ?> </p>
                    <p>#<?= $artiste->categorie ?> </p>
                </div>
                <button class="btn"> <a href="/artistes/more/<?=$artiste->id?>">Voir plus...</a></button>
            </div>
        </div>
    <?php endforeach;?>


        <?php endif; ?>

