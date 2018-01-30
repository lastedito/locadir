<?php
include('include.php');
$idConnexion =connecterServeurBD();
$NumDem=$_POST["NumDem"];
$NumCli=$_POST["NumCli"];
$NomCli=$_POST["NomCli"];
$PrenomCli=$_POST["PrenomCli"];
$AdresseCli=$_POST["AdresseCli"];
$CodeVille=$_POST["CodeVille"];
$Tel=$_POST["Tel"];
$TypeDem=$_POST["TypeDem"];
$DateLim=$_POST["DateLim"];
$Adr=$_POST["Adr"];
$Adr2=$_POST["Adr2"];
$Adr3=$_POST["Adr3"];
$Adr4=$_POST["Adr4"];

$req="insert into demandes(numdem,numcli,typedem,datelimite) values (".$NumDem.",".$NumCli.","."'".$TypeDem."'".","."'".$DateLim."'".")";
$resultat=pg_query($req);
?>