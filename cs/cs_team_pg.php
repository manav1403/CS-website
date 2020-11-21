<?php
include 'head.html';
?>

<head>
    <title>CS team - PG</title>
</head>

<body>
    <!--Navbar-->
    <?php
    include 'navbar.html';
    ?>
    <script>
        document.getElementById('nav-2').classList.add('active');
        document.getElementById('nav-2-3').classList.add('active');
        document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
    </script>
    <div class="top-fixer-2"></div>
    <!--Section: Team v.1-->
    <section class="section team-section container">
    <div id="section-2">
        <div class="container text-center pt-1 mb-1">
            <div class="row flex-center nav-justified">
                <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">PG Team Information</a>
                    </li>
                </ul>
                <div class="tab-content text-justify">
                    <!--pginfo-->
                    <div class="tab-pane fade in show active" id="pginfo" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <div class="row flex-center">
                                <?php
                                $dir = './images/pg-pamphlet/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir"."$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Panel 1-->
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
                        
                        <!--Text-->
                        <p class="card-text">
                        <a href="https://forms.gle/6CBJbsLUcVAcSYuo7">PG Query Form</a>
                         
                        </p>
                    </div>
                    <!--/.Card content-->
                </div>
            </div>		
        </div>
    </div>
    <div class="divider-new">
            <h2 class="h2-responsive">Student Heads</h2>
        </div>
        <div class="row text-center" id="head">
            <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Shivangi.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Shivangi</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919458468064">+91-9458468064</a></h5>
                <h5><strong>Hometown: </strong>Mathura, Uttar Pradesh<br><strong>Course: </strong>M.Tech-PhD <strong>Branch: </strong>BB</h5>
                <a class="icons-sm email-ic" href="mailto:sharma.48@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Hemant_Shrivastava.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Hemant Shrivastava</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917737722998">+91-7737722998</a></h5>
                <h5><strong>Hometown: </strong>Bundi, Rajasthan<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>EE(SIot)</h5>
                <a class="icons-sm email-ic" href="mailto:hemanth@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/hemant0312"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/_hemant_shrivastava/"><i class="fa fa-instagram"> </i></a>
            </div>

        </div>
        <div class="divider-new">
            <h2 class="h2-responsive">Student Guides</h2>
        </div>
        <!--First row-->
        <div class="row text-center" id="student-guide">
            
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/anil_rawat.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Anil Rawat</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918152081989">+91-8152081989</a></h5>
                <h5><strong>Hometown: </strong>Agra, Uttar Pradesh<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>EE(SIot)</h5>
                <a class="icons-sm email-ic" href="mailto:rawat.4@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/anil.rawat.10690203"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/rwt_anni/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Anjali_Setiya.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Anjali Setiya</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918477071313">+91-8477071313</a></h5>
                <h5><strong>Hometown: </strong>Kashipur, Uttarakhand<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>BB</h5>
                <a class="icons-sm email-ic" href="mailto:setiya.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Bibhudatta_Satapathy.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Bibhudutta Satapathy</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918984294730">+91-8984294730</a></h5>
                <h5><strong>Hometown: </strong>Balasore, Odisha<br><strong>Course: </strong>M.Tech-PhD  <strong>Branch: </strong>EE(SIot)</h5>
                <a class="icons-sm email-ic" href="mailto:satapathy.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
             </div>
			<div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Harshita_Devda.png" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Harshita Devda</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917987783549">+91-7987783549</a></h5>
                <h5><strong>Hometown: </strong>Mandsaur ,Madhya pradesh<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:devda.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Lovely.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Lovely Mudi</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918697950045">+91-8697950045</a></h5>
                <h5><strong>Hometown: </strong>Adra, West Bengal<br><strong>Course: </strong>M.Tech. <strong>Branch: </strong>DCS</h5>
                <a class="icons-sm email-ic" href="mailto:mudi.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/chaubeybhawna"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/bhawnachaubey/"><i class="fa fa-instagram"> </i></a>
            </div>
           
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Mahima_Chaudhary.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Mahima Chaudhary</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=916377634648">+91-6377634648</a></h5>
                <h5><strong>Hometown: </strong>Jaipur, Rajasthan<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:chaudhary.9@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                </div>
			<div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Muskan_Dosi.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Muskan Dosi</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919413715992">+91-9413715992</a></h5>
                <h5><strong>Hometown: </strong>Banswara, Rajasthan<br><strong>Course: </strong>M.Tech. <strong>Branch: </strong>CSE</h5>
                <a class="icons-sm email-ic" href="mailto:dosi.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/twinkle.dosi"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/muskandosi/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Neetu_Raj_Singh_Chundawat.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Neetu Raj Singh Chundawat</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919571444130">+91-9571444130</a></h5>
                <h5><strong>Hometown: </strong>Udaipur, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:chundawat.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Nilesh_Dalla.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Nilesh Dalla</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918168903914">+91-8168903914</a></h5>
                <h5><strong>Hometown: </strong>Charkhi Dadri, Haryana<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="mailto:dalla.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Priyanka_Saxena.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Priyanka Saxena</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919352280226">+91-9352280226</a></h5>
                <h5><strong>Hometown: </strong>Ludhiana, Punjab<br><strong>Course: </strong>PhD <strong>Branch: </strong>EE</h5>
                <a class="icons-sm email-ic" href="mailto:saxena.5@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
             </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Rahul_Sorout.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Rahul Kumar</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918684938279">+91-8684938279</a></h5>
                <h5><strong>Hometown: </strong>Palwal, Haryana<br><strong>Course: </strong>M.Tech. <strong>Branch: </strong>BB </h5>
                <a class="icons-sm email-ic" href="mailto:kumar.22@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
				<a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/rahul.sorout.731"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/rahulsorout96/"><i class="fa fa-instagram"> </i></a>
             
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Ramavtar_Jangra.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Ramavtar Jangra</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918683812890">+91-8683812890</a></h5>
                <h5><strong>Hometown: </strong>Hisar, Haryana<br><strong>Course: </strong>PhD <strong>Branch: </strong>PH</h5>
                <a class="icons-sm email-ic" href="jangra.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Shiksha_Mishra.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Shiksha Mishra</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917786034482">+91-7786034482</a></h5>
                <h5><strong>Hometown: </strong>Prayagraj, Uttar Pradesh<br><strong>Course: </strong>M.Tech. <strong>Branch: </strong>CSE</h5>
                <a class="icons-sm email-ic" href="mailto:mishra.9@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
               </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Shrutika_Agrawal.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Shrutika Agrawal</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918376925991">+91-8376925991</a></h5>
                <h5><strong>Hometown: </strong>Mathura, Uttar Pradesh<br><strong>Course: </strong>M.Sc. <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:agrawal.11@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Shubham_Gupta.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Shubham Gupta</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918285414648">+91-8285414648</a></h5>
                <h5><strong>Hometown: </strong>Bulandshahr, Uttar Pradesh<br><strong>Course: </strong>M.Tech-PhD <strong>Branch: </strong>CSE</h5>
                <a class="icons-sm email-ic" href="mailto:gupta.37@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/shubham.bsr/"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/shubhamguptabsr/"><i class="fa fa-instagram"> </i></a>
             </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Shubham_vaishnav.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Shubham Vaishnav</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919530211402">+91-9530211402</a></h5>
                <h5><strong>Hometown: </strong>Ajmer, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:vaishnav.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
				
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/shubh.vaishnav.sgv/"><i class="fa fa-instagram"> </i></a>
             </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Shubhansu_Singh.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Shubhansu Singh</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=917017987881">+91-7017987881</a></h5>
                <h5><strong>Hometown: </strong>Mathura, Uttar Pradesh<br><strong>Course: </strong>M.Tech <strong>Branch: </strong>Materials</h5>
                <a class="icons-sm email-ic" href="mailto:singh.85@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/shubh255"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/shubh_anshu/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Somanka_Maitis.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Somanka Maiti</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918791195887">+91-8791195887</a></h5>
                <h5><strong>Hometown: </strong>Haridwar, Uttarakhand<br><strong>Course: </strong>PhD <strong>Branch: </strong>Mathematics</h5>
                <a class="icons-sm email-ic" href="mailto:maiti.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/Isomank"><i class="fa fa-facebook"> </i></a>
				<a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/enigmatic_somank/"><i class="fa fa-instagram"> </i></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Subhadra_Nandi.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Subhadra Nandi</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919831645245">+91-9831645245</a></h5>
                <h5><strong>Hometown: </strong>Kolkata, West Bengal<br><strong>Course: </strong>M.Tech-PhD <strong>Branch: </strong>BB</h5>
                <a class="icons-sm email-ic" href="mailto:nandi.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                </div>
            <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Swarit_Anand_Singh.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Swarit Anand Singh</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919044812989">+91-9044812989</a></h5>
                <h5><strong>Hometown: </strong>Gorakhpur, Uttar Pradesh<br><strong>Course: </strong>PhD <strong>Branch: </strong>ME</h5>
                <a class="icons-sm email-ic" href="mailto:singh.68@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            </div>
			<div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/Swati_Gahlaut.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Swati Gahlaut</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918630613844">+91-8630613844</a></h5>
                <h5><strong>Hometown: </strong>Uttarakhand<br><strong>Course: </strong>PhD <strong>Branch: </strong>EE</h5>
                <a class="icons-sm email-ic" href="mailto:gahlaut.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
				<a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/swati.gahlaut.5"><i class="fa fa-facebook"> </i></a>
				<a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/swatigahlaut/"><i class="fa fa-instagram"> </i></a>
            </div>

        </div>
        <!--/First row-->
		<div class="divider-new">
            <h2 class="h2-responsive">Mentors</h2>
        </div>
		<div class="row text-center" id="mentors">
		<div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/akhil_singh.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Akhil Singh</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918302083024">+91-8302083024</a></h5>
                <h5><strong>Hometown: </strong>Sonbhadra, Uttar Pradesh<br><strong>Course: </strong>PhD <strong>Branch: </strong>HSS</h5>
                <a class="icons-sm email-ic" href="mailto:singh.35@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/BMAkhil"><i class="fa fa-facebook"> </i></a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/blissomaniacc/"><i class="fa fa-instagram"> </i></a>
            </div>
			  <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
                <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/anshul_jain.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
                <h4>Anshul Jain</h4>
                <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=919587522695">+91-9587522695</a></h5>
                <h5><strong>Hometown: </strong>Kota, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>CHE</h5>
                <a class="icons-sm email-ic" href="mailto:jain.29@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
                <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/aj_anshul_jain_/"><i class="fa fa-instagram"> </i></a>
            </div>
				<div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
					<div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/satya_pal.jpg" class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
					<h4>Satya Pal</h4>
					<h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=918278687420">+91-8278687420</a></h5>
					<h5><strong>Hometown: </strong>Fatehpur Shekhawati, Rajasthan<br><strong>Course: </strong>PhD <strong>Branch: </strong>Materials</h5>
					<a class="icons-sm email-ic" href="mailto:pal.4@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
					<a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/kukusatya"><i class="fa fa-facebook"> </i></a>
					<a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/palsatya858?igshid=sk0by3mdeqow"><i class="fa fa-instagram"> </i></a>
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
