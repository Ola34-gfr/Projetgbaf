<?php
    if(session_destroy()) { 

        echo "Vous avez bien été déconnecté !";

        includePage('connection');
    }
    else {
        die("ERREUR: problème de déconnection");
    }
