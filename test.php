<?php
require ("sql.inc.php");

$sql="SELECT * FROM news";
$resultat = executer_requete($sql);
    while ($donnees = $resultat->fetch()){
        $titre = $donnees['titre_new'];
        $contenu = $donnees['contenu_new'];
        $date = $donnees['date_new'];
        echo "<h1>$titre</h1>";
        echo "<p>$contenu</p>";
        echo "<p>$date</p>";
    }
    
    $resultat->closeCursor();
?>