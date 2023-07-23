
<?php
$title = "Accueil";
$description = "Page réservée à l'admin afin de modifier les articles.";
?>
<form id="form" method="post">
    <h2>Modifier un produit</h2>
    <div class="label"><label for="name_artiste">Nom de l'artiste </label></div>
    <input id="" type="" name="name_artiste" placeholder="Nom de l'artiste" value="<?= $artiste->name_artiste?>">
    <div class="label"> <label for="description_artiste">Description artiste </label></div>
    <input id="" type="" name="description_artiste" placeholder="Description artiste" value="<?= $artiste->description_artiste?>">
    <div class="label">  <label for="categorie">Spécialisation de l'artiste </label></div>
    <input id="" type="" name="categorie" placeholder="Spécialisation de l'artiste" value="<?= $artiste->categorie?>">
    <button class="btn" type="submit">Modifier</button>
</form>

<?php if(isset($_SESSION["error"])): ?>

    <div class="error-add">
        <p><?= $_SESSION["error"] ?></p>
    </div>

<?php endif;
unset($_SESSION["error"])
?>
