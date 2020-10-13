<?php
    include 'head.html';
?>
<head>
    <title>CS team - UG</title>
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
    <div class="divider-new">
        <h2 class="h2-responsive">Student Heads</h2>
    </div>
    <div class="row text-center" id = "head">

        <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/lakshya.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Lakshya Garg</h4>
            <h5><strong>Hometown: </strong>Chandigarh<br><strong>Branch: </strong>CSE</h5>
            <p>
                I am a daydreamer and a night thinker.<br>
                Keep Calm and Code On.
            </p>
            <a class="icons-sm email-ic" href="mailto:garg.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/lakgarg"><i class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/lakgarg/"><i class="fa fa-instagram"> </i></a>
            <a class="icons-sm li-ic" target="_blank" href="https://www.linkedin.com/in/garglakshya18/"><i class="fa fa-linkedin"></i></a>
            <a class="icons-sm git-ic" target="_blank" href="https://github.com/garglakshya18"><i class="fa fa-github"></i></a>

        </div>

        <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">

            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/manvendra.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Manvendra Singh Kushwah</h4>
            <h5><strong>Hometown: </strong>Morena, Madhya Pradesh<br><strong>Branch: </strong>CSE</h5>
            <p>A silent person who loves to code his heart out.</p>
            <a class="icons-sm email-ic" href="mailto:kushwah.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/profile.php?id=100012295539106"><i class="fa fa-facebook"> </i></a>
            <a class="icons-sm tw-ic" target="_blank" href="https://twitter.com/Manvendrakus121"><i class="fa fa-twitter"></i></a>

        </div>
    </div>


    <div class="divider-new">
        <h2 class="h2-responsive">Student Assistant Heads</h2>
    </div>
    <div class="row text-center" id = "assistant-head">
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/ashish_chavan.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Ashish Chavan</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918766443560">+91-8766443560</a></h5>
            <h5><strong>Hometown: </strong>Karad,Maharashtra <br><strong>Branch: </strong>ME</h5>
            <p>Just keep calm and trust me</p>
            <a class="icons-sm email-ic" href="mailto:chavan.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/ashish.chavan.988373?ref=bookmarks"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/ashish_chavan_ac27/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/arpit_kumar.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Arpit Kumar</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918788082907">+91-8788082907</a></h5>
            <h5><strong>Hometown: </strong>Muzaffarnagar, Uttar Pradesh<br><strong>Branch: </strong>ME</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:kumar.67@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/profile.php?id=100006749078542"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/arpit_kumar0508?igshid=1wxlgi63jpcog"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/pulkit_joshi.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Pulkit Joshi</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919694083339">+91-9694083339</a></h5>
            <h5><strong>Hometown: </strong>Haldwani,Uttrakhand<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:joshi.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/woods.saw"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/_pulkit_joshi_/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/ansh_shrivastava.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Ansh Shrivastava</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919754122430">+91-9754122430</a></h5>
            <h5><strong>Hometown: </strong>Gwalior, Madhya Pradesh<br><strong>Branch: </strong>CSE</h5>
            <p>Another Homo sapien who loves the concept of self-love and have an eye for art. </p>
            <a class="icons-sm email-ic" href="mailto:shrivastava.4@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/shivam_goel.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Shivam Goel</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918504912561">+91-8504912561</a></h5>
            <h5><strong>Hometown: </strong>Khurja, Uttar Pradesh<br><strong>Branch: </strong>ME</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:goel.5@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/anupama_patel.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Anupama Patel</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918769263368">+91-8769263368</a></h5>
            <h5><strong>Hometown: </strong>Dewas, Madhya Pradesh<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:patel.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/anshu_priya.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Anshu Priya</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917635003713">+91-7635003713</a></h5>
            <h5><strong>Hometown: </strong>Patna, Bihar<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:priya.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/rishav_jain.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Rishav Jain</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918521359301">+91-8521359301</a></h5>
            <h5><strong>Hometown: </strong>Khunti, Ranchi, Jharkhand<br><strong>Branch: </strong>CSE</h5>
            <p>A person who is always happy to help.</p>
            <a class="icons-sm email-ic" href="mailto:jain.11@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/rishav.jain.5682"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/rishhavjain/"><i class="fa fa-instagram">
                </i></a>
        </div>
    </div>
    
    <div class="divider-new">
        <h2 class="h2-responsive">Student Guides</h2>
    </div>
    <!--First row-->
    <div class="row text-center" id="student-guide">
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/venkatesh_kotwade.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Venkatesh Kotwade</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918275458531">+91-8275458531</a></h5>
            <h5><strong>Hometown: </strong>Udgir , Maharashtra<br><strong>Branch: </strong>CSE</h5>
            <p>Introvert. Into Algorithms. Shutterbug. Sia. Witty. Confused.</p>
            <a class="icons-sm email-ic" href="mailto:venkateshkotwade@gmail.com"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/venkatesh.kotwade.5"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/____error_404___/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/mihir_sakaria.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Mihir Sakaria</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917023450264">+91-7023450264</a></h5>
            <h5><strong>Hometown: </strong>Surat, Gujarat<br><strong>Branch: </strong>CSE</h5>
            <p>Tall guy from gujarat, ever ready for adventure,fun and food.</p>
            <a class="icons-sm email-ic" href="mailto:sakaria.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/mihir.sakaria.9?ref=bookmarks"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/me.here_4/"><i class="fa fa-instagram">
                </i></a>
            <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/mihir-sakaria-87041b185/"><i
                    class="fa fa-linkedin"> </i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/nidhi_sharma.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Nidhi Sharma</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=916395177472">+91-6395177472</a></h5>
            <h5><strong>Hometown: </strong>Jewar, Uttar Pradesh<br><strong>Branch: </strong>BB</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:sharma.28@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/profile.php?id=100028790739758"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/nidhisharma8261"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/kshitij_thakur.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Kshitij Thakur</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918450929318">+91-8450929318</a></h5>
            <h5><strong>Hometown: </strong>Navi Mumbai, Maharashtra<br><strong>Branch: </strong>BB</h5>
            <p>Music and Football enthusiast</p>
            <a class="icons-sm email-ic" href="mailto:thakur.3@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm ins-ic" target="_blank" href="www.instagram.com/kshitij_thakur_soc"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/yash_chaubey.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Yash Chaubey</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919773521055">+91-9773521055</a></h5>
            <h5><strong>Hometown: </strong>Mumbai, Maharashtra<br><strong>Branch: </strong>EE</h5>
            <p>Enthusiastic, Cheerful, Compassionate</p>
            <a class="icons-sm email-ic" href="mailto:chaubey.3@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/profile.php?ref=bookmarks"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/yash._.chaubey?igshid=1stmmwpcfj292"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/bhushan_mali.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Bhushan Mali</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919049438770">+91-9049438770</a></h5>
            <h5><strong>Hometown: </strong>Navapur, Maharashtra<br><strong>Branch: </strong>EE</h5>
            <p>Chesslover who always wants new experiences from life.</p>
            <a class="icons-sm email-ic" href="mailto:mali.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/bhushan.mali.927543?ref=bookmarks"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/bhushanmali1706/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/yashvi_ramanuj.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Yashvi Ramanuj</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=916354890328">+91-6354890328</a></h5>
            <h5><strong>Hometown: </strong>Rajkot, Gujarat <br><strong>Branch: </strong>CSE</h5>
            <p>Affable. Prudent. Forthright. </p>
            <a class="icons-sm email-ic" href="mailto:yashvi.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/yashvi.ramanujp"><i class="fa fa-facebook">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/eashan_jindal.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Eashan Jindal</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=916377524778">+91-6377524778</a></h5>
            <h5><strong>Hometown: </strong>Bathinda, Punjab<br><strong>Branch: </strong>CSE</h5>
            <p>Shuttler | Ingenious | Exuberant | Potterhead<br>I am just a simple farm boy looking to connect in the big city,
                Epitome of positivity and breaker of rules.</p>
            <a class="icons-sm email-ic" href="mailto:jindal.3@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/eashan.jindal"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/eashan_jindal/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/aman_gupta.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Aman Gupta</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917060226049">+91-7060226049</a></h5>
            <h5><strong>Hometown: </strong>Mathura, Uttar Pradesh<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm fb-ic" target="_blank"
                href="https://m.facebook.com/profile.php?id=100004402662188&ref=content_filter"><i class="fa fa-facebook">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/arushi_midha.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Arushi Midha</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=916377916934">+91-6377916934</a></h5>
            <h5><strong>Hometown: </strong>Chennai, Tamil Nadu<br><strong>Branch: </strong>BB</h5>
            <p>Guardian of my amour propre. Loves to pen down thoughts. Inquisitive and a calm rebel. A proud part of kpop
                fandoms. </p>
            <a class="icons-sm email-ic" href="mailto:midha.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/aru___she/"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/akash_jain.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Akash Jain</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918053017295">+91-8053017295</a></h5>
            <h5><strong>Hometown: </strong>Rohtak, Haryana<br><strong>Branch: </strong>EE</h5>
            <p>Enthusiastic,Music Lover,Gamer</p>
            <a class="icons-sm email-ic" href="mailto:jain.20@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/akashjain887/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/nishant_sarraff.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Nishant Sarraff</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919813290287">+91-9813290287</a></h5>
            <h5><strong>Hometown: </strong>Charkhi Dadri, Haryana<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:sarraff.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/nishant.sarraff"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/nishantsarraff"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/kartik_vyas.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Kartik Vyas</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918003486067">+91-8003486067</a></h5>
            <h5><strong>Hometown: </strong>Jaipur, Rajasthan<br><strong>Branch: </strong>CSE</h5>
            <p>I do little things, I experience joy and then I tell stories</p>
            <a class="icons-sm email-ic" href="mailto:vyas.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/kartik.vyas.963"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://instagram.com/vyas_kartik20?igshid=y1s0vxvbfjlq"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/pushpank_katare.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Pushpank Katare </h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919082132266">+91-9082132266</a></h5>
            <h5><strong>Hometown: </strong>Navi Mumbai, Maharashtra<br><strong>Branch: </strong>BB</h5>
            <p>A mischievous and innocent child</p>
            <a class="icons-sm email-ic" href="mailto:katare.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/pushpank.katare"><i class="fa fa-facebook">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/rohan_dassani.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Rohan Dassani</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917285049799">+91-7285049799</a></h5>
            <h5><strong>Hometown: </strong>Surat, Gujarat<br><strong>Branch: </strong>EE</h5>
            <p>Candid | positive | foody |<br> " I'm a connector, I'm decisive,"</p>
            <a class="icons-sm email-ic" href="mailto:dassani.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/rituraj_kulshresth.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Rituraj Kulshresth </h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917004742004">+91-7004742004</a></h5>
            <h5><strong>Hometown: </strong>Ranchi, Jharkhand<br><strong>Branch: </strong>CSE</h5>
            <p>Chocoholic, Cyclist for fun, Love adventure </p>
            <a class="icons-sm email-ic" href="mailto:kulshresth.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/rituraj.kulshresth"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/rituraj_kulshresth/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/pratik_goyal.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Pratik Goyal</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919521411661">+91-9521411661</a></h5>
            <h5><strong>Hometown: </strong>Patna, Bihar<br><strong>Branch: </strong>BB</h5>
            <p>A Biological Puppet</p>
            <a class="icons-sm email-ic" href="mailto:goyal.9@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/pratik.gl"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/pratik_gl/"><i class="fa fa-instagram">
                </i></a>
            <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/pratikgl"><i class="fa fa-linkedin">
                </i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/vishnu_prajapati.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Vishnu Prajapati</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918383880488">+91-8383880488</a></h5>
            <h5><strong>Hometown: </strong>Gurgaon, Haryana<br><strong>Branch: </strong>ME</h5>
            <p>One life two words- passion and compassion</p>
            <a class="icons-sm email-ic" href="mailto:prajapati.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/Vishnushivam12"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/vishnu1o1/"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/nitish_jain.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Nitish Jain</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919571080180">+91-9571080180</a></h5>
            <h5><strong>Hometown: </strong>Agra, Uttar Pradesh<br><strong>Branch: </strong>ME</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:jain.25@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/nitish.jain.549221"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/nitissh_jain/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/jash_patel.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Jash Patel</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919913212919">+91-9913212919</a></h5>
            <h5><strong>Hometown: </strong>Surat, Gujarat<br><strong>Branch: </strong>CSE</h5>
            <p>Meeting people only to make friends</p>
            <a class="icons-sm email-ic" href="mailto:patel.5@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/jash.kanani.5"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/kanani.jash/"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/rajat_sharma.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Rajat Sharma</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917906037868">+91-7906037868</a></h5>
            <h5><strong>Hometown: </strong>Haridwar, Uttarakhand<br><strong>Branch: </strong>CSE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:sharma.30@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/aru.sharma.33234"><i
                    class="fa fa-facebook"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/vinit_oswal.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Vinit Oswal</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918308456997">+91-8308456997</a></h5>
            <h5><strong>Hometown: </strong>Pune, Maharashtra<br><strong>Branch: </strong>ME</h5>
            <p>Simple and patient</p>
            <a class="icons-sm email-ic" href="mailto:oswal.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/vineet.oswal.77"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/vineet_oswal1697/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/meet_patel.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Meet Patel</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=916354668412">+91-6354668412</a></h5>
            <h5><strong>Hometown: </strong>Surat, Gujarat <br><strong>Branch: </strong>ME</h5>
            <p>Love to stay calm and happy</p>
            <a class="icons-sm email-ic" href="mailto:patel.8@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/profile.php?id=100008996731274"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/m.e.e.t_p.a.t.e.l/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/v_manikanta.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>V Manikanta</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919381579676">+91-9381579676</a></h5>
            <h5><strong>Hometown: </strong>Vijayawada, Andhra Pradesh<br><strong>Branch: </strong>ME</h5>
            <p>Less speech and more of action</p>
            <a class="icons-sm email-ic" href="mailto:sai.1@iitj.ac.in "><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/manikanta.1.3363"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/manik__24/"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/kunal_tawatia.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Kunal Tawatia</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919953511385">+91-9953511385</a></h5>
            <h5><strong>Hometown: </strong>Ghaziabad, Uttar Pradesh<br><strong>Branch: </strong>CSE</h5>
            <p>Don't hold back if you need help :)</p>
            <a class="icons-sm email-ic" href="mailto:tawatia.1@iitj.ac.jn"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/kunal.tawatia"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/kunal.tawatia"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/g_annapurna.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>G Annapurna</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919381563334">+91-9381563334</a></h5>
            <h5><strong>Hometown: </strong>Hyderabad, Telangana<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:gotta.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/annapurna.gotta.73"><i
                    class="fa fa-facebook"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/divya_singh.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Divya Singh</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=917007632378">+91-7007632378</a></h5>
            <h5><strong>Hometown: </strong>Kanpur, Uttar Pradesh<br><strong>Branch: </strong>EE</h5>
            <p>Brown-eyed brunette who likes to believe in the power of belief. A bibliophile along with an ardent K-Pop lover.
            </p>
            <a class="icons-sm email-ic" href="mailto:singh.37@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/ds.0111"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/the_diva_007/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/utpal_gupta.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Utpal Gupta</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919516182735">+91-9516182735</a></h5>
            <h5><strong>Hometown: </strong>Chhatarpur, Madhya Pradesh<br><strong>Branch: </strong>CSE</h5>
            <p>A sarcastic banterer,A timid extrovert,fun loving person who wanna go places. </p>
            <a class="icons-sm email-ic" href="mailto:gupta.27@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/m4n_mad_dis4ster/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/masoom_raj.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Masoom Raj</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919708313140">+91-9708313140</a></h5>
            <h5><strong>Hometown: </strong>Gaya, Bihar<br><strong>Branch: </strong>CSE</h5>
            <p>Positive, Jolly person</p>
            <a class="icons-sm email-ic" href="mailto:raj.8@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/profile.php?id=100008575125905"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/maasoomraj"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/manan_shah.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Manan Shah</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919898150262">+91-9898150262</a></h5>
            <h5><strong>Hometown: </strong>Surat, Gujarat<br><strong>Branch: </strong>CSE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:shah.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/manan.shah.3323457"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/mananshah2709"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/harsh_anand.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Harsh Anand</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918901031405">+91-8901031405</a></h5>
            <h5><strong>Hometown: </strong>Kurukshetra, Haryana<br><strong>Branch: </strong>CSE</h5>
            <p>Part time professional cuss word sayer</p>
            <a class="icons-sm email-ic" href="mailto:anand.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/harsh.not.haarsh"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/harsh_not_haarsh"><i
                    class="fa fa-instagram"> </i></a>
            <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/harsh-anand-40430716b"><i
                    class="fa fa-linkedin"> </i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/rishabh_shukla.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Rishabh Shukla</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919158460506">+91-9158460506</a></h5>
            <h5><strong>Hometown: </strong>Mumbai, Maharashtra<br><strong>Branch: </strong>ME</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:shukla.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/ani_agrawal.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Ani Agrawal</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919413794018">+91-9413794018</a></h5>
            <h5><strong>Hometown: </strong>Bikaner, Rajasthan<br><strong>Branch: </strong>ME</h5>
            <p>Not perfect but a limited edition. observer.explorer.ecstatic.enthusiastic</p>
            <a class="icons-sm email-ic" href="mailto:agrawal.10@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/ani.goyal.9883?ref=bookmarks"><i
                    class="fa fa-facebook"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/dhruv_patel.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Dhruv Patel</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919408206000">+91-9408206000</a></h5>
            <h5><strong>Hometown: </strong>Vadodara, Gujarat<br><strong>Branch: </strong>CSE</h5>
            <p>Just talk to me to know about me</p>
            <a class="icons-sm email-ic" href="mailto:patel.4@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/a.musing_mind?r=nametag"><i
                    class="fa fa-instagram"> </i></a>
            <a class="icons-sm git-ic" target="_blank" href="https://www.linkedin.com/in/dhruv-patel-1439b117b"><i
                    class="fa fa-linkedin"> </i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/sahil_gaur.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Sahil Gaur</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=916377921235">+91-6377921235</a></h5>
            <h5><strong>Hometown: </strong>Gwalior, Madhya Pradesh<br><strong>Branch: </strong>ME</h5>
            <p>Sketchy and Sarcastic. Funnily enough .. I can 'sketch' too.</p>
            <a class="icons-sm email-ic" href="mailto:gaur.6@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/sahil.gaur.313371"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/sahil_raj01/"><i class="fa fa-instagram">
                </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/ishit_patel.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Ishit Patel</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919727769795">+91-9727769795</a></h5>
            <h5><strong>Hometown: </strong>Surat, Gujarat<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:patel.3@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/ishit.patel.566"><i class="fa fa-facebook">
                </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/ishit__patel/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/harit_gedia.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Harit Gedia</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918155982422">+91-8155982422</a></h5>
            <h5><strong>Hometown: </strong>Rajkot, Gujarat<br><strong>Branch: </strong>EE</h5>
            <p></p>
            <a class="icons-sm email-ic" href="mailto:gedia.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/aryavardhan_singh_shaktawat.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Aryavardhan Singh Shaktawat</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=919950634068">+91-9950634068</a></h5>
            <h5><strong>Hometown: </strong>Bhilwara, Rajasthan<br><strong>Branch: </strong>EE</h5>
            <p>Cricket | Music | Sleep | Calm | Travel</p>
            <a class="icons-sm email-ic" href="mailto:shaktawat.1@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://www.facebook.com/aryavardhan.shaktawat.9"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/aryavardhan.007?r=nametag"><i
                    class="fa fa-instagram"> </i></a>
        </div>
        <div class="col-lg-4 col-md-6 mb-r animate-profile invisible">
            <div class="avatar"><img src="images/sqloader.gif" data-src="images/avatar/archit_bansal.jpg"
                    class="lazyload rounded-circle" onerror="this.onerror=null;this.src='images/avatar/missing.png'"></div>
            <h4>Archit Bansal</h4>
            <h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a
                    href="https://api.whatsapp.com/send?phone=918295427592">+91-8295427592</a></h5>
            <h5><strong>Hometown: </strong>Panipat, Haryana<br><strong>Branch: </strong>ME</h5>
            <p>Travel Enthusiastic||Anime Lover||Like to read||<br>Food & sleep.... Believe in my friends and family</p>
            <a class="icons-sm email-ic" href="mailto:bansal.2@iitj.ac.in"><i class="fa fa-envelope-o"></i> </a>
            <a class="icons-sm fb-ic" target="_blank" href="https://m.facebook.com/archit.bansal.127?ref=bookmarks"><i
                    class="fa fa-facebook"> </i></a>
            <a class="icons-sm ins-ic" target="_blank" href="https://www.instagram.com/archit_bansal_02/"><i
                    class="fa fa-instagram"> </i></a>
        </div>
    </div>
    <!--/First row-->

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
