<?php
    $error = 0;
    $message = '';

    /* récupère les données du formulaire en utilisant la valeur des attributs name comme clé */
    // todo: sécuriser les données et vérifier qu'elles ont une valeur
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $username = htmlspecialchars($_POST['username']);
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);

    // Si une des variable n'a pas de valeur afficher une erreur

    $nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
    $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
    $username = !empty($_POST['username']) ? $_POST['username'] : NULL;
    $password = !empty($_POST['password']) ? $_POST['password'] : NULL;
    $question = !empty($_POST['question']) ? $_POST['question'] : NULL;
    $reponse = !empty($_POST['reponse']) ? $_POST['reponse'] : NULL;

    //verification du pseudo si déjà existant
    $usernameExist = $bdd->prepare('SELECT COUNT(*) FROM account WHERE username = :username');
    $usernameExist->execute(array(
            'username' => $username
        ));
    $usernameExist = $usernameExist->fetchColumn();

    if($usernameExist != 0) {  
        $message = "Desolé, votre username est déja pris<br/> ";
        $error++;  
    }

    if ($error == 0) // ce qu'il n'y a pas d'erreur 
    { 	
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $req = $bdd->prepare('INSERT INTO account (nom, prenom, username, password_hash, question, reponse) VALUES(:nom, :prenom, :username, :password_hash, :question, :reponse)');
        $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'username' => $username,
                'password_hash' => $password_hash,
                'question' => $question,
                'reponse' => $reponse
            ));
    
        $message = "l'inscription s'est bien deroulée";
    }

    echo $message; 
    includePage('connection');
