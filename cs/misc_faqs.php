<?php
include 'head.html';
?>
<head>
    <title>Misc FAQs</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-4').classList.add('active');
    document.getElementById('nav-4-5').classList.add('active');
    document.getElementById('nav-4').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<section class="section team-section container">
    <?php
    include 'faq.php';
    ?>
    <script>
        document.getElementById('nav-2-misc').classList.add('active');
    </script>
    <!--Section heading-->
    <h1 class="section-heading">Misc FAQs</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="accordion text-justify" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                   aria-expanded="false" aria-controls="collapse1">
                    <h5 class="mb-0">
                        <strong>Q.1 </strong>How will we get a SIM in IIT Jodhpur? And which one is best?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                <div class="card-block">
                    <strong>A.</strong>Stalls will be there in the campus from where you can get a sim card or you
                    can buy it locally from mobile shops in the city. Jio, Airtel and idea work very well in the
                    campus.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                   aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0">
                        <strong>Q.2 </strong>What will be the monthly expenses (approx.) for a fresher including mess,
                        stationary some other student expenses?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block">
                    <strong>A.</strong>
                    To get the exact fee structure(Academic + Mess) one can visit home page of IITJ and check for
                    fee under academics section. The total(Academic +Mess) fee that a fresher needs to pay will vary
                    according to the category to which one belongs and on the monthly income of the household of
                    student(some concessions are provided if the household income is less than 5 lpa). An amount
                    of Rs. Rs. 12000 has to be paid in advance at the start of each semester. Excluding fees few
                    stationaries are required in first semester which are available within the campus which costs
                    around 200-300 Rs and other expenses vary from student to student.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                   aria-expanded="false" aria-controls="collapse3">
                    <h5 class="mb-0">
                        <strong>Q.3 </strong>Whether we have to open the bank account there itself or we
                        can open the account before reaching there also?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block">
                    <strong>A.</strong>You can have your bank account from your hometown. But it is advisable
                    to open an account in IITJ SBI branch because that will be needed in future activities like
                    filling scholarship form, getting repayment of the fee etc. Bank officials will be there on
                    the reporting date to help in easing out the formalities for the students in opening a new
                    bank account.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                   aria-expanded="false" aria-controls="collapse4">
                    <h5 class="mb-0">
                        <strong>Q.4 </strong>How is the IIT Jodhpur campus life?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block">
                    <strong>A.</strong>The permanent campus spans an area of 852 acres. Hostels
                    are airy and spacious. Open cemented as well as grassy grounds are in every hostel.
                    Mess, canteen and fine dining as well as all the academic buildings are at walking distance
                    from the hostels. Owing to the small strength of students of IIT Jodhpur, we live like a family
                    here. Seniors and juniors have fostered an healthy interaction. IIT Jodhpur has four fests i.e.
                    Spandan(Intra Cultural fest), Nimble(Intra Technical fest), Varchas(Inter Sports fest) and
                    Ignus(Inter Socio-Cultural Techfest). We have many clubs and societies which provide a platform
                    for students to learn and perform. It is ensured that everyone from all the disciples gets a
                    chance to actively participate in the clubs and fests here.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5"
                   aria-expanded="false" aria-controls="collapse5">
                    <h5 class="mb-0">
                        <strong>Q.5 </strong>What are the Unique activities in IIT Jodhpur campus?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="card-block">
                    <strong>A.</strong>IIT Jodhpur has four fests i.e. Spandan(Cultural fest), Nimble(Tech fest),
                    Varchas(Sports fest) and Ignus(Socio-Cultural Techfest). We have many clubs and societies
                    which provide a platform for students to learn and perform. Many inter hostel competitions
                    like Sports General Championship are organized. In addition to academic and campus life, IIT
                    Jodhpur provides a very homely environment to students. Many festivals like Janmashtami, Ganesh
                    chaturthi, Diwali, and Lohri are celebrated with great enthusiasm.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                   aria-expanded="false" aria-controls="collapse6">
                    <h5 class="mb-0">
                        <strong>Q.6 </strong> What additional facilities are available for students in the campus?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="card-block">
                    <strong>A.</strong>One room for one student with centralised ACs is the facility provided only
                    in IITJ. Along with this Primary Health center(PHC) provides 24*7 medical facilities to all
                    students. Security is strictly maintained within the campus and bus facility is also available
                    for students to help them move to different places in Jodhpur.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading7">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7"
                   aria-expanded="false" aria-controls="collapse7">
                    <h5 class="mb-0">
                        <strong>Q.7 </strong>What about the recreational and sports facilities?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="card-block">
                    <strong>A.</strong>There are many clubs and societies which provide a platform for students
                    to learn and perform. Additionally, various inter hostel competitions are organized to develop
                    competitive spirit and leadership qualities among the students. All the major festivals are
                    celebrated with great enthusiasm. Every hostel has a sports room and a court within it. There
                    are various outdoor courts and fields in addition to those in hostels.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading8">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8"
                   aria-expanded="false" aria-controls="collapse8">
                    <h5 class="mb-0">
                        <strong>Q.8 </strong>What are the games played at IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                <div class="card-block">
                    <strong>A.</strong>IIT Jodhpur currently has the following sports under the aegis of the Student
                    Sports and Games Society
                    <ol>
                        <li>Basketball</li>
                        <li>Volleyball</li>
                        <li>Tennis</li>
                        <li>Cricket</li>
                        <li>Table tennis</li>
                        <li>Football</li>
                    </ol>
                    There is separate teams for boys and girls who prepare with all their blood and sweat to bring
                    laurels to the institute in the Annual Inter IIT Sports meet.
                    <p>
                    However, there is enough space inside the hostel buildings if one wants to play any game just for
                    leisure.
                    </p>
                </div>
            </div>
        </div>




        <div class="h5-responsive p-4">For further queries mail us at <a href="mailto:counselling@iitj.ac.in">counselling@iitj.ac.in</a></div>
    </div>

</section>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!--Bootstrap Core-->
<script type="text/javascript" src="js/compiled.min.js"></script>
<!--Footer-->
<footer class="page-footer center-on-small-only blue-grey darken-4">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-5 offset-md-2">
                <h5 class="title">CS - IITJ</h5>
                <p>IIT Jodhpur Student Wellbeing Committee team will be happy to help you anytime.</p>
                <p>Join our freshers' forum:</p>
                <a class="btn btn-lg btn-fb" role="button"
                   href="https://www.facebook.com/profile.php?id=534300236607966" target="_blank"><i
                        class="fa fa-facebook left"></i> Freshers' Forum</a>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">Quick Links</h5>
                <ul>
                    <li><a target="_blank" href="http://iitj.ac.in/">IIT Jodhpur</a></li>
                    <li><a target="_blank" href="http://students.iitj.ac.in/">Students' Gymkhana</a></li>
                    <li><a target="_blank" href="http://ignus.org/">Ignus</a></li>

                </ul>
            </div>
            <!--/.Second column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a target="_blank" class="btn-floating btn-small btn-fb"
                   href="https://www.facebook.com/SWC.IITJodhpur/"><i class="fa fa-facebook"> </i></a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: <a href="index.php">Student Wellbeing Committee - IIT Jodhpur </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

</body>
</html>