<?php
include('include.php');
$idConnexion =connecterServeurBD();
$NumAppart=$_POST["NumAppart"];
$req="select * from appartements where numappart=".$NumAppart."";
$req2="select * from locataires where numappart=".$NumAppart."";
$req3="select * from proprietaires, appartements where proprietaires.numeroprop=appartements.numeroprop and appartements.numappart=".$NumAppart."";
$appartements=pg_query($req);
$locataires=pg_query($req2);
$proprietaires=pg_query($req3);
$tab=pg_fetch_array($appartements);
$tab2=pg_fetch_array($locataires);
$tab3=pg_fetch_array($proprietaires);
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<form class="appart" method="post" action="actionAppart.php">
    
    <input name="Cache" type="hidden"  value="<?php echo $NumAppart ?>"/></br> <!-- Pour garder la variable inchangé pour l'action du form -->
   
    <label class="lappart">NUMAPPART</label><input name="NumAppart" type="text" size="6" value="<?php echo $NumAppart ?>"/></br>
    <label class="lappart">TYPAPPART</label><input name="TypAppart" type="text" size="15" value="<?php echo $tab['typappart'] ?>"/></br>
    <label class="lappart">PRIX_LOC</label><input name="PrixLoc" type="text" size="15" value="<?php echo $tab['prixloc'] ?>"/></br>
    <label class="lappart">PRIX_CHARGE</label><input name="PrixCharge" type="text" size="15" value="<?php echo $tab['prixcharg'] ?>"/></br>
    <label class="lappart">RUE</label><input name="Rue" type="text" size="6"value="<?php echo $tab['rue'] ?>"/></br>
    <label class="lappart">ASCENSEUR</label><input name="Ascenseur" type="checkbox" size="6" <?php if ($tab['ascenseur']==1){ 
                                                                                                                                                                                                        echo"checked='checked'";
                                                                                                                                                                                                      ?> value="1"<?php } ?>/></br>
    <label class="lappart">PREAVIS</label><input name="Preavis" type="checkbox" size="6" <?php if ($tab['ascenseur']==1){ 
                                                                                                                                                                                                echo"checked='checked'";
                                                                                                                                                                                            ?> value="1"<?php } ?>/></br>
    <label class="lappart">DATE_LIBRE</label><input name="DateLibre" type="text" size="6" value="<?php echo $tab['datelibre'] ?>"/></br>
    
    
    <fieldset class="locataires">
        <legend>Locataires</legend>
        <label class="lappart">NOM_LOC</label><input name="NomLoc" type="text" size="15" value="<?php echo $tab2['nomloc'] ?>"/></br>
        <label class="lappart">PRENOM_LOC</label><input name="PrenomLoc" type="text" size="12" value="<?php echo $tab2['prenomloc'] ?>"/></br>
        <label class="lappart">DATE_NAISS</label><input name="DateNaissance" type="text" size="6" value="<?php echo $tab2['datenaiss'] ?>"/></br>
        <label class="lappart">RIB</label><input name="RIB" type="text" size="18" value="<?php echo $tab2['rib'] ?>"/></br>
        <label class="lappart">TEL_BANQUE</label><input name="TelBanque" type="text" size="12" value="<?php echo $tab2['telbanque'] ?>"/></br>
        <label class="lappart">TEL_LOC</label><input name="TelLoc" type="text" size="12" value="<?php echo $tab2['telloc'] ?>"/></br>
    </fieldset>

    </br></br>
    <fieldset class="proprietaires">
        <legend>Proprietaires</legend>
        <label class="lappart">NOM</label><input name="NomProp" type="text" size="15" value="<?php echo $tab3['nom'] ?>"/></br>
        <label class="lappart">PRENOM</label><input name="PrenomProp" type="text" size="15" value="<?php echo $tab3['prenom'] ?>"/></br>
        <label class="lappart">ADRESSE</label><input name="AdresseProp" type="text" size="15" value="<?php echo $tab3['adresse'] ?>"/></br>
        <label class="lappart">CODEVILLE</label><input name="CodeVilleProp" type="text" size="15" value="<?php echo $tab3['codeville'] ?>"/></br>
        <label class="lappart">TEL</label><input name="TelProp" type="text" size="15" value="<?php echo $tab3['tel'] ?>"/></br>
    </fieldset>
             <input class="val" type ="submit" value="Valider"/>
</form>
<form class="out" method="post" action="formulaire.php">
    <input class="out" type="submit" value="Retour">
</form>

<style>
    .lappart{
        display:block;
        float:left;
        width:125px;
    }
    
    fieldset.locataires{
        float:right;
        width:50%;
        display:block;
        margin-top:-180px;
    }
        fieldset.proprietaires{
        float:left;
        width:45%;
        display:block;
    }
