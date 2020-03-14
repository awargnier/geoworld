<?php
require_once('inc/connect-db.php');
require_once 'inc/manager-db.php';
$continents = getContinents();
?>

<head>
    <meta charset="utf-8">
    <title>Geoworld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="images/icons/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="regna/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="regna/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="regna/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="regna/css/style.css" rel="stylesheet">

</head>
<body>

    <section id="hero">
        <div class="hero-container">
            <h1>Welcome to GeoWorld</h1>
            <h2>Find out everything that has to be seen about the world</h2>
            <a href="WorldMap.php" class="btn-get-started">Get Started</a>
        </div>
    </section>
    <main id="main">

        <section id="about">
            <div class="container">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">About the world</h2>

                        <div class="icon-box wow fadeInUp">
                            <div></div>
                            <h4 class="title">The largest continent</h4>
                            <p class="description">The largest continent in the world is Asia. Asia, with 4,463 billion people and 48 countries (according to the United Nations) is the largest in the world.</p>
                            <p class="description">Here is a list with the surface of each of them :</p>
                            <ol class="description">
                                <li><strong>Asia</strong> with 44.579.000km²</li>
                                <li><strong>America</strong> with 42.655.270km²</li>
                                <li><strong>Africa</strong> with 30.221.532km²</li>
                                <li><strong>Antartica</strong> with 14.000.000km²</li>
                                <li><strong>Europe</strong> with 10.530.751km²</li>
                                <li><strong>Oceania</strong> with 9.008.458km²</li>
                            </ol>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div></div>
                            <h4 class="title">The most populated continent</h4>
                            <p class="description">Asia represents more than half of the world’s population with 4.6 billion inhabitants</p>
                            <ol class="description">
                                <li><Strong>Asia</Strong> : 4.601.371.000 (59,65 %)</li>
                                <li><strong>Africa</strong> : 1.308.064.000 (16,96 %)</li>
                                <li><strong>America</strong> : 1.014.722.000 (13,16 %)</li>
                                <li><strong>Europe</strong> : 747.183.000 (9,69 %)</li>
                                <li><strong>Oceania</strong> : 42.128.000 (0,55 %)</li>
                            </ol>
                        </div>


                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                </div>

            </div>
        </section>
    </main>
</body>