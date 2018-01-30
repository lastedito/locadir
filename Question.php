<?php
include('include.php');
$idConnexion =connecterServeurBD();
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
Quel appartement voulez-vous voir? </br>
<form class="question" method="post" action="consulAppart.php">
    <input name="NumAppart" type="text" size="8"/></br>
             <input class="val" type ="submit" value="Valider"/>
</form>
