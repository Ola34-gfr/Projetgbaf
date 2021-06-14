<form action="?ctrl=comments" method="post">
    <p>
    <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
    <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

    <input type="submit" value="Envoyer" />
</p>
</form>

<?php
// Connexion à la base de données
try {
    $bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(Exception $e) {
    die('erreur:' . $e->getMessage());
}

// Récupération des 3 derniers messages
$reponse = $bdd->query('SELECT id_user, id_post FROM post ORDER BY id_acteur DESC LIMIT 0, 3');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>