<?php
$title = "Ajouter un artiste";
$description = "Art et Evénementiel : Inspirer un mouvement autour de l’art et la culture pour rendre chaque expérience unique et mémorable.";
?>
<div id="form" >
    <H2>Ajoutez un/une artiste</H2>
    <form method="post">
        <div class="label"><label for="name_artiste">Nom de l'artiste </label></div>
        <input id="" type="" name="name_artiste" placeholder="Nom de l'artiste">
        <div class="label"> <label for="description_artiste">Description artiste </label></div>
        <input id="" type="" name="description_artiste" placeholder="Description artiste">
        <div class="label">  <label for="categorie">Spécialisation de l'artiste </label></div>
        <input id="" type="" name="categorie" placeholder="Spécialisation de l'artiste">
        <button class="btn" type="submit">Ajouter</button>
    </form>
</div>
<?php if(isset($_SESSION["error"])): ?>

    <div class="error-add">
        <p><?= $_SESSION["error"] ?></p>
    </div>

<?php endif;
unset($_SESSION["error"])
?>
