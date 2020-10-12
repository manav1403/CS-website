<?php
include 'head.html';
?>
<head>
    <title>CS-PG2020</title>
	
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
	<br>
	<br>
    <div id="section-2">
        <div class="container text-center pt-1 mb-1">

            <div class="row flex-center nav-justified">
                <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">PG Team Information</a>
                    </li>
                </ul>
                <div class="tab-content text-justify">
                    <!--pginfo-->
                    <div class="tab-pane fade in show active" id="pginfo" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <div class="row flex-center">
                                <?php
                                $dir = './images/pg-pamphlet/';
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
                </div>
				 <div class="row flex-center">
				<div class="col-sm-4 card-block">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <img class="img-fluid" src="images/form.png" alt="Forms">
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="height: 12.5rem;">
                        
                        <!--Text-->
                        <p class="card-text">
                        <a href="https://forms.gle/6CBJbsLUcVAcSYuo7">PG Query Form</a>
                         
                        </p>
                    </div>
                    <!--/.Card content-->
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
		  <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
		
	</script>
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
