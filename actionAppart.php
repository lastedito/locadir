<?php
include('include.php');
$idConnexion =connecterServeurBD();
$NumAppartPrec=$_POST['Cache'];
//Locataires
$NomLoc=$_POST['NomLoc'];
$PrenomLoc=$_POST['PrenomLoc'];
$DateNaissance=$_POST['DateNaissance'];
$RIB=$_POST['RIB'];
$TelBanque=$_POST['TelBanque'];
$TelLoc=$_POST['TelLoc'];

$req="update locataires set nomloc='".$NomLoc."', prenomloc='".$PrenomLoc."', datenaiss='".$DateNaissance."', RIB='".$RIB."', telbanque='".$TelBanque."', telloc='".$TelLoc."' where numappart='".$NumAppartPrec."'";
$loc=pg_query($req);

//Proprietaires
$Nom=$_POST['NomProp'];
$Prenom=$_POST['PrenomProp'];
$Adresse=$_POST['AdresseProp'];
$CodeVille=$_POST['CodeVilleProp'];
$Tel=$_POST['TelProp'];

$req2="update proprietaires,appartements set proprietaires.nom='".$Nom."', proprietaires.prenom='".$Prenom."', proprietaires.adresse='".$Adresse."', proprietaires.codeville='".$CodeVille."', proprietaires.tel='".$Tel."' where appartements.numappart='".$NumAppartPrec."' and proprietaires.numprop=appartements.numprop";
$prop=pg_query($req2);

//Appartements
$NumAppart=$_POST['NumAppart'];
$TypAppart=$_POST['TypAppart'];
$PrixLoc=$_POST['PrixLoc'];
$PrixCharge=$_POST['PrixCharge'];
$Rue=$_POST['Rue'];
$Ascenseur=$_POST['Ascenseur'];
$Preavis=$_POST['Preavis'];
$DateLibre=$_POST['DateLibre'];

$req3="update appartements set numappart='".$NumAppart."', typappart='".$TypAppart."', prixloc='".$PrixLoc."', prixcharg='".$PrixCharge."', rue='".$Rue."', ascenseur='".$Ascenseur."', preavis='".$Preavis."', datelibre='".$DateLibre."' where numappart='".$NumAppartPrec."'";
$appart=pg_query($req3);

?>