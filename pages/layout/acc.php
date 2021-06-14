<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="pages/layout/accueil.css" media="screen" type="text/css" />

        <title><?php echo $_data['title']?></title>
    </head>
    <body>
        <header>
            <img src="photogbaf-ConvertImage.png" alt="la photo du logo GBAF">

            <div id="user-info">
                    Bonjour <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
            </div>   

            <div id="deconnect">
                <a href="?ctrl=deconnection" class="action-button">DECONNEXION</a>
            </div>
        </header>

        <div id="container" class="acc">


            <?php include("pages/$_page.php")?>
            <footer id="pied_de_page">
                    <p>| Mentions légales | Contact |</p>
            </footer>
        </div>
    </body>
</html>