<?php
require_once("inc/manager-db.php");
require_once ("header.php");
?>
<!DOCTYPE html>
<header> <link <link href="css/formulaire.css" rel="stylesheet"></header>



<div align="center">
    <p> <h1>Voici le schéma de la base de données : </h1> </p>

    <img src="images/worldSR.png">
    <br>
    <br>
</div>
<div align="center">
    <form action="requete.php" method="get">
        <label for="msg">
            <textarea id="msg" name="requete"></textarea>
        </label>
            <input type="submit" name="create" value="submit" />

    </form>
</div>
<div align="center">
</div>


</html>