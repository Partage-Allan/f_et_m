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
            </div>
            
            <h2>Les dernières news postées:</h2>
             
<?php
require ("sql.inc.php");

$sql="SELECT * FROM (SELECT * FROM news ORDER BY heure_new DESC) table_temp ORDER BY date_new DESC";
$resultat = executer_requete($sql);
    while ($donnees = $resultat->fetch()){
        $id = $donnees['id_new'];
        $titre = $donnees['titre_new'];
        $contenu = $donnees['contenu_new'];
        $date = $donnees ['date_new'];
        $heure = $donnees['heure_new'];
        echo "<p>Titre: $titre </p><br/><br/>";
        echo "Conetnu: $contenu <br/><br/>";
        echo "<p>Date de publication: $date - $heure</p><br/>";
        echo "<a href=\"modifier_news.php?id=" . $id . "\">Modifier cette news</a>";
        echo " -- <a href=\"supprimer_news.php?id=" . $id . "\">Supprimer cette new</a>";
        echo "</p>";
    }
    
    $resultat->closeCursor();
?>