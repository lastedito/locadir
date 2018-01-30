<?php
include('include.php');
$idConnexion =connecterServeurBD();
$NumCli=$_POST["NumCli"];
$NomCli=$_POST["NomCli"];
$PrenomCli=$_POST["PrenomCli"];
$AdresseCli=$_POST["AdresseCli"];
$CodeVille=$_POST["CodeVille"];
$Tel=$_POST["Tel"];

$req="insert into Clients(numcli,nomcli,prenomcli,adressecli,codeville,telcli) values (".$NumCli.","."'".$NomCli."'".","."'".$PrenomCli."'".","."'".$AdresseCli."'".","."'".$CodeVille."'".","."'".$Tel."'".")";
$resultat=pg_query($req);
?>