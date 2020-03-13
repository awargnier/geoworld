<!doctype html>
<?php require_once 'inc/manager-db.php';
session_start();

$continents = getContinents();
?>
<main role="main" class="flex-shrink-0">

    <html lang="fr" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Homepage : GeoWorld</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="index.php">GeoWorld</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="WorldMap.php">World map <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <?php if (!empty($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                            <a class="nav-link" href="utilisateur.php">users management</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Continents</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">

                            <?php foreach ($continents as $nomContinent): ?>
                                <a class="dropdown-item" href="index.php?continent=<?php echo(htmlentities($nomContinent->continent)) ?>"><?php echo(htmlentities( $nomContinent->continent)) ?></a>
                            <?php endforeach;?>



                        </div>
                    </li>
                    <li class="nav-item nav-link" >
                       <?php if (isset($_SESSION['nom']) && isset($_SESSION['role'])) {
                        echo(htmlentities( " Welcome : " . $_SESSION['nom'] . "(" . $_SESSION['role'] . ")"));
                            }
                            ?>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php if (empty($_SESSION['role'] ) ):?>
                        <a class="nav-link" href="inc/authentification.php">Login</a>
                        <?php endif;?>
                    </li>
                    <li class="nav-item">
                        <?php if (empty($_SESSION['role'] ) ):?>
                        <a class="nav-link" href="AddUser.php">Register</a>
                        <?php endif;?>
                    </li>
                    <li class="nav-item">
                        <?php if (!empty($_SESSION['role'] ) ):?>
                        <a class="nav-link" href="inc/logout.php">Logout</a>
                        <?php endif;?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="todo-projet.php">
                            ProjetPPE-SLAM
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="Search" aria-label="Search" action="home.php" >
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
</body>
