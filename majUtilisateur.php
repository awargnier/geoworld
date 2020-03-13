<?php
require_once("inc/manager-db.php");
$id = $_GET['id'];
$utilisateur = getUtilisateurId($id);


?>
<!DOCTYPE html>
<html>
<header> <link <link href="css/formulaire.css" rel="stylesheet"></header>



<div align="center">
    <form class="form-style-4" action="utilisateur.php" method="POST">
        <label for="field1">
            <span>Last Name</span><input type="text" name="nom"  value="<?php echo(htmlentities( $utilisateur->nom)) ?>" required="true" />
        </label>
        <label for="field2">
            <span>Your Name </span><input type="text" name="prenom"  value="<?php echo(htmlentities( $utilisateur->prenom))?>" required="true" />
        </label>
        <label for="field3">
            <span>Login</span><input type="text" name="role"  value="<?php echo(htmlentities( $utilisateur->role))?>" required="true" />
        </label>
        <label for="field4">
            <span>Password</span><input type="text" name="login"  value="<?php echo(htmlentities( $utilisateur->login))?>"  required="true">
        </label>
        <label for="field5">
            <span> role </span><input type="text" name="password" value="<?php echo(htmlentities($utilisateur->password))?>" required="true">
        </label>
        <label for="field6">
            <span> </span><input type="hidden" name="id" value="<?php echo(htmlentities($utilisateur->id))?>" required="true">
        </label>
        <label>
            <span> </span><input type="submit" name="update" value="submit" />
        </label>
    </form>

</html>