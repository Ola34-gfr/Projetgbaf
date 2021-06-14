<?php
    include('bdd.php');
    include('routes.php');
   


    try{
        $ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : NULL;
        $page = isset($_GET['page']) ? $_GET['page'] : NULL;
    } catch (ErrorException $e) {
        // ...
    }

    // TODO: session...
    session_start();



    if(!$page && !$ctrl) $page = 'connection';    //TODO : C MAAAAL

  
    if(pageExist($page))
    {
        // Lance le html de la page:
        includePage($page);
    }
    else if(controllerExist($ctrl))
    {
        // Lance le controleur:
        includeController($ctrl);
    }
    else
    {
        http_response_code(404);
        die;
    }
