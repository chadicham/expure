
<?php
$title = "Accueil";
$description = "Page réservée à l'admin afin de modifier les articles.";
?>
<form id="form" method="post">
    <h2>Modifier un produit</h2>
    <div class="label"><label for="name_products">Nom du produit </label></div>
    <input id="" type="" name="name_products" value="<?=$product->name_products?>">
    <div class="label"><label for="price_products">Prix du produit </label></div>
    <input id="" type="" name="price_products" value="<?=$product->price_products?>">
    <div class="label"><label for="short_description">Petite description </label></div>
    <input id="" type="" name="short_description" value="<?=$product->short_description?>">
    <div class="label"><label for="Long_description">Longue description </label></div>
    <input id="" type="" name="long_description" value="<?=$product->long_description?>">
    <div class="label"><label for="categorie_name">Nom de la catégorie </label></div>
    <input id="" type="" name="categorie_name" value="<?=$product->categorie_name?>">
    <div class="label"><label for="artist_name">Nom de l'artiste </label></div>
    <input id="" type="" name="artist_name" value="<?=$product->artiste_name?>">
    <button class="btn" type="submit">Modifier</button>
</form>

<?php if(isset($_SESSION["error"])): ?>

    <div class="error-add">
        <p><?= $_SESSION["error"] ?></p>
    </div>

<?php endif;
unset($_SESSION["error"])
?>
