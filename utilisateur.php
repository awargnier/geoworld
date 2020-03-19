<?php
require_once('header.php');
require_once 'inc/connect-db.php';


require_once("inc/manager-db.php");
if (isset($_GET['add'])) {
    addUser($_GET);
}
if (isset($_POST['update'])) {
    updateUsers($_POST);
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    deleteUtilisateur($id);

}

$listeUtilisateurs = utilisateurs();

?>

<table class="table">
    <div align="center">
        <a  href="AddUser.php"><h1>Add user</h1></a>
    </div>
    <tr>
        <th>id</th>
        <th>login</th>
        <th>password</th>
        <th>role</th>
        <th>nom</th>
        <th>prenom</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    <tbody>
    <?php
    foreach ($listeUtilisateurs as $indice => $ligne):?>
        <tr>
            <th> <?php echo(htmlentities($ligne->id)); ?></th>
            <th> <?php echo(htmlentities( $ligne->login)); ?></th>
            <th> <?php echo(htmlentities( $ligne->password)); ?></th>
            <th> <?php echo(htmlentities( $ligne->role)); ?></th>
            <th> <?php echo(htmlentities( $ligne->nom)); ?></th>
            <th> <?php echo(htmlentities( $ligne->prenom)); ?></th>
            <th><a href="majUtilisateur.php?id=<?php echo(htmlentities( $ligne->id)); ?>"> update </a></th>
            <th><a href="utilisateur.php?delete=<?php echo(htmlentities( $ligne->id)); ?>"
                   onClick="return(confirm('Etes-vous sûr de vouloir supprimer <?php echo $ligne->nom ?> ?'));">delete</a>
            </th>
        </tr>
    <?php endforeach ?>


    </tbody>
</table>


<?php require_once('javascripts.php');?>



