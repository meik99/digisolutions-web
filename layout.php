<div class="row">
    <div class="col" id="drawer-column">
        <div class="drawer" id="drawer-menu">
            <button class="drawer-toggle" onclick="toggleDrawer()">
                <span class="oi oi-menu drawer-icon" title="menu" aria-hidden="true"></span>
            </button>

            <div class="drawer-links" id="drawer-links">
                <a href="index.php">
                    <div class="drawer-link">
                        Startseite
                    </div>
                </a>

                <a href="tontraeger.php">
                    <div class="drawer-link">
                        Digitalisierung
                    </div>
                </a>

                <a href="einkaufsberatung.php">
                    <div class="drawer-link">
                        Beratung
                    </div>
                </a>

                <a href="heimnetzwerke.php">
                    <div class="drawer-link">
                        Heimnetzwerke
                    </div>
                </a>

                <a href="schulungen.php">
                    <div class="drawer-link">
                        Schulungen
                    </div>
                </a>

                <a href="impressum.php">
                    <div class="drawer-link">
                        Impressum
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleDrawer(){
            var drawerColumn = $("#drawer-column");
            var drawerMenu = $("#drawer-menu");

            drawerColumn.toggleClass("z-to-front");
            drawerColumn.toggleClass("col-sm-2 col-md-2 col-lg-2 col-xl-2");
            drawerColumn.toggleClass("col-sm-6 col-md-4 col-lg-3 col-xl-3");
            drawerMenu.toggleClass("drawer-expanded");
            //
            $("#drawer-links").find(".drawer-link").each(function(){
                var visibility = $(this).css("visibility");

                if(visibility === "hidden"){
                    $(this).css("visibility", "visible");
                    $(this).width(drawerMenu.width());
                } else {
                    $(this).css("visibility", "hidden")
                }
            });
        }

        function resizeDrawer(id){
            $("#drawer-menu").height($("body").height());
            $("#drawer-links").width($("#drawer-column").width());
        }
    </script>

    <div class="col">
        <div class="row">
            <div class="col" align="right">
                <a href="index.php"><img src="images/ds_logo.jpg" class="logo"/></a>
            </div>
        </div>
        <div class="row">
            <div class="col details text-right">
                <div class="row">
                    <div class="col">
                        <b>Detlef Mayrhofer</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        0699 / 110 44 373
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        d.mayrhofer@digisolutions.at
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Heideweg 13

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        A-4225 Luftenberg
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br>
            </div>
        </div>
    </div>
</div>