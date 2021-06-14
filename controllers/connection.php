<?php
    $success = false;

    $username = $_POST['username'];
    // $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];
    

    //Si la variable $_POST['username'] existe et n'est pas vide
    if($username != NULL && $password != NULL)
    {
        $result = bddResult('SELECT id_user, username, password_hash, nom, prenom FROM `account` WHERE username = :username',
                                ['username' => $username] );

        if($result && password_verify($password, $result['password_hash']))
        {
            $success = true;

            $_SESSION['id_user']    = $result['id_user'];
            $_SESSION['username']   = $result['username'];
            $_SESSION['nom']        = $result['nom'];
            $_SESSION['prenom']     = $result['prenom'];
    
            echo 'Vous êtes connecté !';
        }
        else
        {
            echo 'L\'username ou le password est incorrect !';
        }
    }
    else
    {
        echo 'Tous les champs ne sont pas remplis !';
    }
       
    if($success)
    {
        includePage('accueil');
    }
    else
    {
        includePage('connection');
    }
    