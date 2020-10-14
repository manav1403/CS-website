<?php
    include 'head.html';
?>
<head>
    <title>Faculty Advisors</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-2').classList.add('active');
    document.getElementById('nav-2-2').classList.add('active');
    document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<!--Section: Team v.1-->
<section class="section team-section container">

    <!--Section heading-->
    <h1 class="section-heading">Faculty Advisors</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="row text-center">
        <!--First column-->
        <div class="col-lg-12 col-md-12 mb-r">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Saakshi_Dhanekar.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Saakshi Dhanekar</h4>
            <h5>Chairperson</h5>
            <h5><strong>Contact : </strong>0291-2801373</h5>

            <a class="icons-sm email-ic" href="mailto:saakshi@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
        <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/ankitasharma.png" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Ankita Sharma</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801406</h5>
            <a class="icons-sm email-ic" href="mailto:ankitasharma@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/ankitabhu"><iclass="fa fa-facebook"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Prasenjeet_Tribhuvan.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Prasenjeet Tribhuvan</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801408</h5>
            <a class="icons-sm email-ic" href="mailto:prasenjeet@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Pankaj_Yadav.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr. Pankaj Yadav</h4>
            <h5>Faculty Advisor</h5>
            <h5><strong>Contact : </strong>0291-2801211</h5>
            <a class="icons-sm email-ic" href="mailto:pyadav@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a>
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
