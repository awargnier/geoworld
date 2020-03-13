<?php
require_once 'header.php';
require_once ('inc/connect-db.php');
require_once 'inc/manager-db.php';


$drapeauMaj=$_GET['code'];
$drapeau = strtolower($drapeauMaj);

$id = $_GET['id'];
$country = getCountryId($id);

$Capital = getCapital($id);

$language = getLanguage($id)
?>


<html lang="fr" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="css/custom.css" rel="stylesheet">
    <title>Information <?php echo $country->Name ?></title>
</head>
<body>
<div align="center">
    <h1> <img src="images/drapeau/<?php echo $drapeau?>.png" width="3%" height="5%"> <?php echo $country->Name ?></h1>
    <a href="MajCountry.php?id=<?php echo(htmlentities($country->id)) ;?>"><button type="button" class="btn btn-outline-danger" >Update</button></a>
    <br><br>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm " align="center">
            <h4>Population</h4>
            <h5><?php echo $country->Population ?> hab</h5>
        </div>
        <div class="col-sm" align="center">
            <h4>Surface</h4>
            <h5><?php echo $country->SurfaceArea?> km</h5>
        </div>
        <div class="col-sm" align="center">
            <h4>Capital</h4>
            <h5><?php echo $Capital->Name?></h5>
        </div>
        <div class="col-sm" align="center">
            <h4>Position</h4>
            <h5><?php echo $country->Region?></h5>
        </div>

    </div>
</div>

<br><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm" align="center">
            <h4>Independence</h4>
            <h5><?php echo $country->IndepYear?></h5>
        </div>
        <div class="col-sm" align="center">
            <h4>Government</h4>
            <h5><?php echo $country->GovernmentForm?></h5>
        </div>
        <div class="col-sm" align="center">
            <h4>Language</h4>
            <?php foreach ($language as $value ):?>
                <table>
                    <tr>
                        <?php echo $value->Name?>
                        <?php echo $value->Percentage?>%
                    </tr>
                </table>
            <?php endforeach;?>

        </div>
        <div class="col-sm" align="center">
            <h4>Head of the country</h4>
            <h5><?php echo $country->HeadOfState?></h5>
        </div>
    </div>

</div>

<br><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm" align="center">
            <h4>GNP</h4>
            <h5><?php echo $country->GNP?>€</h5>
        </div>
        <div class="col-sm" align="center">
            <h4>Lifetime</h4>
            <h5><?php echo $country->LifeExpectancy?> ans</h5>
        </div>
        <div class="col-sm" align="center">


        </div>
        <div class="col-sm" align="center">

        </div>
    </div>

</div>
</body>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
</html>
