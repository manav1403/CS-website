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
        <?php
        $content = json_decode(file_get_contents('./cs_team_2020.json'), true);
        $start = 0;
        $end = 1;

        $role = '(H).jpg';
        
        for ($i = $start; $i < $end; $i++) {
            $entry = $content[$i];

            echo '<div class="col-lg-6 col-md-6 mb-r animate-profile invisible" style="margin: auto">';
            echo '<div class="avatar">';
            echo '<img src="images/sqloader.gif" data-src="' . $entry["image"].$role . '" class="lazyload rounded-circle">';
            echo '</div>';
            echo '<h4>' . $entry["name"] . '</h4>';
            if($entry["whatsapp"] !== ""){
                echo '<h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=' . $entry["whatsapp"] . '">+91-' . $entry["whatsapp"] . '</a></h5>';
            }
            echo '<h5><strong>Hometown: </strong>' . $entry["place"] . '<br><strong>Branch: </strong>' . $entry["branch"] . '</h5>';
            if($entry["email"] !== ""){
                echo '<a class="icons-sm email-ic" href="mailto:' . $entry["email"] . '"><i class="fa fa-envelope-o"></i> </a>';
            }
            if($entry["fb"] !== ""){
                echo '<a class="icons-sm fb-ic" target="_blank" href="' . $entry["fb"] . '"><i class="fa fa-facebook"> </i></a>';
            }
            if($entry["instagram"] !== ""){
                echo '<a class="icons-sm ins-ic" target="_blank" href="' . $entry["instagram"] . '"><i class="fa fa-instagram"> </i></a>';
            }
            if($entry["linkedin"] !== ""){
                echo '<a class="icons-sm li-ic" target="_blank" href="' . $entry["linkedin"] . '"><i class="fa fa-linkedin"></i></a>';
            }
            echo '</div>';
        }
        ?>
    </div>


    <div class="divider-new">
        <h2 class="h2-responsive">Student Assistant Heads</h2>
    </div>
    <div class="row text-center" id = "assistant-head">
    <?php
        $content = json_decode(file_get_contents('./cs_team_2020.json'), true);
        $start = 1;
        $end = 11;

        $role = '(AH).jpg';
        
        for ($i = $start; $i < $end; $i++) {
            $entry = $content[$i];

            echo '<div class="col-lg-4 col-md-4 mb-r animate-profile invisible" style="margin: auto">';
            echo '<div class="avatar">';
            echo '<img src="images/sqloader.gif" data-src="' . $entry["image"].$role . '" class="lazyload rounded-circle">';
            echo '</div>';
            echo '<h4>' . $entry["name"] . '</h4>';
            if($entry["whatsapp"] !== ""){
                echo '<h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=' . $entry["whatsapp"] . '">+91-' . $entry["whatsapp"] . '</a></h5>';
            }
            echo '<h5><strong>Hometown: </strong>' . $entry["place"] . '<br><strong>Branch: </strong>' . $entry["branch"] . '</h5>';
            if($entry["email"] !== ""){
                echo '<a class="icons-sm email-ic" href="mailto:' . $entry["email"] . '"><i class="fa fa-envelope-o"></i> </a>';
            }
            if($entry["fb"] !== ""){
                echo '<a class="icons-sm fb-ic" target="_blank" href="' . $entry["fb"] . '"><i class="fa fa-facebook"> </i></a>';
            }
            if($entry["instagram"] !== ""){
                echo '<a class="icons-sm ins-ic" target="_blank" href="' . $entry["instagram"] . '"><i class="fa fa-instagram"> </i></a>';
            }
            if($entry["linkedin"] !== ""){
                echo '<a class="icons-sm li-ic" target="_blank" href="' . $entry["linkedin"] . '"><i class="fa fa-linkedin"></i></a>';
            }
            echo '</div>';
        }
        ?>
    </div>
    
    <div class="divider-new">
        <h2 class="h2-responsive">Student Guides</h2>
    </div>
    <!--First row-->
    <div class="row text-center" id="student-guide">
    <?php
        $content = json_decode(file_get_contents('./cs_team_2020.json'), true);
        $start = 11;
        $end = 56;

        $role = '(SG).jpg';
        
        for ($i = $start; $i < $end; $i++) {
            $entry = $content[$i];

            echo '<div class="col-lg-4 col-md-4 mb-r animate-profile invisible" style="margin: auto">';
            echo '<div class="avatar">';
            echo '<img src="images/sqloader.gif" data-src="' . $entry["image"].$role . '" class="lazyload rounded-circle">';
            echo '</div>';
            echo '<h4>' . $entry["name"] . '</h4>';
            if($entry["whatsapp"] !== ""){
                echo '<h5><i class="icons-sm-i fa fa-whatsapp green-text"></i><a href="https://api.whatsapp.com/send?phone=' . $entry["whatsapp"] . '">+91-' . $entry["whatsapp"] . '</a></h5>';
            }
            echo '<h5><strong>Hometown: </strong>' . $entry["place"] . '<br><strong>Branch: </strong>' . $entry["branch"] . '</h5>';
            if($entry["email"] !== ""){
                echo '<a class="icons-sm email-ic" href="mailto:' . $entry["email"] . '"><i class="fa fa-envelope-o"></i> </a>';
            }
            if($entry["fb"] !== ""){
                echo '<a class="icons-sm fb-ic" target="_blank" href="' . $entry["fb"] . '"><i class="fa fa-facebook"> </i></a>';
            }
            if($entry["instagram"] !== ""){
                echo '<a class="icons-sm ins-ic" target="_blank" href="' . $entry["instagram"] . '"><i class="fa fa-instagram"> </i></a>';
            }
            if($entry["linkedin"] !== ""){
                echo '<a class="icons-sm li-ic" target="_blank" href="' . $entry["linkedin"] . '"><i class="fa fa-linkedin"></i></a>';
            }
            echo '</div>';
        }
    ?>

    
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
