<?php
require_once("inc/manager-db.php");
$id = $_GET['id'];
$country = getCountryId($id);


?>
<!DOCTYPE html>
<html>
<header> <link <link href="css/formulaire.css" rel="stylesheet"></header>


    <div align="center">
        <form class="form-style-4" action="index.php" method="POST">
            <label for="field1">
                <input type="hidden" name="id" value="<?php echo(htmlentities($country->id)) ?> required="true">
            </label>
            <label for="field2">
                <span>Code: </span><input type="text" name="Code" value="<?php echo(htmlentities($country->Code)) ?>" required="true">
            </label>
            <label for="field3">
                <span>Name: </span><input type="text" name="Name" value="<?php echo(htmlentities($country->Name)) ?>" required="true">
            </label>
            <label for="field4">
                <span>Continent:</span> <input type="text" name="Continent"
                                               value="<?php echo(htmlentities($country->Continent)) ?>" required="true">
            </label>
            <label for="field5">
                <span>Region: </span> <input type="text" name="Region"
                                             value="<?php echo(htmlentities($country->Region)) ?> " required="true">
            </label>
            <label for="field6">
                <span>Surface Area: </span> <input type="text" name="SurfaceArea"
                                                   value="<?php echo(htmlentities($country->SurfaceArea)) ?>" required="true">
            </label>
            <label for="field7">
                <span>Indep Year: </span><input type="text" name="IndepYear"
                                                value="<?php echo(htmlentities($country->IndepYear)) ?>" required="true">
            </label>
            <label for="field8">
                <span>Population: </span><input type="text" name="Population"
                                                value="<?php echo(htmlentities($country->Population)) ?>" required="true">
            </label>
            <label for="field9">
                <span>Life Expectancy:</span> <input type="text" name="LifeExpectancy"
                                                     value="<?php echo(htmlentities($country->LifeExpectancy)) ?>" required="true">
            </label>
            <label for="field10">
                <span>GNP: </span> <input type="text" name="GNP" value="<?php echo(htmlentities($country->GNP)) ?>" required="true">
            </label>
            <label for="field11">
                <span>GNP Old: </span><input type="text" name="GNPOld"
                                             value="<?php echo(htmlentities($country->GNPOld)) ?>" required="true">
            </label>
            <label for="field12">
                <span>Local Name: </span><input type="text" name="LocalName"
                                                value="<?php echo(htmlentities($country->LocalName)) ?>" required="true">
            </label>
            <label for="field13">
                <span>Government Form: </span><input type="text" name="GovernmentForm"
                                                     value="<?php echo(htmlentities($country->GovernmentForm)) ?>" required="true">
            </label>
            <label for="field14">
                <span> HeadOfState: </span><input type="text" name="HeadOfState"
                                                  value="<?php echo(htmlentities($country->HeadOfState)) ?>" required="true">
            </label>
            <label for="field15">
                <span>Capital:</span> <input type="text" name="Capital"
                                             value="<?php echo(htmlentities($country->Capital)) ?>" required="true">
            </label>
            <label for="field16">
                <span>Code2:</span> <input type="text" name="Code2"
                                           value="<?php echo(htmlentities($country->Code2)) ?>" required="true">
            </label>
            <label>
                <span> </span><input type="submit" name="update2" value="submit" />
            </label>
        </form>
    </div>


</html>
