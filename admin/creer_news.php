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
                    <li class="list"><a href="index.php">Accueil Admin</a></li>
                    <li class="list"><a href="news.php">Gestion News</a>
                        <ul class="nav-sub">
                            <li><a href="creer_news.php">Creer une news</a></li>
                        </ul>
                    </li>
                </ul>
            
                <h1>Creer une nouvelle news !</h1><br/><br/>     
     
            
<?php
    require ("sql.inc.php");
    
    //Vérifier que la variable est présente, et afficher "news crée"
    if(isset($_GET['creation']) && $_GET['creation'] == "true")
    {
        printf("<p>La news à été ajoutée.</p>");
        printf("<p><a href=\"news.php\">Retour au menu news</a></p>");
        
        if(!empty($_POST))
        {
            extract($_POST);
            $date = date('Y-m-d');
            $heure = date('H:i:s');
            $sql= "INSERT INTO news VALUES ('', '$titre_new', '" . addslashes($contenu_new) . "', '$date', '$heure')";
            $resultat = executer_requete($sql);

        }
    }   
    else
    {
        printf("<form method=\"post\" action=\"creer_news.php?creation=true\"/>");
            printf("Titre : <input type=\"text\" name=\"titre_new\" id=\"titre_new\" style=\"margin-left: 20px;\"/><br/><br/>");
            printf("Contenu: <textarea name=\"contenu_new\" id=\"contenu_new\" style=\"width:300px;height:150px;\"></textarea><br/><br/>");    
            printf("<input type=\"submit\" value=\"Créer news\" style=\"margin-left: 160px\"/>");
        printf("</form><br/><br/>");  
    }
?>
                           
            </div>
        </div>
    </body>
</html>