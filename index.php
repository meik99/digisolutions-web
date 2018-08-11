<!doctype HTML>
<html>
<head>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
<h1>TESTVORSCHAU - ANGEBOTE STEHEN NOCH NICHT ZUR VERFÜGUNG</h1>
        <?php
        include ("drawer.php");
        ?>

        <div class="page-content">
            <div class="container" id="container">
                <div class="row">
                    <div class="col-9 col-sm-10 col-md-11">
                        <?php
                            include ("logo.php");
                        ?>

                        <?php
                            define("page", "page");

                            if ($_GET[page] == null ||
                                    empty($_GET[page]) == true ||
                                    isset($_GET[page]) == false){
                                include ("main.php");
                            }else if($_GET[page] != null &&
                                    empty($_GET[page]) == false &&
                                    isset($_GET[page]) == true){
                                include ($_GET[page]);
                            }

                            $error = error_get_last();
                            if(isset($error) == true){
                                if($error["type"] == 2){
                                    //show 404 not found
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        $(document).ready(function(){
            var drawerColumn = $("#drawer-column");
            var drawerMenu = $("#drawer-menu");

            drawerMenu.height(drawerColumn.height());

            resizeDrawer("container");
        });

        $(window).on("resize", function(){
            resizeDrawer("container");
        })
    </script>
</body>
</html>
