<?php
                require_once('header.php');
                require_once 'inc/connect-db.php';


                require_once("inc/manager-db.php");
                if (isset($_GET['create'])) {
                    createRequete($_GET);

                }
                $requete = getRequete();

                $requeteView = RequeteExecute();

                ?>

                <div align="center">
                    <h1>Veuillez choisir la requête que vous voulez exécuter.</h1>
                    <form>

                        requête
                        <select name="ListeRequete" size="1">
                            <?php foreach ($requete as $ordre => $ligne): ?>
                                <option>
                                    <?php echo(htmlentities($ligne->requete)); ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <input type="submit" name="RequeteChoice" value="OK"/>
                        <?php if (isset($_GET['ListeRequete'])) {
                            $choice = $_GET['ListeRequete'];
                        }
                        ?>
                        <a hidden href="inc/manager-db.php?choice=<?php $_GET["ListeRequete"]?>" ></a>
                    </form>
                    <br>
                    <h5>Voici le résultat de :</h5>
                    <h2><?php print($choice)?></h2>
                    <br>


                    <?php if (!empty($choice) && strpos($choice, "country")): ?>

                    <table border="1">
                        <thead>

                        <tr>
                            <!--th>id </th-->
                            <th>Name</th>
                            <th>Continent</th>
                            <th>Region</th>
                            <th>SurfaceArea</th>
                            <!--th>IndepYear </th-->
                            <th>Population</th>
                            <!--th>LifeExpectancy </th>
                            <th>GNP </th>
                            <th>GNPOld </th>
                            <th>LocalName </th>
                            <th>GovernmentForm </th>
                            <th>HeadOfState </th>
                            <th>Capital </th>
                            <th>Code2 </th-->

                        </tr>
                        </thead>
                        <?php foreach ($requeteView as $value): ?>

                            <tbody>
                            <tr>

                                <!--td> <?php echo(htmlentities($value->id)); ?> </td-->
                                <td> <?php echo(htmlentities($value->Name)); ?> </td>
                                <!--td> <?php echo(htmlentities($value->Continent)); ?> </td-->
                                <td> <?php echo(htmlentities($value->Region)); ?> </td>
                                <td> <?php echo(htmlentities($value->SurfaceArea)); ?> </td>
                                <td> <?php echo(htmlentities($value->IndepYear)); ?> </td>
                                <td> <?php echo(htmlentities($value->Population)); ?> </td>
                                <!--td> <?php echo(htmlentities($value->LifeExpectancy)); ?> </td>
                <td> <?php echo(htmlentities($value->GNP)); ?> </td>
                <td> <?php echo(htmlentities($value->GNPOld)); ?> </td>
                <td> <?php echo(htmlentities($value->LocalName)); ?> </td>
                <td> <?php echo(htmlentities($value->GovernmentForm)); ?> </td>
                <td> <?php echo(htmlentities($value->HeadOfState)); ?> </td>
                <td> <?php echo(htmlentities($value->Capital)); ?> </td>
                <td> <?php echo(htmlentities($value->Code2)); ?> </td-->
                            </tr>
                            </tbody>
                        <?php endforeach; ?>
                        <?php endif; ?>


                        <?php if (!empty($choice) && strpos($choice, "city")): ?>

                        <table border="1">
                            <thead>

                            <tr>
                                <!--th>idCountry </th-->
                                <th>Name</th>
                                <th>District</th>
                                <th>Population</th>


                            </tr>
                            </thead>
                            <?php foreach ($requeteView as $value): ?>

                                <tbody>
                                <tr>

                                    <!--td> <?php echo(htmlentities($value->id)); ?> </td-->
                                    <!--<td> <?php echo(htmlentities($value->idCountry)); ?> </td>-->
                                    <td> <?php echo(htmlentities($value->Name)); ?> </td>
                                    <td> <?php echo(htmlentities($value->District)); ?> </td>
                                    <td> <?php echo(htmlentities($value->Population)); ?> </td>

                                </tr>
                                </tbody>
                            <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if (!empty($choice) && strpos($choice, "language")): ?>

                            <table border="1">
                                <thead>

                                <tr>
                                    <!--th>id </th-->
                                    <th>Name</th>


                                </tr>
                                </thead>
                                <?php foreach ($requeteView as $value): ?>

                                    <tbody>
                                    <tr>

                                        <!--td> <?php echo(htmlentities($value->id)); ?> </td-->
                                        <td> <?php echo(htmlentities($value->Name)); ?> </td>

                                    </tr>
                                    </tbody>
                                <?php endforeach; ?>
                                <?php endif; ?>

