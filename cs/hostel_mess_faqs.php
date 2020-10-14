<?php
include 'head.html';
?>
<head>
    <title>Hostel | Mess FAQs</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-4').classList.add('active');
    document.getElementById('nav-4-4').classList.add('active');
    document.getElementById('nav-4').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<section class="section team-section container">
    <?php
    include 'faq.php';
    ?>
    <script>
        document.getElementById('nav-2-hostel').classList.add('active');
    </script>
    <!--Section heading-->
    <h1 class="section-heading">Hostel/Mess FAQs</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="accordion text-justify" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                   aria-expanded="false" aria-controls="collapse1">
                    <h5 class="mb-0">
                        <strong>Q.1 </strong>When can we start staying in our hostel rooms?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                <div class="card-block">
                    <strong>A.</strong>
                    You can start staying in the hostel rooms just after you report to the institute on the reporting
                    date. You are not allowed to stay in the hostel rooms before the reporting date.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                   aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0">
                        <strong>Q.2 </strong>How many people will stay in a hostel room?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block">
                    <strong>A.</strong>All students will be allotted independent rooms in the hostel i.e.
                    each student will be given a separate room.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                   aria-expanded="false" aria-controls="collapse3">
                    <h5 class="mb-0">
                        <strong>Q.3 </strong>What will be there in my hostel room? What should I bring?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block">
                    <strong>A.</strong>Every room is provided with a bed, almirah,a table and a chair. One should
                    bring few set of FORMALS for orientation programs, shorts/track pants and a pair of sports shoes
                    for the Compulsory Physical Activities(CPA). One can also bring a lab coat ,drafter and
                    scientific calculator which would be useful in certain courses in the first year or buy them
                    from the shops in institute itself.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                   aria-expanded="false" aria-controls="collapse4">
                    <h5 class="mb-0">
                        <strong>Q.4 </strong> What facilities are provided to the freshers for the purchase
                        of hostel necessities like mattresses, pillows, buckets etc.? Do we need to bring
                        these things along with us?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block">
                    <strong>A.</strong>Buckets ,mugs,pillows and mattresses will be made AVAILABLE at the complex
                    itself at reasonable prices, so there is no need to carry them. However you are advised to get
                    bed linen, towels, alarm clock, toiletries and sanitary items and other things that you might
                    immediately require after you get there.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5"
                   aria-expanded="false" aria-controls="collapse5">
                    <h5 class="mb-0">
                        <strong>Q.5 </strong>What are the Hostel timings?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="card-block">
                    <strong>A.</strong>Hostel gates remain closed from 12 AM to 5 AM. However, one is not allowed
                    to go out of campus after 10 PM and get inside of the campus after 11 PM without due permission
                    from the competent authority.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                   aria-expanded="false" aria-controls="collapse6">
                    <h5 class="mb-0">
                        <strong>Q.6 </strong>How is the mess food? Is there any other place nearby?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="card-block">
                    <strong>A.</strong>In general, the mess food is quite good. Proper quality checks are carried
                    out frequently. Mess environment is clean and healthy & different sections are available for
                    Veg ,Non Veg and Jain meals. We have a canteen as well as fine dining within the campus just in
                    case the student wants something new to eat. We also have an amul parlour inside the campus.
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