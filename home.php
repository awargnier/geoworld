<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/custom.css"

</head>
<?php require_once 'header.php';
require_once('inc/connect-db.php');
require_once 'inc/manager-db.php';



$continent = (empty($_GET['continent']) ? 'Europe' : $_GET['continent']);

$desPays = getCountriesByContinent($continent);

if (isset($_POST['update2'])) {
    updateCountry($_POST);
}
if (isset($_GET['add'])) {
    addUser($_GET);
}
?>

<body>
<div class="container" align="center">
    <h1>Countries in <?php echo(htmlentities($continent)) ?></h1>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <?php foreach ($desPays as $value): ?>

    <ul id="myUL">
        <!--td> <?php echo (htmlentities($value->id)); ?> </td-->
        <li > <a href="infoPays.php?id=<?php echo (htmlentities($value->id));?>"> <?php echo(htmlentities($value->Name)) ;?> </a></li>
        <?php endforeach;?>
    </ul>
</div>
</html>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
