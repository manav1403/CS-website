<?php
include 'head.html';
?>
<head>
    <title>Committees - IIT Jodhpur</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-3').classList.add('active');
    document.getElementById('nav-3-2').classList.add('active');
    document.getElementById('nav-3').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer"></div>
<div class="container">
    <div class="row flex-column">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-3 blue darken-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel" role="tab">CLS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pane2" role="tab">SARC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pane3" role="tab">SERC</a>
            </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content">
            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel" role="tabpanel">
                <div class="card-block text-justify">
                    <h2 class="h2-responsive text-justify text-center">Student Campus Life Society</h2>
                    <br>
                    The Student Campus Life Society Committee manages the activities and responsibilties
                    within the campus at both institute level and hostel level. This society is responsible for
                    managing dining services and organising events among different hostels.
                    <hr>
                    <h4 class="h4-responsive font-weight-bold blue-text darken-2">Hostel Management Committee</h4>
                    The Hostel/Hall Management Committee (HMC) looks into the maintenance of the halls and hostels at
                    the student level. It consist of:
                    <ul class="list-disc">
                        <li>Hostel Affairs Secretary (1 male and 1 female).</li>
                        <li>Representative (at max 2) each from Ist, IInd, IIIrd and IVth year UG (Male).</li>
                        <li>Representative (at max 2) from M.tech (Male).</li>
                        <li>Representative from UG (Female) and from PG (Female).</li>
                        <li>Representative (at max 2) from PhD.</li>
                    </ul>
                    <hr>
                    <h4 class="h4-responsive font-weight-bold blue-text darken-2">Dining Services Club</h4>
                    The Dining Services Club manages and addressse the issues pertaining to the students
                    mess. It consist
                    <ul class="list-disc">
                        <li>One Mess Affairs Secretary and One Assistant Mess Affairs Secretary.</li>
                        <li>Representative (at max 2) each from Ist, IInd, IIIrd and IVth year UG (Male).</li>
                        <li>Representative (at max 2) from M.tech (Male).</li>
                        <li>One Representative from UG (Female) One and from PG (Female).</li>
                        <li>Representative (at max 2) from PhD.</li>
                    </ul>
                </div>
            </div>
            <!--/.Panel 1-->
            <!--Panel 3-->
            <div class="tab-pane fade" id="pane2" role="tabpanel">
                <div class="card-block text-justify">
                    <h2 class="h2-responsive text-justify text-center">Student Alumni Relations Committee</h2>
                    The Committee works towards the aim of establishing a highly potent two way medium of connection
                    between the alumni and the students. It works towards the vision by carrying out various events that
                    aim at strengthening this alumni-alma bond, creating/updating the alumni database and also
                    conduction of seminars and talks by various alumni who are working in their specific fields and can
                    mentor the students.

                </div>
            </div>
            <!--/.Panel 3-->
            <div class="tab-pane fade" id="pane3" role="tabpanel">
                <div class="card-block text-justify">
                    <h2 class="h2-responsive text-center">Student Elected Representatives Society</h2>
                    The chief functions of the Student Elected Representatives Society Committee (SERC) are as follows:
                    <ul class="list-disc">
                        <li>It shall be the main platform for the students to
                            voice their opinion.
                        </li>
                        <li>It will be the center for all the legislative
                            procedures carried out in the Students’ body. It shall be the center for policy-making and
                            related activities.
                        </li>
                        <li>It approves and ratifies the formation of new student’s bodies.
                        </li>
                        <li>It shall also serve as a mechanism to collect student feedback and thereby effect changes in
                            the students’ body according to them.
                        </li>
                        <li>All Financial activities at the Student level shall be overseen by the Financial Committee
                            formed by SERC and SCHoD.
                        </li>
                        <li>It shall also take up the responsibility of
                            conducting Elections for the various positions at the end of every term.
                        </li>
                    </ul>
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
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>
<!-- MDB core JavaScript -->
<br>
<!--Footer-->
<?php
include 'footer.html';
?>