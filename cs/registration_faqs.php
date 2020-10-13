<?php
include 'head.html';
?>
    <head>
        <title>Registration FAQs</title>
    </head>
    <body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-4').classList.add('active');
    document.getElementById('nav-4-3').classList.add('active');
    document.getElementById('nav-4').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<section class="section team-section container">
    <?php
    include 'faq.php';
    ?>
    <script>
        document.getElementById('nav-2-registration').classList.add('active');
    </script>
    <!--Section heading-->
    <h1 class="section-heading">Registration FAQs</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="accordion text-justify" id="accordion" role="tablist" aria-multiselectable="true">

        <!-- <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                   aria-expanded="false" aria-controls="collapse1">
                    <h5 class="mb-0">
                        <strong>Q.1 </strong>How about registration? What items need to be brought
                        and what are the procedures?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                <div class="card-block">
                    <strong>A.</strong>
                    You have to bring original documents and at least 2 copies of Jee (mains & advance) score cards,
                    proof of address, identity proof, passport size photographs, caste certificate(if needed),
                    domicile certificates and other document shown at official website. Date of registration will
                    be released soon. The procedure for registration will be explained in detail by the members of
                    Student Wellbeing Committee after reaching the college.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                   aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0">
                        <strong>Q.2 </strong>What about Community/cast certificate, fee payment, other formalities?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block">
                    <strong>A.</strong>
                    You should bring your caste certificates. In case any specific format for caste certificate is
                    given on official website you should bring that too. Fee payment is usually done through online
                    portal. You will be informed later the date when portal will be open. Other than registration
                    there is student loan option. You have to complete all the documents related to that too in
                    case you are applying for it.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                   aria-expanded="false" aria-controls="collapse3">
                    <h5 class="mb-0">
                        <strong>Q.3 </strong> What are the forms required at the time of admission? and the
                        Medical certificates?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block">
                    <strong>A.</strong>
                    Following forms are required at the time of admission:
                    <br>
                    <ol>
                        <li>Registration verification form</li>
                        <li>Student bio data form</li>
                        <li>
                            Medical examination form along with forms M1 to M7
                            <ol type="i">
                                <li>Blood test report</li>
                                <li>Urine test report</li>
                                <li>USG/Sonography test report</li>
                                <li>Chest x-ray test and report</li>
                                <li>Electrocardiogram report</li>
                                <li>Examination of ear, nose and throat</li>
                                <li>Examination of eyes</li>
                                <li>Adult vaccination record</li>
                            </ol>
                        </li>
                        <li>Anti-ragging undertaking</li>
                        <li>Student undertaking for alcohol</li>
                        <li>Harassment</li>
                        <li>Regular attendance undertaking</li>
                        <li>Code of conduct</li>
                        <li>I.D cell form</li>
                        <li>Academic registration form</li>
                        <li>Proof of payment</li>
                        <li>Character certificate issued by previous institute</li>
                        <li>Aadhar card</li>
                        <li>Four photographs</li>
                    </ol>
                    You can download it <a href="form_required.php">here</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                   aria-expanded="false" aria-controls="collapse4">
                    <h5 class="mb-0">
                        <strong>Q.4 </strong>Will there be any other formalities afterwards for registration?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block">
                    <strong>A.</strong>
                    After completion of full registration process (along with submission of college fees and all
                    required documents) there are no further formalities generally.
                </div>
            </div>
        </div> -->






        <div class="h5-responsive p-4">For further queries mail us at <a href="mailto:counselling@iitj.ac.in">counselling@iitj.ac.in</a></div>
    </div>

</section>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!--Bootstrap Core-->
<script type="text/javascript" src="js/compiled.min.js"></script>
<!--Footer-->
<?php
include 'footer.html';
?>