<?php
include 'head.html';
?>
    <head>
        <title>Student Wellbeing Committee - IIT Jodhpur</title>
    </head>
    <body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-1').classList.add('active');
    document.getElementById('nav-1').children[0].innerHTML += '<span class="sr-only">(current)</span>';
    document.getElementById('nav').classList.remove('noscroll');
    document.getElementById('nav').classList.add('scrolling-navbar');
</script>
<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="1"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="2"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="3"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="4"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="5"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="6"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="7"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="8"></li>
        <li data-target="#carousel-example-1" data-interval="5000" data-slide-to="9"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li>
                        <h2 class="h2-responsive">Student Wellbeing Committee</h2>
                        <h4 class="h4-responsive">IIT Jodhpur</h4>
                    </li>
                </ul>
            </div>
        </div>
        <!--<slide>-->
        <!--</slide>-->
        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">IIT Jodhpur</h2></li>
                </ul>
            </div>
        </div>
        <!--Slide -->
        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">FRAMED</h2></li>
                </ul>
            </div>
        </div>
        <!--/.Slide -->
        <!--Slide -->

        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">Antakshari during SPANDAN</h2></li>
                </ul>
            </div>
        </div>

        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">Plane models during NIMBLE</h2></li>
                </ul>
            </div>
        </div>

        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">EDM night during IGNUS</h2></li>
                </ul>
            </div>
        </div>
        <!--Slide -->
        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">Volleyball match during VARCHAS</h2></li>
                </ul>
            </div>
        </div>
        <!--/.Slide -->
        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">DefeatTheBeat (IITJ Dance Club) during Ignus</h2></li>
                </ul>
            </div>
        </div>
        <!--/.Slide -->
        <!--Slide -->
        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">Scribble night</h2></li>
                </ul>
            </div>
        </div>
        <!--/.Slide -->
        <!--Slide -->
        <div class="carousel-item view">
            <div class="mask hm-black-light">
                <div class="full-bg-img"></div>
            </div>
            <div class="carousel-caption">
                <ul class="animated fadeInUp">
                    <li><h2 class="h2-responsive">Matki Fod</h2></li>
                </ul>
            </div>
        </div>
        <!--/.Slide -->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<section id="info">
    <div class="container">
        <div class="divider-new pb-2">
            <h2 class="h2-responsive">Our Motto</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 m-0">
                <p class="text-justify">The upcoming years of your stay at IIT Jodhpur will give your life a new direction both academically and personally. As the time passes, there will be various challenges waiting for you. 
                    We, the Student Wellbeing Committee is devoted to providing personal guidance and necessary resources to students to deal with all these challenges. The team tries to ensure that IITJ is not just an institute,
                    but a home away from home for you  </p>
            </div>
        </div>
        <div class="divider-new">
            <h2>Info</h2>
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
                        <!--Title-->	
                        <h4 class="card-title">Important Links</h4>
                        <!--Text-->
                        <p class="card-text">
                        <ol>
                            <li><a href="map/index.html">Hotel Map</a></li>
                            <li><a href="bus_schedule.php">Bus Schedule</a></li>
                            <li><a href="form_required.php">Forms and Documents</a></li>
                            <li><a href="general_faqs.php">General Queries</a></li>
                        </ol>
                        </p>
                    </div>
                    <!--/.Card content-->
                </div>
            </div>
            <div class="col-sm-4 card-block">
                <div class="text-justify card " role="list" style="height: 22rem;">
                    <h3 class="h3-responsive card-header">Announcements</h4></h3>
                    <ol class="card-block pl-5" style="overflow-y: scroll;">
                        <!-- <li>
                            A help desk will be there on the <b>Platform No. 1 on Jodhpur Jn.(Railway Station).</b> The buses will be
                            arranged from the MBM Engineering College to IIT Jodhpur Permanent Campus(Karwar) via Railway Station on 22nd
                            July 2018. To know more <a href="bus_schedule.php">click here</a>.
                        </li>
                        <br>
                        <li>All those who are not able to pay the fee using online payment portal i.e. Credit/Debit
                            Card or Net banking can pay the fee by making two separate Demand Drafts(DD) for the Semester
                            Fee and the Mess Fee in the favour of <b><u>Fees Collection Account IIT Jodhpur</u></b>
                            payable at IIT Jodhpur.
                        </li> -->
                        <li>
                        Dear Students,<br>
                        Congratulations on qualifying in JEE (Advanced) 2020 and thank you for choosing IIT Jodhpur. IIT<br>
                        Jodhpur welcomes you…
                        </li>
                        <li>
                        Dates and intructions for registration <a href="http://iitj.ac.in/uploaded_docs/B.tech%20ADMISSION%202020-21_10112020.pdf">Click Here</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- <div class="col-sm-4 card-block">
                <div class="card">
                    <img class="img-fluid" src="images/dates.png" alt="Arrival dates">
                    <div class="card-block" style="height: 12.5rem;">
                        <h4 class="card-title">Arrival Dates</h4>
                        <p class="card-text">
                        <ul>
                           <li>The reporting date for UG students is July 23, 2019</li>
                            <li>Coming soon</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div> -->

            <div class="col-sm-4 card-block">
                <!--Card-->
                <div class="card hidden-lg-down" style="padding: 0.6rem;">
                    <div class="fb-page text-center" data-href="https://www.facebook.com/SWC.IITJodhpur/"
                         data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                         data-height="335" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/SWC.IITJodhpur/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/SWC.IITJodhpur/">IIT Jodhpur
                            </a></blockquote>
                    </div>
                    <!--/.Card content-->
                </div>
                <div class="card hidden-md-down hidden-xl-up" style="padding: 0.6rem;">
                    <div class="fb-page text-center" data-href="https://www.facebook.com/SWC.IITJodhpur/"
                         data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                         data-height="305" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/SWC.IITJodhpur/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/SWC.IITJodhpur/">IIT Jodhpur
                            </a></blockquote>
                    </div>
                    <!--/.Card content-->
                </div>
                <div class="card hidden-sm-down hidden-lg-up" style="padding: 0.6rem;">
                    <div class="fb-page text-center" data-href="https://www.facebook.com/SWC.IITJodhpur/"
                         data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                         data-height="260" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/SWC.IITJodhpur/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/SWC.IITJodhpur/">IIT Jodhpur
                            </a></blockquote>
                    </div>
                    <!--/.Card content-->
                </div>
                <div class="card hidden-xs-down hidden-md-up" style="padding: 0.6rem;">
                    <div class="fb-page text-center" data-href="https://www.facebook.com/SWC.IITJodhpur/"
                         data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                         data-height="235" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/SWC.IITJodhpur/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/SWC.IITJodhpur/">IIT Jodhpur
                            </a></blockquote>
                    </div>
                    <!--/.Card content-->
                </div>
                <div class="card hidden-sm-up" style="padding: 0.6rem;">
                    <div class="fb-page text-center" data-href="https://www.facebook.com/SWC.IITJodhpur/"
                         data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                         data-height="330" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/SWC.IITJodhpur/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/SWC.IITJodhpur/">IIT Jodhpur
                            </a></blockquote>
                    </div>
                    <!--/.Card content-->
                </div>

            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="divider-new">
        <h2 class="h2-responsive">Get in touch with us</h2>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <!-- <div id="map-container" class="z-depth-1-half map-container" data-adapt-container-width="true"
                 style="height: 400px"></div> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14286.094429990404!2d73.1134335!3d26.4710809!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6c9a5a9b08db22e!2sIndian%20Institute%20of%20Technology%20Jodhpur!5e0!3m2!1sen!2sin!4v1602858418102!5m2!1sen!2sin" 
                    width="700" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
        </div>
        <div class="col-sm-4">
            <div class="row text-center flex-center flex-column">
                <div>
                    <a href = "https://www.google.com/maps/dir//Indian+Institute+of+Technology+Jodhpur,
                    +NH+65,+Nagaur+Road,+Dist+Jodhpur,+Karwar,+Rajasthan+342037/@23.6259304,70.4746297"
                       target="_blank" class="btn-floating btn-small mdb-color direction-link"><i class="fa fa-map-marker"></i></a>
                    <p>NH 65, Karwad, Jodhpur</p>
                    <p>Rajasthan</p>
                </div>

                <div>
                    <a href="tel:+912912801906" class="btn-floating btn-small mdb-color"><i class="fa fa-phone"></i></a>
                    <p><a href="tel:+912912801906">+91-291-2801906</a></p>
                    <p>Mon - Fri, 10:00-17:00</p>
                </div>

                <div id="auto">
                    <a href="mailto:wellbeing@iitj.ac.in" class="btn-floating btn-small mdb-color"><i class="fa fa-envelope"></i></a>
                    <p>Email us at</p>
                    <p><a href="mailto:wellbeing@iitj.ac.in">wellbeing@iitj.ac.in</a></p>
                </div>
                <!--                <div class="mt-2">-->
                <!--                    <h3 class="h3-responsive">Autorickshaws:</h3>-->
                <!--                    <ul>-->
                <!--                        <li class="mb-0">-->
                <!--                            <strong>Sankar</strong> (Karwad to Jodhpur): 9660720013-->
                <!--                        </li>-->
                <!--                        <li class="mb-0">-->
                <!--                            <strong>Sonu</strong> (Jodhpur to Karwad): 9166820621-->
                <!--                        </li>-->
                <!--                        <li class="mb-0">-->
                <!--                            <strong>Fixed Price</strong>: Rs 300-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>
<div class="container text-center mt-2">
    <h2 class="h2-responsive">
        <a class="direction-link" href="https://www.google.com/maps/dir//Indian+Institute+of+Technology+Jodhpur,
                    +NH+65,+Nagaur+Road,+Dist+Jodhpur,+Karwar,+Rajasthan+342037/@23.6259304,70.4746297"
           target="_blank">
            Direction toward us</a>
    </h2>
</div>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>
<!-- MDB core JavaScript -->
<script src="js/home-map.js"></script>
<script src="js/carousel.js"></script>
<br>
<!--Footer-->
<?php
include 'footer.html';
?>