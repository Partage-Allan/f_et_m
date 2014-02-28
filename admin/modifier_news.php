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
                    </li>
                </ul>
            
<?php
require ("sql.inc.php");
if(isset($_GET["id"]))
    $id=$_GET["id"];
//condition vérifier si 2eme var du action est présente, et afficher ou non le message de modification
if(isset($_GET["modif"]) && $_GET["modif"] == "true")
{
    
    printf("<p>La news à été modifiée.</p>");
    printf("<p><a href=\"news.php\">Retour au menu news</a></p>");
    
    // Je vérifie si le formulaire à été rempli
    if(!empty($_POST))
    {
        extract($_POST);
        $sql="UPDATE news SET titre_new ='" . $titre_new . "', contenu_new = '" . addslashes($contenu_new) . "' WHERE id_new ='" . $id . "'"; 
        $resultat = executer_requete($sql);   
    }
}
else
{
    // Je creer ma requete pour recup tous les champ correspondant à ma news
    $sql="SELECT * FROM news WHERE id_new ='" . $id . "'";
    // Je lance ma requete
    $resultat = executer_requete($sql);
    // La requete se lance et récup donc tous les champs de la news avec pour id = $id
    // Je stock dans des variables chaque champ de ma table news grâce à une boucle de données
    while ($donnees = $resultat->fetch()){
        $id = $donnees['id_new'];
        $titre = $donnees['titre_new'];
        $contenu = $donnees['contenu_new'];
    }
    // Je ferme ma connection à la baseush 
    $resultat->closeCursor();

    printf("<form method=\"post\" action=\"modifier_news.php?id=$id&modif=true\">");
        printf("Titre : <input type=\"text\" name=\"titre_new\" id=\"titre_new\" value=\"$titre\";/><br/><br/>");
        printf("Contenu: <textarea name=\"contenu_new\" id=\"contenu_new\" style=\"width:300px;height:150px;\">$contenu</textarea><br/><br/>");    
        printf("<input type=\"submit\" value=\"Modifier cette news\" style=\"margin-left: 160px\"/>");
    printf("</form><br/><br/>");
}
?>
            </div>
        </div>
    </body>
</html>




























