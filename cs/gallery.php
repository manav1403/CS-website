<?php
include 'head.html';
?>
<head>
    <title>Gallery - Student Wellbeing Committee</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-5').classList.add('active');
    document.getElementById('nav-5').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div id="mdb-lightbox-ui"></div>
<div class="parallax">
    <!--First section-->
    <div id="section-1" class="parallax-section">

        <!--Parallax content-->
        <div class="parallax-layer parallax-layer-base">

            <!--Container to center the content-->
            <div class="full-bg-img flex-center">
                <ul style="padding-top: 2.5rem;">
                    <li>
                        <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s">Gallery</h1>
                    </li>
                    <li>
                        <a class="btn btn-outline-white btn-lg wow fadeInLeft" href="#section-2" data-wow-delay="0.2s"><i
                                    class="fa fa-arrow-down left"></i> Scroll Down</a>
                        <a class="btn btn-outline-white btn-lg wow fadeInLeft" href="https://www.flickr.com/photos/134892933@N08/albums" target="_blank" data-wow-delay="0.2s"><i
                                    class="fa fa-flickr left"></i> Flickr</a>
                    </li>
                </ul>
            </div>
            <!--/Container to center the content-->

        </div>
        <!--/Parallax content-->

        <!--Parallax background-->
        <div class="parallax-layer parallax-layer-back">
        </div>
        <!--/Parallax background-->

    </div>
    <!--/First section-->
    <div id="section-2">
        <div class="container text-center pt-1 mb-1">

            <div class="row flex-center nav-justified">
                <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#campus" role="tab">Campus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel" role="tab">Student Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pane2" role="tab">Fests</a>
                    </li>
                </ul>
                <div class="tab-content text-justify">
                    <!--Campus-->
                    <div class="tab-pane fade in show active" id="campus" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <div class="row flex-center">
                                <?php
                                $dir = './images/gallery/campus/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir"."$filename\" class=\"lazyload img-fluid\">
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
                    <!--Panel 1-->
                    <div class="tab-pane fade" id="panel" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <div class="row flex-center">
                                <?php
                                $dir = './images/gallery/activities/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir"."$filename\" class=\"lazyload img-fluid\">
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
                    <div class="tab-pane fade" id="pane2" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <div class="row flex-center">
                                <?php
                                $dir = './images/gallery/fests/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir"."$filename\" class=\"lazyload img-fluid\">
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
                </div>

            </div>
        </div>
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/compiled.min.js"></script>

        <script type="text/javascript" src="js/lazysizes.min.js"></script>

        <script>
            $(function () {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });

            $('.dropdown-toggle').dropdown('toggle');
        </script>

        <!--Footer-->
        <?php
        include 'footer.html';
        ?>
    </div>
</div>
