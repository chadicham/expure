<?php if (isset($_SESSION["user"]))
{
    //Renvoie sur la page profil
    header("Location: /users/profil");
}
?>
<?php if(isset($_SESSION["message"])): ?>

    <div class="error-add">
        <p><?= $_SESSION["message"] ?></p>
    </div>

<?php endif;
unset($_SESSION["message"])
?>
<h1>
login
</h1>

<form method="post">
    <input id="" type="email" name="email" placeholder="email">
    <input id="" type="password" name="password" placeholder="password">
    <button class="btn" type="submit">Se connecter</button>

</form>