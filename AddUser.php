<!DOCTYPE html>
<?php
require_once("inc/manager-db.php");
require_once 'inc/connect-db.php';

?>
<html>
<header>  <link href="css/formulaire.css" rel="stylesheet"></header>

<body>
<div align="center">
<form class="form-style-4" action="index.php" method="GET">
    <label for="field1">
        <span>Last Name</span><input type="text" name="nom" required="true" />
    </label>
    <label for="field2">
        <span>Your Name </span><input type="text" name="prenom" required="true" />
    </label>
    <label for="field3">
        <span>Login</span><input type="text" name="login" required="true" />
    </label>
    <label for="field4">
        <span>Password</span><input type="text" name="password"  required="true">
    </label>
    <label for="field4">
        <span></span><input type="hidden" name="role" value="user" required="true">
    </label>
    <label>
        <span> </span><input type="submit" name="add" value="submit" />
    </label>
</div>
</form>


</body>
</html>