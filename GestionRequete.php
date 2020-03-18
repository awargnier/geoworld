<?php
require_once('header.php');
require_once 'inc/connect-db.php';


require_once("inc/manager-db.php");

if (isset($_POST['requete'])) {
    updateRequete($_POST);
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    deleteRequete($id);
}

$listeRequete = getRequete();
?>


    <table class="table">
        <tr>
            <th>id</th>
            <th>Requete</th>
            <th>delete</th>
        </tr>
        <tbody>
        <?php
        foreach ($listeRequete as $indice => $ligne):?>
            <tr>
                <th> <?php echo(htmlentities($ligne->idRequete)); ?></th>
                <th> <?php echo(htmlentities( $ligne->requete)); ?></th>
                <th><a href="GestionRequete.php?delete=<?php echo(htmlentities( $ligne->idRequete)); ?>"
                       onClick="return(confirm('Etes-vous sûr de vouloir supprimer <?php echo $ligne->requete ?> ?'));">delete</a>
                </th>
            </tr>
        <?php endforeach ?>


        </tbody>
    </table>


<?php require_once('javascripts.php');?>