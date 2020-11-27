<?php
include 'head.html';
?>

<head>
    <title>Activities - Student Wellbeing Committee</title>
    <style>
        .navbar-margin {
            margin-top: 6rem;
        }

        .video-container {
            /* background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('/images/gback-2160.jpg'); */
            margin-bottom: 440px;
        }

        .video-entry {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-bottom: 36px;
        }

        .video-entry>.name {
            font-family: 'Roboto';
            margin-top: 20px;
            font-weight: bold;
        }

        .video-entry>.branch {
            font-family: 'Roboto';
            font-size: 12px;
        }

        .video-entry>iframe {
            border-radius: 16px;
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <?php
    include 'navbar.html';
    ?>
    <!--Container to center the content-->

    <div class="navbar-margin"></div>
    <div class="flex-center row video-container">
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13Qb84hzrxjnoretBpTdefOzIr3_GXNzD/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Utkarsh Gupta</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://www.youtube.com/embed/jRGakcWA6QQ" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Ritish khichi</p>
            <p class="branch">Bioengineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/14tcp55ynuwVEPYoG8kwBmnQEHkVwV_kw/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Anjali Agarwal</p>
            <p class="branch">Bioengineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1YSiPADbpwdOMfF77dD7xv1tNI-71kzV8/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Navlika Singh</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11QiSEDLDbXOm9CFnV5ikND0gx40bl_16/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Rishabh Jain</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1EEZutfLhc1sShpRj_bFZE78-0SmNAaGA/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Adarsh</p>
            <p class="branch">Materials Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10CRP9nmCByTUBgQ8m-EHxFAl331y8Nve/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Mahima Pradhan</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11Xe36248qPskxuEc8JbHNuVE2xw3pEo6/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Ankush Gupta</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11ZPlyQqEAvdQ4HafkwCvEg0BL_7raDMk/preview" width="440" height="280" frameborder="0">
            </iframe>
            <p class="name">Sanya Srivastava</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
    </div>
    <!--/Container to center the content-->

    <!--Footer-->
    <?php
    include 'footer.html';
    ?>
</body>