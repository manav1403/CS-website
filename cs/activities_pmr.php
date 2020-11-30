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
        document.getElementById('nav-8').classList.add('active');
        document.getElementById('nav-8-1').classList.add('active');
        document.getElementById('nav-8').children[0].innerHTML += '<span class="sr-only">(current)</span>';
    </script>
    <div class="top-fixer-2"></div>
    <!--Section: Team v.1-->
    <section class="section team-section container">
    <div id="section-2">
        <div class="container text-center pt-1 mb-1">
            <div class="row flex-center nav-justified">
                <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">Progressive Muscular Relaxation (PMR)</a>
                    </li>
                </ul>
                <div class="tab-content text-justify">
                    <!--pginfo-->
                    <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                        <div class="col-md-12">
                            <div class="mdb-lightbox">
                                <div class="row flex-center">
                                <?php
                                $dir = './images2/pmr_img/';
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
				<div class="row flex-center mt-4">
                    <h3>
                    One step towards Calmness
                    </h3>
                    <div style="text-align: left;">
                    <h5><b>The Technique:</b></h5> 
                        <p>Progressive Muscular Relaxation (PMR)  is a medically proven  technique to sooth and calm your nerves. Well-known   for it’s ease , this user friendly exercise can take care of anxiety and it’s resultant  fall-outs.</p> 
                    <h5 class="mt-2"><b>How does PMR work:</b></h5>     
                        <p>
                        PMR prompts you to enhance the awareness of  your own bodily reactions and changes in tense/ worrying situations. This follows the learning to, first releases muscular tension and finally calming down / soothing of mind.
                        You achieve this by following a series of simple verbal instructions about small muscles, with eyes closed and concentrating on own body.  PMR can be done seating or lying down position and ends with deep relaxation of body. It does not take more than 30 minutes of PMR for you to experience calming effect and mental peace.
                        A good PMR session underlines the principal of Mind-Body Relatedness; which shows that we can unlearn the reflexive habits of tension/ anxiety responses to stressful situations by re-instructing our mind and body. 
                        The relaxed state of mind and body, achieved through PMR learning, leaves it’s positive effect on our health, with better self-control and preparedness to face tensions in life.  
                        The ease of instructions can help you to master it on your own with regular practice. As there are no copyrights for this, you can help your friends and family members too, after mastering yourself.
                        </p>
                    <h5 class="mt-2"><b>Where can it help you:</b></h5>  
                        <p>
                        Most of those situations when you become very tense, worry too much, anticipate bad outcomes such as exam tensions, anxiety/ headaches before viva/ interview, stage fright, speaking in front of class, strangers/ opposite gender and so forth.
                        PMR  is also beneficial in improving  disturbed sleep, poor appetite/ digestion, fatigue, hypertensions , ulcers and other problems having origins with mental anxiety and emotional disturbances.
                        </p>
                    </div>
                    <div class=" mt-3 md-5" style="font-style: italic;font-weight: 700;font-family: 'Roboto';color: cornflowerblue;">
                    Learning Progressive Muscular Relaxation (PMR) is a positive step towards healthy life style. Take the first step…..
                    </div>
                    <div style="height:150px"></div>
                </div>
            </div>

</section>


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
