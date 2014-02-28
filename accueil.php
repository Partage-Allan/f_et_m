<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="./css/menu.css" type="text/css" media="screen"/>
        <script type='text/javascript' src='../js/jquery.js'></script>
       
        <title>Formes et Matières</title></head>
    <body>
        <div id="canevas">
            <header><img id="logo" src="./images/logo1.png" alt="logo"><img id="texte-titre" src="./images/txt_f_et_m.png" alt="texte formes et Matières"></header>
        <div id="big_conteneur">
            
              <ul id="navigation" class="nav-main">
                  <li><a href="accueil.php">Accueil</a></li>

                    <li class="list"><a href="#">Créations</a>
                        <ul class="nav-sub">
                                <li><a href="">Maison</a></li>
                                <li><a href="">Jardin</a></li>
                                <li><a href="">Dans la poche</a></li>
                                <li><a href="">Sellerie</a></li>
                                <li><a href="">Inclassables</a></li> 
                        </ul>
                    </li>
                    <li class="list"><a href="#">Informations</a>
                        <ul class="nav-sub">
                            <li><a href="presentation.php">Présentation</a></li>
                            <li><a href="">Articles</a></li>
                            <li><a href="">Informations</a></li>
                        </ul>
                    </li>
                    <li><a href="">Nous contacter</a></li>
                    <li><a href="">A déterminer</a></li>
            </ul>
            <p id="fil_d_ariane">Accueil ></p>
            <div id="corps">
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
                            printf("<div class=\"news_complete\" ><p class=\"titre_news\">$titre");
                            printf("<p class=\"contenu_news\" >$contenu </p>");
                            printf("<p class=\"date_news\" >$date - $heure</p></div>");
                            }
    
                            $resultat->closeCursor();
                ?>
            </div>
        </div>
        <footer></footer>
        </div>
    </body>
</html>
