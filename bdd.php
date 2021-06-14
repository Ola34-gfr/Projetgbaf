<?php
    $db_username = 'root';
    $db_password = 'root';
    $db_name     = 'extranetsite';
    $db_host     = 'localhost';

    // connexion à la base de données

    try {
        $bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('erreur:' . $e->getMessage());
    }

    function bddResult($req, $data) {
        global $bdd;

        // TODO: CHECK IF : Loop trough data to escape for SQL attack
        foreach ($data as $key => &$value) {
            $value = htmlspecialchars($value);
        }

        $req = $bdd->prepare($req);
        $req->execute($data);
        return $req->fetch();
    }