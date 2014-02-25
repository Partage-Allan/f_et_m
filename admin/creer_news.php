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
            
                <h1>Creer une nouvelle news !</h1><br/><br/>     
                <form method="post" action="creer_news.php"/>
                    Titre : <input type="text" name="titre_new" id="titre_new" style="margin-left: 20px;"/><br/><br/>
                    Contenu: <textarea name=contenu_new id="contenu_new" style="width:300px;height:150px;"></textarea><br/><br/>    
                    <input type="submit" value="Creer news" style="margin-left: 160px"/>
                </form><br/><br/>                     
            </div>
            
            <?php
                    require ("sql.inc.php");
                    if(!empty($_POST))
                    {
                        extract($_POST);
                        $date = date('Y-m-d H:i:s');
                        $sql= "INSERT INTO news VALUES ('', '$titre_new', '$contenu_new', '$date')";
                        $resultat = executer_requete($sql);
                        header("Location: news.php");
                    }
            ?>