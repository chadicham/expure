<?php
$title = "Accueil";
$description = "Art et Evénementiel : Inspirer un mouvement autour de l’art et la culture pour rendre chaque expérience unique et mémorable.";
?>


<!-- Header -->
<header>
    <h2>Des créations uniques transformées en oeuvre d’art.</h2>
    <button>Découvrir</button>
</header>
<!-- fin Header -->

<!-- Section principale -->
<section class="main">
    <!-- Video de présentation -->
    <div class="video">
        <video controls muted autoplay loop src="/images/SoMe_EXPURE_2.mp4"></video>
    </div>
    <!-- Fin de video de présentation -->
    <!-- Toutes les cartes -->

    <?php foreach ($products as $product): ?>
        <div class="cards">
            <div class="card">
                <img class="produit-card" src="<?=$product->img ?>" alt="<?= $product->name_products ?>">
                <div class="card-header">
                    <h4 class="title"><?= $product->name_products ?></h4>
                    <h4 class="price"><?= $product->price_products ?>.-</h4>
                </div>
                <div class="card-body">
                    <p><?= $product->short_description ?> </p>
                </div>
                <button class="btn"> <a href="/products/more/<?=$product->id?>">Voir plus...</a></button>
            </div>
        </div>
    <?php endforeach;?>

    <!-- Fin Toutes les cartes -->


</section>
<!-- Fin Section principale -->