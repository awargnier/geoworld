
<?php include("header.php")?>

<header>
    <link rel="stylesheet" type="text/css" href="cssmap-continents-5.5.4/cssmap-continents/cssmap-continents/cssmap-continents.css" media="screen" />
    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- CSSMap SCRIPT -->
    <script type="text/javascript" src="assets/library/map.js"></script>
    <!-- CSSMap - Continents -->
</header>

<body>
<div class="Antartica-content">
    <a href="home.php?continent=Antarctica"> <img width="80%" src="images/antartic.png"></a>
</div>

<div id="map-continents">
    <ul class="continents">
        <li class="c1"><a href="home.php?continent=Africa">Africa</a></li>
        <li class="c2"><a href="home.php?continent=Asia">Asia</a></li>
        <li class="c3"><a href="home.php?continent=Oceania">Oceania</a></li>
        <li class="c4"><a href="home.php?continent=Europe">Europe</a></li>
        <li class="c5"><a href="home.php?continent=North America">North America</a></li>
        <li class="c6"><a href="home.php?continent=South America">South America</a></li>
    </ul>
</div>
<!-- END OF THE CSSMap - Continents -->

</body>
<script type="text/javascript">
    $(document).ready(function(){

// CSSMap;
        $("#map-continents").CSSMap({
            "size": 1450
        });
// END OF THE CSSMap;

    });
</script>



</html>