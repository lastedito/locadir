<?php
include('include.php');
$idConnexion =connecterServeurBD();
$req="select numdem from demandes";
$resultat=pg_query($req);
$tab= pg_fetch_array($resultat);
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<form class="f1" method="post" action="action.php" border="1">
	<h1 class="formulaire">Demande de logement</h1>
	<fieldset class="left">
                                    <label class="l1"><b>NUM DEMANDE</b></label><input name="NumDem" type="text" size="6" value="<?php echo $tab['numdem']+1?>"/></br></br></br></br>
                                    <label class="l1"><b>NUMERO CLIENT</b></label><input name="NumCli" type="text" size="8"/></br>
		<label class="l1"><b>Nom du CLIENT</b></label><input name="NomCli" type="text" size="12"/></br>
		<label class="l1"><b>PRENOM CLIENT</b></label><input name="PrenomCli" type="text" size="12"/></br>
		<label class="l1"><b>ADRESSE CLIENT</b></label><input name="AdresseCli" type="text" size="15"/></br>
                                    <label class="l1"><b>CODEVILLE</b></label><input name="CodeVille" type="text" size="15"/></br>
                                    <label class="l1"><b>TELEPHONE CLIENT</b></label><input name="Tel" type="text" size="12"/></br></br>
                  </fieldset>
                  
                  <fieldset class="right">
                                    <label class="l1"><b>TYPE_DEM</b></label><input name="TypeDem" type="text" size="8"/></br>
                                    <label class="l1"><b>DATE_LIMITE</b></label><input name="DateLim" type="text" size="8" value="jj/mm/aaaa"/></br></br>
                                    <label class="l2">Arrondissements demandés</label></br></br><label class="l2"><input name="Adr" type="text" size="6"/></label></br>
                                    <label class="l2"><input name="Adr2" type="text" size="6"/></label></br>
                                    <label class="l2"><input name="Adr3" type="text" size="6"/></label></br>
                                    <label class="l2"><input name="Adr4" type="text" size="6"/></label></br>
                  </fieldset>
         <input class="val" type ="submit" value="Valider"/>
</form>

<form class="button" action="nouveau.php" method="post">
    <input type ="submit" value="Nouveau"/>
</form>

<form class="maj" action="question.php">
    <input type="submit" value="Consulter état appartemment"/>
</form>
    
    
    
    
    
<style>
    
    .maj{
        display:block;
        margin-left:808px;
    }
    
    .button{
    display:block;
    float:center;
    margin-left : 900px;
    margin-top: -37px;
}

.val{
    display:block;
    margin-left : 490px;
    margin-top: 230px;
}

        label
{
	display: block;
	width: 150px;
	float: left;
}

form.f1{
    width:52%;
    margin-left:auto;
    margin-right:auto;
}

fieldset.left{
    width:44%;
    float:left;
    border:1;
}

fieldset.right{
    width:45%;
    float:right;
    border:1;
}

.l2{
	display: block;
	float: right;
                  margin-right:17px;
}
</style>