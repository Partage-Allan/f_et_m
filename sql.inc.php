<?php
function executer_requete ($requete)
{
    try
    {	$bdd = new PDO('mysql:host=localhost;dbname=f_et_m', 'root', '');

            }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query($requete) or die(mysql_error());
    return $reponse;
}
?>