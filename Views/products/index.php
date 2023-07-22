<?php
$title = "Accueil";
$description = "Art et Evénementiel : Inspirer un mouvement autour de l’art et la culture pour rendre chaque expérience unique et mémorable.";
?>

<?php if (isset($_SESSION["user"]) && $_SESSION["user"]["isAdmin"] === 1): ?>


<h1>PAGE PRODUITS</h1>
<?php if (isset($_SESSION["message"])): ?>
    <p class="message"><?= $_SESSION["message"] ?></p>
<?php endif; unset($_SESSION["message"]) ?>

<!-- Section principale -->
<section id="main-admin">
    <!-- Toutes les cartes -->

    <?php foreach ($products as $product): ?>
        <div id="cards">
            <div id="card">
                <img class="produit-card" src="<?=$product->img ?>" alt="<?= $product->name_products ?>">
                <div id="card-header">
                    <h4 id="title"><?= $product->name_products ?></h4>
                </div>
                <div id="card-body">
                    <p><?= $product->short_description ?> </p>
                </div>
                <div id="artiste_name">
                    <h4 id="price"><?= $product->price_products ?> .-</h4>
                    <p>#<?= $product->artiste_name ?> </p>
                </div>
                <button class="btn"> <a href="/products/modify/<?=$product->id?>">Modifier</a></button>
                <button class="btn"> <a href="/products/delete/<?=$product->id?>">Supprimer</a></button>
            </div>
        </div>
    <?php endforeach;?>


    <?php else: ?>


<h1>PAGE PRODUITS</h1>

<!-- Section principale -->
<section class="main">
    <!-- Toutes les cartes -->

    <?php foreach ($products as $product): ?>
        <div class="cards">
            <div class="card">
                <img class="produit-card" src="<?=$product->img ?>" alt="<?= $product->name_products ?>">
                <div class="card-header">
                    <h4 class="title"><?= $product->name_products ?></h4>
                    <h4 class="price"><?= $product->price_products ?></h4>
                </div>
                <div class="card-body">
                    <p><?= $product->short_description ?> </p>
                </div>
                <div class="artiste_name">
                    <p>#<?= $product->artiste_name ?> </p>
                </div>

                <button class="btn"> <a href="/products/more/<?=$product->id?>">Voir plus...</a></button>
            </div>
        </div>
    <?php endforeach;?>

        <?php endif; ?>

