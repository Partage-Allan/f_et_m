<?php
require ("sql.inc.php");
$id=$_GET["id"];
$sql="DELETE FROM news WHERE id_new={$_GET["id"]}";
$resultat = executer_requete($sql);
header("Location: index.php");

?>