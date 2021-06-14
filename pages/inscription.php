<form enctype="multipart/form-data" method="POST" action="?ctrl=inscription" >
    
    <label><b>Nom</b></label>
    <input type="text" placeholder="Entrer votre nom" name="nom" required>

    <label><b>Prénom</b></label>
    <input type="text" placeholder="Entrer votre prenom" name="prenom" required>

    <label><b>UserName</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <label><b>Question secrète</b></label>
    <input type="text" placeholder="Créer une question" name="question" required>

    <label><b>Réponse à la question secrète</b></label>
    <input type="text" placeholder="Entrer la réponse" name="reponse" required>

    <input  type="submit" name='submit' value="S'inscrire" />  

    <p> Les champs précédés  d'un * sont obligatoires </p> 
</form>
