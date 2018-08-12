<div class="drawer" id="drawer-menu">
    <button class="drawer-toggle" onclick="toggleDrawer()">
        <span class="oi oi-menu drawer-icon" title="menu" aria-hidden="true"></span>
    </button>

    <div class="drawer-links" id="drawer-links">
        <a href="/">
            <div class="drawer-link">
                Startseite
            </div>
        </a>

        <a href="/?page=einkaufsberatung.php">
            <div class="drawer-link">
                Einkaufsberatung
            </div>
        </a>

        <a href="/?page=fernwartung.php">
            <div class="drawer-link">
                Fernwartung
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

<script>
    function toggleDrawer() {
        var drawerColumn = $("#drawer-column");
        var drawerMenu = $("#drawer-menu");

        // drawerColumn.toggleClass("z-to-front");
        // drawerColumn.toggleClass("col-sm-2 col-md-2 col-lg-2 col-xl-2");
        // drawerColumn.toggleClass("col-sm-4 col-md-4 col-lg-3 col-xl-3");
        drawerMenu.toggleClass("drawer-expanded");
        //
        $("#drawer-links").find(".drawer-link").each(function () {
            var visibility = $(this).css("visibility");

            if (visibility === "hidden") {
                $(this).css("visibility", "visible");
                // $(this).width(drawerMenu.width());
            } else {
                $(this).css("visibility", "hidden")
            }
        });
    }

    function resizeDrawer(id) {
        var itemHeight = $("#" + id).height();
        var bodyHeight = $("body").height();
        $("#drawer-menu").height(itemHeight > bodyHeight ? itemHeight : bodyHeight);

        $("#drawer-links").width($("#drawer-column").width());
    }
</script>