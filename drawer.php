<div class="col-3 col-sm-2 col-md-1" id="drawer-column">
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
        drawerColumn.toggleClass("col-3 col-sm-2 col-md-1");
        drawerColumn.toggleClass("col-6 col-sm-4 col-md-4");
        drawerMenu.toggleClass("drawer-expanded");

        drawerMenu.height(drawerColumn.height());
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
        $("#drawer-column").height($("body").height());
        $("#drawer-links").width($("#drawer-column").width());
    }
</script>