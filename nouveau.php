<?php
include('include.php');
$idConnexion =connecterServeurBD();
$req="select max(numcli) as maximum from Clients";
$resultat=pg_query($req);
$tab=pg_fetch_array($resultat);
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<form method="post" action="actionNv.php">
	<h1 class="formulaire">Client Nouveau</h1>
	<fieldset class="left">
            <label class="l1"><b>NUM_CLI</b></label><input name="NumCli" type="text" size="6" value="<?php echo $tab['maximum']+1?>" /><fieldset class="l2"><label>Numéro_du_dernier_client</label><input name="name" type="text" size="6" value="<?php echo $tab['maximum']; ?>" /></fieldset></br>
                                    <label class="l1"><b>NOM_CLI</b></label><input name="NomCli" type="text" size="10"/></br>
		<label class="l1"><b>PRENOM_CLI</b></label><input name="PrenomCli" type="text" size="10"/></br>
		<label class="l1"><b>ADRESSE_CLI</b></label><input name="AdresseCli" type="text" size="15"/></br>
                                    <label class="l1"><b>CODEVILLE_CLI</b></label><input name="CodeVille" type="text" size="15"/></br>
                                    <label class="l1"><b>TEL_CLI</b></label><input name="Tel" type="text" size="10"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>


<form method="post" action="formulaire.php">
    <input type="submit" value="sortir">
</form>

<style>
        .l1
{
	display: block;
	width: 150px;
	float: left;
}
form{
    width:50%;
    margin-left:auto;
    margin-right:auto;
}
.l2{
    display:inline;
    margin-left:50px;
    width:40%;
}
</style>