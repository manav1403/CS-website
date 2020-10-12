<?php
include 'head.html';
?>
<head>
    <title>Coming Soon!</title>
    <style type="text/css">
        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 559px) {
            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 700px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 600px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
    </style>
</head>
<body>
<?php
include 'navbar.html';
?>
<!-- Full Page Intro -->
<div class="view">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">

            <h1 class="display-4 mb-4">
                <strong>Coming Soon!</strong>
            </h1>

            <h4 class="mb-4">
                <strong>The requested detail will be available shortly.</strong>
            </h4>

            <h4 class="mb-4 d-none d-md-block">
                <strong>Stay updated and in case of any queries, contact us.</strong>
            </h4>
            <h4 id="time-counter">
            </h4>
            <a href="mailto:counselling@iitj.ac.in" class="btn btn-outline-white btn-lg">Mail us at counselling@iitj.ac.in
                <i class="fa fa-graduation-cap ml-2"></i>
            </a><br>
            <a href="index.php" class="btn btn-outline-white btn-lg">Back to Home<i class="fa fa-home ml-2"></i></a>
        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
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

<!-- Time Counter -->
<script type="text/javascript">
    // Set the date we're counting down to
    let year = 2018,
        month = 7,
        day = 22,
        hours = 7,
        minute = 0,
        second = 0,
        milisecond = 0;
    var countDownDate = new Date(year,month,day,hours,minute,second,milisecond);
    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("time-counter").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time-counter").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
<!--Footer-->
<?php
include 'footer.html';
?>