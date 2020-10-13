<?php
    include 'head.html';
?>
<head>
    <title>Counsellors Team</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-2').classList.add('active');
    document.getElementById('nav-2-1').classList.add('active');
    document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<!--Section: Team v.1-->
<section class="section team-section container">

    <!--Section heading-->
    <h1 class="section-heading">Counsellors Team</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="row text-center">
        <div class="col-lg-6 col-md-12 mb-r animate-profile">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/prasad_gadkari.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Prasad Gadkari</h4>
            <h5><strong>Contact : </strong>+91 98223 55796</h5>
            <a class="icons-sm email-ic" href="mailto:studentcounsellor@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/abhilasha_chouhan.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Abhilasha Chouhan</h4>
            <h5><strong>Contact : </strong>+91 72328 23131</h5>
            <a class="icons-sm email-ic" href="mailto:abhilasha@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
    </div>
</section>
<!--/Section: Team v.1-->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>

<script type="text/javascript" src="js/lazysizes.min.js"></script>
<!--Footer-->
<?php
include 'footer.html';
?>
