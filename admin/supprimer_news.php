<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen"/>
        <script type='text/javascript' src='js/jquery.js'></script>
       
        <title>Formes et Matières</title>
    </head>
    <body>
        <div id="canevas">
            <header><img id="logo" src="../images/logo1.png" alt="logo"><img id="texte-titre" src="../images/txt_f_et_m.png" alt="texte formes et Matières"></header>
            <div id="big_conteneur">
                <ul id="navigation" class="nav-main">
                    <li class="list"><a href="index.php/">Accueil Admin</a></li>
                    <li class="list"><a href="news.php">Gestion News</a>
                        <ul class="nav-sub">
                            <li><a href="creer_news.php">Creer une news</a></li>
                </ul>
                </ul>
 
<?php
require ("sql.inc.php");
if(isset($_GET["id"]) && $_GET['suppr'] == "true")
{    
    $id=$_GET["id"];
    $sql="DELETE FROM news WHERE id_new = '" . $id . "'";
    $resultat = executer_requete($sql);
    printf("<p>La news à été supprimée.</p>");
    printf("<p><a href=\"news.php\">Retour au menu news</a></p>");
}
?>
            </div>
        </div>
    </body>
</html>  
  