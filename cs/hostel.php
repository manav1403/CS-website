<?php
include 'head.html';
?>
<head>
    <title>Hostels - IIT Jodhpur</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-3').classList.add('active');
    document.getElementById('nav-3-5').classList.add('active');
    document.getElementById('nav-3').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>

<div class="top-fixer-2"></div>
<!--Section: Team v.1-->
<section class="section team-section container">
    <!--Section heading-->
    <h1 class="section-heading">Hostels</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="row text-justify p-3">
        Each student will be provided with a separate hostel room (~80 square feet).
        The room will be air-cooled, and have basic furniture (table, chair, bed and almirah) and Internet connection.
        The hostel (of 236 rooms) will have a gymnasium, a games room, a TV room, a music room, and a reading room.
        The Dining Hall caters to 1000 students. It will have separate vegetarian and non-vegetarian kitchens and dining areas, along with a generic food court.
    </div>
    <hr>
    <div class="row flex-center">
        <h4 class="h4-responsive font-weight-bold blue-text darken-2">Hostel Images</h4>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox">
                <div class="row flex-center">
                    <?php
                    $dir = './images/hostel/';
                    $dir_open = opendir($dir);
                    while (false !== ($filename = readdir($dir_open))) {
                        if ($filename != "." && $filename != "..") {
                            $link = "<figure class=\"col-md-4 col-lg-3 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img alt=\"picture\" src=\"images/sqloader.gif\" data-src=\"$dir$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                            echo $link;
                        }
                    }

                    closedir($dir_open);
                    ?>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>
<script type="text/javascript" src="js/lazysizes.min.js"></script>

<!-- SCRIPTS -->
<script>
    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
</script>

<!--Footer-->
<?php
include 'footer.html';
?>