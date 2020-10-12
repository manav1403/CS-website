<?php
include 'head.html';
?>
<head>
    <title>Academics FAQs</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-4').classList.add('active');
    document.getElementById('nav-4-2').classList.add('active');
    document.getElementById('nav-4').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>

<div class="top-fixer-2"></div>
<section class="section team-section container">
    <?php
    include 'faq.php';
    ?>
    <script>
        document.getElementById('nav-2-academics').classList.add('active');
    </script>
    <!--Section heading-->
    <h1 class="section-heading">Academics FAQs</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="accordion text-justify" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                   aria-expanded="false" aria-controls="collapse1">
                    <h5 class="mb-0">
                        <strong>Q.1 </strong> What are the Opening and closing ranks of IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                <div class="card-block">
                    <strong>A.</strong>
                    Last year statistics as mentioned at jossa site are as follows;
                    (OR=Opening Rank , CR = Closing Rank)
                    <table class="table-responsive table">
                        <thead>
                        <tr>
                            <th rowspan="2">Branch</th>
                            <th colspan="2">General</th>
                            <th colspan="2">OBC</th>
                            <th colspan="2">SC</th>
                            <th colspan="2">ST</th>
                        </tr>
                        <tr>
                            <th>OR</th>
                            <th>CR</th>
                            <th>OR</th>
                            <th>CR</th>
                            <th>OR</th>
                            <th>CR</th>
                            <th>OR</th>
                            <th>CR</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Computer Science</td>
                            <td>2051</td>
                            <td>3341</td>
                            <td>925</td>
                            <td>1260</td>
                            <td>592</td>
                            <td>844</td>
                            <td>366</td>
                            <td>519</td>
                        </tr>
                        <tr>
                            <td>Electrical</td>
                            <td>4442</td>
                            <td>6139</td>
                            <td>1669</td>
                            <td>2220</td>
                            <td>737</td>
                            <td>1132</td>
                            <td>334</td>
                            <td>524</td>
                        </tr>
                        <tr>
                            <td>Mechanical</td>
                            <td>5263</td>
                            <td>7211</td>
                            <td>1661</td>
                            <td>2430</td>
                            <td>870</td>
                            <td>1335</td>
                            <td>549</td>
                            <td>616</td>
                        </tr>
                        </tbody>
                    </table>
                    Bio Technology is new branch for academic year 2018.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                   aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0">
                        <strong>Q.2 </strong>What is the Seat allocation procedure?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block">
                    <strong>A.</strong>
                    JOSAA seat allocation will be conducted in 7 rounds in addition of two rounds of mock seat
                    allocation. The student should have registered themselves and filled their choices to
                    participate in the seat allotment process. Next candidates will have to physically report
                    at their nearest reporting centers for document verification, and select their option among
                    freeze, slide and float.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                   aria-expanded="false" aria-controls="collapse3">
                    <h5 class="mb-0">
                        <strong>Q.3 </strong> What are the different kinds of programs running at IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block">
                    <strong>A.</strong>
                    You can find all the programs at IIT Jodhpur here :
                    <a href="http://iitj.ac.in/academics/index.php?id=programs" target="_blank">
                        http://iitj.ac.in/academics/index.php?id=programs
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                   aria-expanded="false" aria-controls="collapse4">
                    <h5 class="mb-0">
                        <strong>Q.4 </strong>Details about faculty at IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block">
                    <strong>A.</strong>
                    <table class="table text-left">
                        <thead>
                        <tr>
                            <th>Head</th>
                            <th>Department</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ritu Gupta</td>
                            <td>Chemistry</td>
                            <td>Ph.D.: Jawaharlal Nehru Centre for Advanced Scientific Research <br>
                                Nanomaterials & Nanodevices for Water, Energy and Healthcare
                            </td>
                        </tr>
                        <tr>
                            <td>Gaurav Harit</td>
                            <td>Computer Science and Engineering</td>
                            <td>Ph.D.: Indian Institute of Technology Delhi <br>
                                Image and Video Analysis
                            </td>
                        </tr>
                        <tr>
                            <td>Anil Kumar Tiwari</td>
                            <td>Electrical Engineering</td>
                            <td>Ph.D.: Indian Institute of Technology Kharagpur <br>
                                Electrical Engineering: Image Processing, Video Processing, and Signal Processing
                                application in Bio-Medical
                            </td>
                        </tr>
                        <tr>
                            <td>Vidya Sarverswaran</td>
                            <td>Humanities and Social Sciences</td>
                            <td>Ph.D.: Indian Institute of Technology Madras <br>
                                English: Literature and Environment (Ecocriticism), Film and Literature,
                                Literatures of the Global South, Regional Literatures in Translation,
                                American Literature
                            </td>
                        </tr>
                        <tr>
                            <td>Gaurav Bhatnagar</td>
                            <td>Mathematics</td>
                            <td>Ph.D.: Indian Institute of Technology Roorkee <br>
                                Wavelet Analysis, Fractional Transform Theory, Multimedia Security,
                                Image Processing, Information Fusion
                            </td>
                        </tr>
                        <tr>
                            <td>Kaushalkumar A. Desai</td>
                            <td>Mechanical Engineering</td>
                            <td>Ph.D.: Indian Institute of Technology Delhi <br>
                                CAD/CAM, CNC Machine Tools, Micro-Machining and Hybrid Manufacturing
                            </td>
                        </tr>
                        <tr>
                            <td>Subhashish Banerjee</td>
                            <td>Physics</td>
                            <td>Ph.D.: School of Physical Sciences, Jawaharlal Nehru University <br>
                                Open Quantum Systems; Quantum Information; Non-Equilibrium Statistical
                                Mechanics; Quantum Optics
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table text-left">
                        <thead>
                        <tr>
                            <th>Professor Incharge</th>
                            <th>Department</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>B. P. Kashyap</td>
                            <td>Metallurgical and Materials Engineering</td>
                            <td>Ph.D.: Indian Institute of Technology Kanpur <br>
                                Thermo-mechanical treatment and Super-plasticity,
                                Grain boundary phenomena, Creep and low temperature deformation,
                                Microstructure - flow property correlations, and Light metals and
                                alloy development
                            </td>
                        </tr>
                        <tr>
                            <td>Madhu Dikshit</td>
                            <td>Bioscience & Bioengineering</td>
                            <td>
                                Ph.D.: Kanpur University/CSIR-Central Drug Research Institute <br>
                                Molecular Pharmacology and Redox Biology
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    Follow this link for further information: <a href="http://iitj.ac.in/faculty/" target="_blank">http://iitj.ac.in/faculty</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5"
                   aria-expanded="false" aria-controls="collapse5">
                    <h5 class="mb-0">
                        <strong>Q.5 </strong>How do I fill up my choice for various undergraduate programs?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="card-block">
                    <strong>A.</strong>
                    Check the cutoff marks of last year for desired branch and institute corresponding to your rank.
                    You must do choice filling in a range of few hundred greater and lesser ranking points.
                    While filling choice fill as many choices as possible as there is no restriction in no.
                    of choices.
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                   aria-expanded="false" aria-controls="collapse6">
                    <h5 class="mb-0">
                        <strong>Q.6 </strong>What are the academic programs available and against which departments?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="card-block">
                    <strong>A.</strong>
                    The Institute provide four B.Tech. Programs, namely:
                    <ol type="1">
                        <li>B.Tech. (Computer Science & Engineering) Program</li>
                        <li>B.Tech. (Electrical Engineering) Program</li>
                        <li>B.Tech. (Mechanical Engineering) Program</li>
                        <li>B.Tech. (Biotechnology) Program</li>
                    </ol>
                    Other than these we have special program IIP, The Industry Immersion Program,
                    the unique flagship program of the Institute blends the classical classroom B.Tech.
                    Program with the 3-summer engagement in Industry.
                    <br>
                    <br>
                    The Institute offers the following Master of Science (M.Sc.) Programs:
                    <ol>
                        <li>M.Sc. (Chemistry)</li>
                        <li> M.Sc. (Mathematics)</li>
                        <li> M.Sc. (Physics)</li>
                    </ol>
                    The Institute offers the following Master of Technology (M.Tech.) Programs:
                    <ol>
                        <li>M.Tech. (Electrical Engineering)</li>
                        <li>M.Tech. (Mechanical Engineering)</li>
                    </ol>
                    The Institute offers a Phd. Program with specialization in the following disciplines:
                    <ol>
                        <li>Computer Science & Engineering</li>
                        <li>Electrical Engineering,</li>
                        <li>Mechanical Engineering</li>
                        <li>Biology</li>
                        <li>Chemistry</li>
                        <li>Mathematics</li>
                        <li>Physics</li>
                        <li>Humanities & Social Sciences</li>
                    </ol>
                    Institute also provide non degree program.
                    <br>
                    Follow this link for further information: <a href="http://iitj.ac.in/academics/index.php?id=programs" target="_blank">http://iitj.ac.in/academics/index.php?id=programs</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading7">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7"
                   aria-expanded="false" aria-controls="collapse7">
                    <h5 class="mb-0">
                        <strong>Q.7 </strong>Can I change my department post-admission?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="card-block">
                    <strong>A.</strong>
                    Yes, you can change your branch post admission. At the end of your first year you can apply
                    for the branch change.
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading8">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8"
                   aria-expanded="false" aria-controls="collapse8">
                    <h5 class="mb-0">
                        <strong>Q.8 </strong>How easy is the branch change in IIT Jodhpur? What is the criterion
                        for the same?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                <div class="card-block">
                    <strong>A.</strong>
                    Branch change strictly depend on your CGPA and that of your other interested peers in changin
                    their branches at the end of second semester. In case of tie in the CGPA, rank of JEE-ADV of
                    applicants will be considered.
                    <br>
                    The eligibility criteria are:
                    <ol>
                        <li>
                            The cgpa at the end of second semester should be:
                            <ol type="a">
                                <li>Greater than or equal to 7.0 for sc/st applicants</li>
                                <li>Greater than or equal to 8.0 for other applicants</li>
                            </ol>
                        </li>
                        <li>The student should have passed all the courses till second semester (including the courses
                            in which S/X grades are awarded).
                        </li>
                        <li>Strength constraints: the strength of any branch shall not exceed 105%of its sanctioned 
                            strength, or fall below 90% of its existing strength as a result of branch change.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading9">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9"
                   aria-expanded="false" aria-controls="collapse9">
                    <h5 class="mb-0">
                        <strong>Q.9 </strong>What will be the courses in 1st semester of B.Tech?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                <div class="card-block">
                    <strong>A.</strong>
                    In 1st semester of B.Tech most of the courses are common for all branches. As per previous year,
                    the common courses for mechanical, electrical and computer science branches are
                    <ol type="1">
                        <li>MA111 Linear Algebra and Calculus</li>
                        <li>ME111 System Exploration - Drawing</li>
                        <li>CS111 Computer Programming</li>
                        <li>HS111 English/Foreign Language</li>
                        <li>PH111 Physical Excercise I</li>
                        <li>
                            PH111 Electromagnetism and Optics (For CSE and EE student)<br>
                            ME112 engineering Materials (For ME student)
                        </li>
                        <li>
                            CY211 chemistry (For CSE and ME students) <br>
                            EE111 Physics of Semiconductor Devices (For EE students)
                        </li>
                    </ol>
                    The curriculum for Biotechnology will be updated shortly. <br>
                    Follow this link for further information-
                    <a href="http://iitj.ac.in/academics/index.php?id=curriculum" target="_blank">
                        http://iitj.ac.in/academics/index.php?id=curriculum</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading10">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10"
                   aria-expanded="false" aria-controls="collapse10">
                    <h5 class="mb-0">
                        <strong>Q.10 </strong>Will we be buying books or we can get them from the library?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
                <div class="card-block">
                    <strong>A.</strong>
                    Books can be borrowed with a valid Institute Identity Card from the library. Library has a special
                    collection of textbooks for students belonging to SC/ST category, as per GoI norms. For issuing
                    these books, students can apply as per the announced schedule by the Book Bank student volunteers.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading11">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11"
                   aria-expanded="false" aria-controls="collapse11">
                    <h5 class="mb-0">
                        <strong>Q.11 </strong> What about laboratories & research facilities of IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11">
                <div class="card-block">
                    <strong>A.</strong>
                    IIT Jodhpur has established good number of teaching and research laboratories and facilities,
                    which aid in elevating the students from minimalist academic concerns to inquisitive world of
                    scientific arena. Some of the laboratories are listed below:
                    <ol>
                        <li>Advance Manufacturing Laboratory</li>
                        <li>Biomolecular Information Processing Laboratory</li>
                        <li>Central Workshop</li>
                        <li>Chemical Biology Laboratory</li>
                        <li>Chemistry Laboratory</li>
                        <li>Control / DSP / Microprocessor Laboratory</li>
                        <li>Electro Mechanical (EM) Energy Conversion Laboratory</li>
                        <li>Robotics Laboratory</li>
                        <li>Fluid Mechanics & Heat Transfer Laboratory</li>
                        <li>Material Testing & Solid Mechanics Laboratory</li>
                    </ol>
                    Follow this link for further information-
                    <a href="http://iitj.ac.in/research/index.php?id=research_facilities" target="_blank">
                        http://iitj.ac.in/research/index.php?id=research_facilities
                    </a>
                </div>
            </div>
        </div>





        <div class="h5-responsive p-4">For further queries mail us at <a href="mailto:counselling@iitj.ac.in">counselling@iitj.ac.in</a></div>
    </div>
</section>
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/compiled.min.js"></script>
<!--Footer-->
<?php
include 'footer.html';
?>