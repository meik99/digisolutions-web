<!doctype HTML>
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
        <div class="col-12">
            <h1>Beratung und Tech-Support</h1>
        </div>
    </div>
    <hr>
    <div class="row text-justify">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
            Immer wieder höhren wir Geschichten aus der EDV, die uns Kopfzerbrechen bereiten. Leute die Computer
            kaufen, mit keiner, oder schlimmer noch, inkompetenter Beratung. Diese Computer die dann nicht den
            Anforderungen gerecht werden.
        </div>
    </div>
    <div class="row text-justify">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
            EDV-"Fachleute" die mit wenig Erfahrung bereit sind deinen PC für einen Wucherpreis zu reparieren. Und das
            mangelhaft. Freunde und Kollegen die für einen "Freundschaftspreis" anbieten, Windows neu zu installieren, nur damit
            der PC danach noch schlechter läuft, da z.B. Treiber fehlen.
        </div>
    </div>
    <div class="row text-justify">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
            Wir bieten dir eine Neuinstallation von deines Betriebsystems inkl. passender Treiber an. Falls gewünscht
            auch mit gratis Virenschutz und Office-Software (z.B. LibreOffice) um ehrliche <span class="colored-text nowrap">
                EUR 39,00
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-8 text-left">
                            Neuinstallation von Windows inkl. passender Treiber
                        </div>
                        <div class="col-4 text-right">
                            EUR 39,00
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    Auf Wunsch mit:
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            gratis Virenschutz
                        </li>
                        <li class="list-group-item">
                            gratis Officesoftware (z.B. LibreOffice)
                        </li>
                        <li class="list-group-item">
                            weiteren gewünschten Programme
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>

<script>
    $(window).on("resize", function () {
        resizeDrawer("container");
    });
    $(document).ready(function () {
        resizeDrawer("container");
    });
</script>
</body>
</html>
