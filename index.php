<!doctype HTML>
<html>
<head>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
    <?php
        include("drawer.php");
    ?>
    <div class="container" id="container">
        <?php
            include("logo.php");
        ?>
        <div class="row">
            <div class="col-md-8 col-lg-9 col-xl-9 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <h1>Schwerpunkte unseres Service</h1>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Digitalisierung</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Digitalisierung von VHS, CDs und vielem mehr.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn" href="digitalisierung.php">Mehr</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Beratung und Tech-Support</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Beratung beim Einkauf von PCs, Hard- und Software, sowie Hilfe beim Neuinstallieren von
                        Windows und anderen Softwareprodukten.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn" href="beratung.php">Mehr</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Heimnetzwerke</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Heimnetzwerke erstellen und konfigurieren.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn" href="heimnetzwerke.php">Mehr</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Schulungen</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Schulungen für die Verwendung von PCs und Office-Software.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn" href="schulungen.php">Mehr</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 special-offers">
                <div class="row">
                    <div class="col-12">
                        <h1>Angebote zur Eröffnung</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>Halber Preis für Digitalisierungen</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="images/tontraeger.jpg" class="special-offers-image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Wir digitalisieren deine alte Schätze wie VHS-Kassetten und Lieblings-CDs!
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn" href="digitalisierung.php">Zu den Angeboten</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>

    <script>
        $(window).on("resize", function() {
            resizeDrawer("container");
        });
        $(document).ready(function () {
            resizeDrawer("container");
        });
    </script>
</body>
</html>
