<div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
        <div class="row">
            <div class="col">
                <h1>Serviceleistungen</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h2>IT-Hilfe</h2>
            </div>
        </div>
        <?php
            include ("services/ITHilfe/service_einkaufsberatung.php");
        ?>
        <hr>
        <div class="row">
            <div class="col">
                <h2>Digitalisierungen</h2>
            </div>
        </div>
        <?php
            include ("services/Digitalisierungen/service_tontraeger.php");
            include ("services/Digitalisierungen/service_dokumentenscan.php");
        ?>

        <hr>
        <div class="row">
            <div class="col">
                <h2>Netzwerktechnik</h2>
            </div>
        </div>

        <?php
            include ("services/Netzwerktechnik/service_heimnetzwerke.php");
            include ("services/Netzwerktechnik/service_firmennetzwerke.php");
        ?>

        <hr>
        <div class="row">
            <div class="col">
                <h2>Schulungen</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Schulungen für die Verwendung von PCs und Office-Software.
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn" href="/?page=schulungen.php">Mehr</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h2>Und vieles mehr...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Schreib uns einfach unter <span class="nowrap">detlef.mayrhofer@digisolutions.at</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 special-offers">
        <div class="row">
            <div class="col-12">
                <h2>Einführungs-</h2>
                <h2>angebote</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>Halber Preis für Digitalisierungen</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images/tontraeger.jpg" class="special-offers-image">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Wir digitalisieren deine alte Schätze wie VHS-Kassetten und Lieblings-Vinyls!
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn" href="/?page=tontraeger.php">Zu den Angeboten</a>
            </div>
        </div>
    </div>
</div>