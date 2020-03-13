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
if (isset($_GET['Search'])) {

}

?>
    <div class="container" align="center">
        <h1>Countries in <?php echo(htmlentities($continent)) ?></h1>
    </div>

    <p></p>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-auto mx-auto  " >
                <div class="table-responsive">
                    <table  class="table table-fixed">
                        <thead>
                        <tr>
                            <!--th>id </th-->
                            <th scope="col" class="col-lg-7" ><h5 align="center"> Name</h5></th>
                            <th scope="col" class="col-5" ><h5 align="center">Update</h5></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($desPays as $value): ?>
                            <tr>
                                <!--td> <?php echo (htmlentities($value->id)); ?> </td-->
                                <td scope="row" class="col-3" align="center"> <a href="infoPays.php?id=<?php echo (htmlentities($value->id));?>&code=<?php echo(htmlentities($value->Code2)) ;?>"> <?php echo(htmlentities($value->Name)) ;?> </a> </td>
                                <?php if(!empty($_SESSION['role'])&& $_SESSION['role']=='admin' || !empty($_SESSION['role']) && $_SESSION['role'] == 'enseignant'):?>
                                    <td class="col-3" align="center"> <a href="MajCountry.php?id=<?php echo(htmlentities($value->id)) ;?>"><img src="images/icons/engrenage2.png" width="15%"> </a>  </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>