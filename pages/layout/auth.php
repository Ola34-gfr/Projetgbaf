<!DOCTYPE html>
<html>
    <head>
        <!-- importer le fichier de style -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="pages/layout/style.css" media="screen" type="text/css" />

        <title><?php echo $_data['title']?></title>
    </head>
    <body>
        <div id="container" class="auth">
            <h1><?php echo $_data['title']?></h1>

            <?php include("pages/$_page.php")?>
        </div>
    </body>
</html>