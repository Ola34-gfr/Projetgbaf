<form action="?ctrl=connection" method="POST">
    <label><b>UserName</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <div class="auth-form_mdp-oublié">
        <a id="auth-form_mdp-oublié" href="?page=passwordforgotten">Mot de passe oublié ?</a>
    </div>

    <input type="submit" name='submit' value='LOGIN' >
    <?php
    if(isset($_POST['erreur'])){
        $erreur = $_POST['erreur'];
        if($erreur==1 || $erreur==2)
            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
    ?>
    <div id="info_nvcompte">
        <p>Vous n'avez pas encore de compte ?</p>
        <a href="?page=inscription">Créer son compte</a> maintenant !
    </div>
</form>