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

        <a href="digitalisierung.php">
            <div class="drawer-link">
                Digitalisierung
            </div>
        </a>

        <a href="beratung.php">
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

<script>
    function toggleDrawer(){
        var drawer = $("#drawer-menu");
        drawer.toggleClass("drawer-expanded");

        $("#drawer-menu").find(".drawer-link").each(function(){
            var visibility = $(this).css("visibility");

            if(visibility === "hidden"){
                $(this).css("visibility", "visible");
                $(this).width(drawer.width());
            } else {
                $(this).css("visibility", "hidden")
            }
        });
    }

    function resizeDrawer(id){
        $("#drawer-menu").height($("#" + id).height());
        $("#drawer-links").width($("#drawer-menu").width());
    }
</script>