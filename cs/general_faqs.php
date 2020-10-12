<?php
include 'head.html';
?>
<head>
    <title>General FAQs</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-4').classList.add('active');
    document.getElementById('nav-4-1').classList.add('active');
    document.getElementById('nav-4').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>

<div class="top-fixer-2"></div>
<section class="section team-section container">
    <?php
    include 'faq.php';
    ?>
    <script>
        document.getElementById('nav-2-general').classList.add('active');
    </script>
    <!--Section heading-->
    <h1 class="section-heading">General FAQs</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="accordion text-justify" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                   aria-expanded="false" aria-controls="collapse1">
                    <h5 class="mb-0">
                        <strong>Q.1</strong> How do we reach the IIT Jodhpur campus from Jodhpur
                        Airport/Railway Station/Bus Station?<i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                <div class="card-block">
                    <strong>A. </strong>IIT Jodhpur is located on the outskirts of  the city of Jodhpur and is well
                    connected to other parts of country by road, rail and air. The Institute is located on National
                    Highway 65 at Karwar Village, about 24 km from the railway station and 25 km from the airport;
                    it takes approximately 45 mins and 40 mins to drive from airport and railway station to the
                    Institute, respectively.
                    <div class="p-2">
                        <p><strong>1. </strong>It is connected by rail to major cities like Delhi, Mumbai, Kolkata,
                            Chennai, Hyderabad, Kota, Kanpur, Ahmedabad, Indore, Bhopal, Jabalpur, Guwahati, Nagpur,
                            Lucknow and Jaipur.</p>
                        <p><strong>2. </strong>There are daily flights from Delhi and Mumbai to Jodhpur. Air India and
                            Jet Airways operate the daily flight to each of these cities</p>
                        <p><strong>3. </strong>Jodhpur is connected by mega-highway to major neighbouring cities, e.g.,
                            Jaipur, Jaisalmer, Udaipur and Ahmedabad. Deluxe and express buses ply to Jodhpur from Delhi,
                            Jaipur, Ahmedabad and Vadodara.
                        </p>
                    </div>
                    <strong>Reaching IIT Jodhpur</strong>
                    <div class="p-2">
                        <p><strong>(a). From Airport to Campus </strong><br>
                            You can take a prepaid auto/taxi to the Institute, which is situated on National Highway 65,
                            Nagaur Road, Karwad. You may ask the driver to go past Mandore on Nagaur Road. This Campus
                            is about 28 km away from the airport
                        </p>
                        <p><strong>(b). From Railway Station to Campus </strong><br>
                            At Jodhpur Junction Railway Station, exit from Platform No.1 side.
                            You can take a prepaid auto/taxi to the Permanent Campus of IIT Jodhpur, which is situated
                            on National Highway 65, Nagaur Road, Karwad. You may ask the driver to go past Mandore on
                            Nagaur Road. The campus is about 26 km away from the Station.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                   aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0">
                        <strong>Q.2</strong> How developed is the IIT Jodhpur campus at Karwad?  <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block">
                    <strong>A. </strong>The permanent campus is built on 852 acres of land located about 20 km away
                    from the center of the city of Jodhpur on National Highway 65 towards Nagaur, N-NE from the center
                    of Jodhpur. The Permanent Campus of the Institute is the first fully-planned technical institute
                    campus in India. Our campus has different girls and boys hostels and a supermarket from where you
                    can buy daily needs. It has a library and a lecture hall building where all the classes are held.
                    There is a health centre and 24 hours ambulance service. There is a separate residential area and
                    a sports area where all the sports activities are done. We have different segments for different
                    departments.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                   aria-expanded="false" aria-controls="collapse3">
                    <h5 class="mb-0">
                        <strong>Q.3 </strong>What are the good places to hang out in Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block">
                    <strong>A. </strong>
                    Jodhpur is a tourist hotspot and hence one never runs out of place to roam about in Jodhpur.
                    To start with there is the majestical Mehrangarh fort which is around 28 km away from our
                    campus. Then we have Jaswant Thada and Umed Bhawan Palace. We also have Balsamand and Kaylana
                    lakes. We have bus service running between the Institute and various places in the City of
                    Jodhpur at regular intervals.So you can go to the city and have fun!!
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                   aria-expanded="false" aria-controls="collapse2">
                    <h5 class="mb-0">
                        <strong>Q.4 </strong>  How is the weather in IIT Jodhpur Campus like?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block">
                    <strong>A. </strong>Jodhpur is known as the Sun City, for the bright and sunny weather it enjoys
                    throughout the year. It experiences dry and hot, a typical desert weather. The average annual
                    rainfall is approximately 32 cm. In summer, the temperatures range from a maximum of around 42° C
                    to a minimum of around 37° C. In winters, the maximum and minimum temperatures are around 27.5° C
                    and 10° C respectively. But it rains in July. We advise you to carry an umbrella with you.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5"
                   aria-expanded="false" aria-controls="collapse5">
                    <h5 class="mb-0">
                        <strong>Q.5 </strong>Are there any wild animals in the IIT Jodhpur campus?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="card-block">
                    <strong>A. </strong>Snakes, scorpions, deer and other small creatures are spotted in the less
                    traversed parts of the campus in the night. However students are provided safety against these
                    creatures. Also each room is provided with a window net to avoid any small insects to get into the
                    room through windows.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                   aria-expanded="false" aria-controls="collapse6">
                    <h5 class="mb-0">
                        <strong>Q.6 </strong>What if I get lost in Campus?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="card-block">
                    <strong>A. </strong>Guards are there in every possible corner of the campus. They will help
                    you if you get lost in the campus. Additionally, a road map of the campus will be provided.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading7">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7"
                   aria-expanded="false" aria-controls="collapse7">
                    <h5 class="mb-0">
                        <strong>Q.7 </strong>What kind of accommodation is available for the students?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="card-block">
                    <strong>A. </strong>Students will be allotted their hostel rooms as soon as they arrive
                    at the campus on the reporting date itself and not before the reporting date. Each student will get
                    a single room that will have a bed, a chair and table, an almirah and an A.C.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading8">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8"
                   aria-expanded="false" aria-controls="collapse8">
                    <h5 class="mb-0">
                        <strong>Q.8 </strong> Where will be the freshers be accommodated?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                <div class="card-block">
                    <strong>A. </strong>Freshers will be accommodated in the hostel buildings itself.
                    More details on room allotment will be provided on the reporting date.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading9">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9"
                   aria-expanded="false" aria-controls="collapse9">
                    <h5 class="mb-0">
                        <strong>Q.9 </strong>What about once I reach? Will there be accommodation for
                        my parents and me?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                <div class="card-block">
                    <strong>A. </strong>No accommodation will be provided to the parents. However the students
                    will be staying in their hostel rooms that will be alloted to them as soon as report on
                    the reporting date, not before then.

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading10">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10"
                   aria-expanded="false" aria-controls="collapse10">
                    <h5 class="mb-0">
                        <strong>Q.10 </strong>Is accommodation/guest house available for parents in the Campus?
                        If not, can you please provide a list of nearby hotel?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
                <div class="card-block">
                    <strong>A. </strong>No accommodation/guest house is provided for parents in the campus. Here is the
                    list of nearby hotels-
                    <ol class="pl-5">
                        <li>
                            <b>Mango Hotels Jodhpur Ratanada-</b>	( 29 km from iit jodhpur ) <br>
                            <i>Address-</i> Rajwara Palace, Opposite Government Veterinary Hospital, Ratanada Jodhpur,Ratanada,
                            Jodhpur, Rajasthan 342001 <br>
                            <i>Contact-</i><a href="tel:+9102912515242"> 0291 251 5242</a>
                        </li>
                        <li>
                            <b>Hotel Red Oak -	</b>	( 20 km from iit jodhpur ) <br>
                            <i>Address-</i> Bikaner - Barmer Road, Near Over Bridge, Mandore, Jodhpur, Jodhpur,
                            Rajasthan 342304
                            <br>
                            <i>Contact-</i><a href="tel:+919414410691"> 094144 10691</a>
                        </li>
                        <li>
                            <b>Chandra Inn-</b>	( 30.1 km from iit jodhpur ) <br>
                            <i>Address-</i> Airport Rd, Air Force Area, Air Force Area, Jodhpur, Rajasthan 342001<br>
                            <i>Contact-</i><a href="tel:+9102912670583"> 0291 267 0583</a>

                        </li>
                        <li>
                            <b>Hotel Residency Palace- </b>	( 29.9 km from iit jodhpur ) <br>
                            <i>Address-</i> Senapati Bhawan, Central Academy Road, near, Ratanada, Jodhpur, Rajasthan
                            342011<br>
                            <i>Contact-</i><a href="tel:+919413325500"> 094133 25500</a>
                        </li>
                        <li>
                            <b>Lords Inn Jodhpur- </b>	( 30.7 km from iit jodhpur ) <br>
                            <i>Address-</i>Plot No 1 C, Pokharan Bungalow, PWD Circle, High Court Colony Road,
                            Ratanada, Jodhpur, Rajasthan 342001
                            <br>
                            <i>Contact-</i><a href="tel:+917073221113"> 070732 21113</a>
                        </li>
                        <li>
                            <b>Shree Ram International-</b>	( 30.4 km from iit jodhpur ) <br>
                            <i>Address-</i> Near Panch Batti Circle, Residency Road, Air Force Area, Jodhpur,
                            Rajasthan 342011
                            <br>
                            <i>Contact-</i><a href="tel:+9102912671100"> 0291 267 1100</a>
                        </li>
                        <li>
                            <b>The Fern Residency Hotel Jodhpur- </b>	( 28.8 km from iit jodhpur ) <br>
                            <i>Address-</i> 1B/A, Shiv Mandir Road, Subhash Chowk, Ratanada, Subhash Chowk,
                            Ratanada, Jodhpur, Rajasthan 342001
                            <br>
                            <i>Contact-</i><a href="tel:+9102912514444"> 0291 251 4444
                        </a>
                        </li>
                        <li>
                            <b>OYO 1174 Shanti Bhawan Heritage- </b>	( 29.1 km from iit jodhpur ) <br>
                            <i>Address-</i> Opposite Railway Station, Ratanada, Jodhpur, Rajasthan 342001
                            <br>
                            <i>Contact-</i><a href="tel:+918377004514"> 083770 04514</a>
                        </li>
                    </ol>
                    For more - <a href="map/index.html" target="_blank">Click Here</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading11">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11"
                   aria-expanded="false" aria-controls="collapse11">
                    <h5 class="mb-0">
                        <strong>Q.11 </strong> Is there Ragging? Does IIT Jodhpur have policies against it?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11">
                <div class="card-block">
                    <strong>A. </strong>No, Ragging is strictly prohibited and punishable in institute and
                    strict actions are taken if found so. Yes, IITJ do have strict policies against ragging
                    and we also have an Anti-ragging Squad to prevent any kind of ragging in the institute.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading12">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12"
                   aria-expanded="false" aria-controls="collapse12">
                    <h5 class="mb-0">
                        <strong>Q.12 </strong>Can freshers bring laptops in the first semester? How is the internet facility on campus?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12">
                <div class="card-block">
                    <strong>A. </strong>
                    Yes one can bring laptops right from the first semester itself. However, it is optional. Proper
                    LAN and Wifi facilities are provided in all the hostel as well as academic buildings. Computer
                    centres are also there so that the computer systems are available to use if required by any student
                    but only during normal office hours
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading13">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13"
                   aria-expanded="false" aria-controls="collapse13">
                    <h5 class="mb-0">
                        <strong>Q.13 </strong>What are the bank and ATM facilities in the campus?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13">
                <div class="card-block">
                    <strong>A. </strong>
                    We have got an SBI bank branch within the campus and also an ATM.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading14">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14"
                   aria-expanded="false" aria-controls="collapse14">
                    <h5 class="mb-0">
                        <strong>Q.14 </strong>What is the holiday schedule of IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14">
                <div class="card-block">
                    <strong>A. </strong>
                    Saturdays and sundays are usually non working, and other holidays are mentioned in the academic
                    calendar of institute.Visit -
                    <a href="http://iitj.ac.in/academics/index.php?id=holidays" target="_blank">
                        http://iitj.ac.in/academics/index.php?id=holidays
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading15">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15"
                   aria-expanded="false" aria-controls="collapse15">
                    <h5 class="mb-0">
                        <strong>Q.15 </strong>How about other extra-curricular activities and clubs
                        at IIT Jodhpur (i.e. about Student Gymkhana, IIT Jodhpur)?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15">
                <div class="card-block">
                    <strong>A. </strong>
                    <a href="students.iitj.ac.in" target="_blank">Student Gymkhana </a>hosts its activities through seven student societies. Each Society comprises of
                    several clubs. Different club organize creative activities for
                    the all-rounded mental, physical, social and cultural growth of students.
                    <br>
                    Similarly, the student activities at the hostel level are organized through Students Regatta.
                    The seven societies are:
                    <br>
                    <ol>
                        <li>Sports & Games Society</li>
                        <li>Cultural & Literary Society</li>
                        <li>Design & Arts Society</li>
                        <li>Science & Technology Society</li>
                        <li>Academics & Careers Society</li>
                        <li>Campus Life Society</li>
                        <li>Student Elected Representatives Society</li>
                    </ol>
                    Two main fest namely varchas (sports festival) and Ignus (techo-cult-socio-festival)
                    are conducted apart from the intra college fest spandan, unplugged night, nimble(tech fest).
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading16">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse16"
                   aria-expanded="false" aria-controls="collapse16">
                    <h5 class="mb-0">
                        <strong>Q.16 </strong>What about medical facilities?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse16" class="collapse" role="tabpanel" aria-labelledby="heading16">
                <div class="card-block">
                    <strong>A. </strong>
                    The campus has a primary Health Center for providing routine health services to the patients
                    round the clock. Also, the Institute has its ambulance services available round-the-clock.
                    Besides the Health Center, the Institute has empanelled six hospitals in the city of Jodhpur.
                    The Institute has constituted a Medical Board consisting of Senior Doctors from the Medical
                    College and the AIIMS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading17">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse17"
                   aria-expanded="false" aria-controls="collapse17">
                    <h5 class="mb-0">
                        <strong>Q.17 </strong>What are the scholarships/financial assistance available for studying
                        at IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse17" class="collapse" role="tabpanel" aria-labelledby="heading17">
                <div class="card-block">
                    <strong>A. </strong>
                    Merit-cum-Means (MCM) Scholarships are awarded to deserving (up to 25%) B.Tech. students.
                    In addition, the Institute provides financial assistance (Tuition fee waiver) to some students
                    with special financial circumstances. Follow these links for further information-<br>
                    B.Tech. - <a href="http://iitj.ac.in/admission/btech.php?id=scholarships" target="_blank">
                    http://iitj.ac.in/admission/btech.php?id=scholarships</a><br>
                    M.Sc. - <a href="http://iitj.ac.in/admission/msc.php?id=assistantship" target="_blank">
                    http://iitj.ac.in/admission/msc.php?id=assistantship</a><br>
                    M.Tech. - <a href="http://iitj.ac.in/admission/mtech.php?id=assistantship" target="_blank">
                    http://iitj.ac.in/admission/mtech.php?id=assistantship</a><br>
                    Ph.D. - <a href="http://iitj.ac.in/admission/phd.php?id=assistantship" target="_blank">
                    http://iitj.ac.in/admission/phd.php?id=assistantship</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading18">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse18"
                   aria-expanded="false" aria-controls="collapse18">
                    <h5 class="mb-0">
                        <strong>Q.18 </strong>What is the procedure for getting the MCM scholarships?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse18" class="collapse" role="tabpanel" aria-labelledby="heading18">
                <div class="card-block">
                    <strong>A. </strong>
                    Application forms are available with the Office of Students. Duly filled Application Form along
                    with requisite documents may be submitted to: <br>
                    Coordinator (Students), Office of Students <br>
                    For all category students following documents should be submitted
                    <ol type="a">
                        <li>A photocopy of Annual Income Certificate (Form F16) of immediately preceding Financial Year,
                            as provided by the employer, as according to criteria Annual Income (of a student’s
                            parents/guardian and his Family from all sources in the preceding financial year must not
                            exceed Rs. 6.0 Lakhs.
                        </li>
                        <li>A copy of Income Tax Returns (ITR) for present Assessment Year as filed
                            with the Department of Income Tax.
                        </li>
                    </ol>
                    Find more about <a href="http://iitj.ac.in/admission/btech.php?id=scholarships" target="_blank">MCM</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading19">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse19"
                   aria-expanded="false" aria-controls="collapse19">
                    <h5 class="mb-0">
                        <strong>Q.19 </strong>What is the Placement statistics of IIT Jodhpur?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse19" class="collapse" role="tabpanel" aria-labelledby="heading19">
                <div class="card-block">
                    <strong>A. </strong>
                    Last year, total of <b>104 students registered for placements out of which 78 students got placed.</b>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>B. Tech Program</th>
                            <th>Percentage</th>
                            <th>Average Package(lakhs per year)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Computer Science and Engineering</td>
                            <td>95%</td>
                            <td>15-17</td>
                        </tr>
                        <tr>
                            <td>Electrical Engineering</td>
                            <td>65%</td>
                            <td>9-10</td>
                        </tr>
                        <tr>
                            <td>Mechanical Engineering</td>
                            <td>85%</td>
                            <td>7-9</td>
                        </tr>
                        </tbody>
                    </table>
                    For more visit - <a href="http://spc.iitj.ac.in/summary" target="_blank">
                    http://spc.iitj.ac.in/summary</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading20">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse20"
                   aria-expanded="false" aria-controls="collapse20">
                    <h5 class="mb-0">
                        <strong>Q.20 </strong>Which are the companies that have offered placement to students?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse20" class="collapse" role="tabpanel" aria-labelledby="heading20">
                <div class="card-block">
                    <strong>A. </strong>
                    Here is a list of a few companies that offered placements to the students in the past. <br>
                    <u><b>Private Industries</b></u>
                    <ul>
                        <li>Amazon.com</li>
                        <li>Barclays</li>
                        <li>Flipkart.com</li>
                        <li>Finisar Corporation</li>
                        <li>Goldman Sachs</li>
                        <li>Google</li>
                        <li>Havells India Limited</li>
                        <li>Honda Cars</li>
                        <li>Hyundai</li>
                        <li>Infosys</li>
                        <li>Renault Nissan</li>
                        <li>Samsung India Software Centre</li>
                        <li>Snapdeal.com</li>
                        <li>Tata Motors Private Limited</li>
                        <li>Mahindra & Mahindra Limited</li>
                        <li>Microsoft Corporation</li>
                        <li>Morgan Stanley</li>
                    </ul>
                    <u><b>Public Sector Enterprises</b></u>
                    <ul>
                        <li>Hindustan Petroleum Corporation Limited</li>
                        <li>Indian Army</li>
                        <li>Indian Navy</li>
                        <li>Indian Space Research Organization and many more</li>
                    </ul>
                    For more visit - <a href="http://spc.iitj.ac.in/past_recruiters" target="_blank">
                    http://spc.iitj.ac.in/past_recruiters</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading21">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse21"
                   aria-expanded="false" aria-controls="collapse21">
                    <h5 class="mb-0">
                        <strong>Q.21 </strong>What kind of training do the students get for their internships?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse21" class="collapse" role="tabpanel" aria-labelledby="heading21">
                <div class="card-block">
                    <strong>A. </strong>
                    Various sessions are organised by academics and carrier society as well as the Student Placement
                    Cell which lead to overall personality development, and help to get more clear view about industries
                    and to work in outside world. These trainings helps to get internships and placement.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading22">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse22"
                   aria-expanded="false" aria-controls="collapse22">
                    <h5 class="mb-0">
                        <strong>Q.22 </strong> Are there any mentorship program available for students?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse22" class="collapse" role="tabpanel" aria-labelledby="heading22">
                <div class="card-block">
                    <strong>A. </strong>
                    Yes, one faculty member is allocated to a particular number of students, also newbies
                    are provided with a counselling team member to look after their basic queries and any kind of problem.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading23">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse23"
                   aria-expanded="false" aria-controls="collapse23">
                    <h5 class="mb-0">
                        <strong>Q.23 </strong> How many girls are studying in IIT Jodhpur right now?
                        More specifically, how many female students are in B.Tech courses?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse23" class="collapse" role="tabpanel" aria-labelledby="heading23">
                <div class="card-block">
                    <strong>A. </strong>
                    In the academic year 2016-17, 65 girls were studying in both the UG and the PG program out of which
                    43 girls were studying in the UG program.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading24">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse24"
                   aria-expanded="false" aria-controls="collapse24">
                    <h5 class="mb-0">
                        <strong>Q.24 </strong>How many girls’ hostels are in IIT Jodhpur campus? Will all first
                        year female students get accommodation in the same hostel?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse24" class="collapse" role="tabpanel" aria-labelledby="heading24">
                <div class="card-block">
                    <strong>A. </strong>
                    Currently there is one girls' hostel in IIT Jodhpur. Yes, all the first year female
                    students will get accommodation in  the same hostel.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading25">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse25"
                   aria-expanded="false" aria-controls="collapse25">
                    <h5 class="mb-0">
                        <strong>Q.25 </strong>Is it safe for female students to roam around in the IIT
                        Jodhpur campus and nearby places?
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse25" class="collapse" role="tabpanel" aria-labelledby="heading25">
                <div class="card-block">
                    <strong>A. </strong>
                    Campus of IIT Jodhpur is secured throughout the day. The Institute has round-the-clock, dedicated,
                    professional security arrangement on Campus. Also, every hostel is manned with one security guard.
                    Entry and exit are registered of each visitor. Other institute like NIFT (National Institute of
                    Fashion and Technology) and NLU (National Law University) are present near to the IIT Jodhpur
                    campus and it is totally safe to roam around nearby places. However, it is advisable to stay within
                    the campus during odd timings.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="heading26">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse26"
                   aria-expanded="false" aria-controls="collapse26">
                    <h5 class="mb-0">
                        <strong>Q.26 </strong> Is there any club or something specially for female students?
                        (I.e. about Women Cell)
                        <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>
            <div id="collapse26" class="collapse" role="tabpanel" aria-labelledby="heading26">
                <div class="card-block">
                    <strong>A. </strong>
                    Yes, there is a special cell named women cell for female students. The Women Cell, IIT Jodhpur,
                    functions in accordance with the provisions contained in Sexual Harassment of Women at Workplace
                    (Prevention, Prohibition and Redressal) ACT, 2013.
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
<?php
include 'footer.html';
?>