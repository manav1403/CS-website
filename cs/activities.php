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
            height: auto;
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
    <div class="divider-new">
        <h2 class="h2-responsive" style="text-align: center;">Virtual Talent Show <p style="font-size: 18px;">Freshers' 2021</p>
        </h2>
    </div>
    <div class="flex-center row video-container">
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13Qb84hzrxjnoretBpTdefOzIr3_GXNzD/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Utkarsh Gupta</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://www.youtube.com/embed/jRGakcWA6QQ" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Ritish khichi</p>
            <p class="branch">Bioengineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/14tcp55ynuwVEPYoG8kwBmnQEHkVwV_kw/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Anjali Agarwal</p>
            <p class="branch">Bioengineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1YSiPADbpwdOMfF77dD7xv1tNI-71kzV8/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Navlika Singh</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11QiSEDLDbXOm9CFnV5ikND0gx40bl_16/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">RISHABH JAIN</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1EEZutfLhc1sShpRj_bFZE78-0SmNAaGA/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Adarsh</p>
            <p class="branch">Materials Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10CRP9nmCByTUBgQ8m-EHxFAl331y8Nve/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Mahima Pradhan</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11Xe36248qPskxuEc8JbHNuVE2xw3pEo6/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Ankush Gupta</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11ZPlyQqEAvdQ4HafkwCvEg0BL_7raDMk/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Sanya Srivastava </p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1bmpRouVQwWz-TIop-P5DDSyAwv22sIO7/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Tanmay Kulkarni</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/19wM3mQi8LeEqnVJw8Rwxw11T3omRfSHw/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Tanmay Kulkarni</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/12s1MB3P-GRsctYFRQar71AyJlbFAlAAq/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Divyanshu Pandey</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/110YSjfsrfsaW6a2cpHqGYTCMC7I8aLAN/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Tushar Kumar</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/15W53lY9k_1fWMp8Zy6MVLS1PKugmZ2kF/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Oshal Gajbhiye</p>
            <p class="branch">Materials Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1e-UkBg8BMrfRgbbUNrRRc1EkVMaDZBKP/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Saksham Singh</p>
            <p class="branch">Materials Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1vOJPBfYoHTSa68maWrIK9LFOeoXbJwmE/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Anshu jangir</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1jeEDnaYYKIg4hPZEZvTLZZJLwPH4fyoK/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Dev Goel</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-6wKE28JmJ4LVV2WMpdRITe9xA85R0Co/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Hrishi Raj Singh</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13xs2JVFaKgnzRJ1nBgvObqekD8enJ2lv/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Narahari Sai Divya</p>
            <p class="branch">Civil and Infrastructure Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11CiASKZPtltUxFN7rQBypmYk9iHMKEK6/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Prathmesh gaonkar</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13HxYnZYIEV5Zwzd4ghgS-bTOvNNfYYi4/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Khushi Parikh</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13hpEGjQaK7sPw3d4IJ1g5h3iOMDHKiZN/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Tanisha Jain</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1Nf9iLXXl2Jd5IlHZ-uDccqwv6o0BhvM2/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Somil maheshwari</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1441npTiq4EEAiyhc1jUqgUkvmmxambPx/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Narahari Sai Divya</p>
            <p class="branch">Civil and Infrastructure Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/115oeCbUOwutKIxJnobv7ZF5c-owK-4Vd/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Joel Thomas</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1143F40bjv5mmweGsnMuHBtY-rdCruf_S/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Joel Thomas</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-nlikMS8YKukcXJwaee5yetbdiqBY4J5/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Dwimalu Boro</p>
            <p class="branch">Chemical Engineering</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1zmU4HcC1blsfF3e9oOh4LXFiGVPJlWNs/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Noopur Nishikant Zambare</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11xxKS2eYrFTW59IM_rMZWD2t3-eYpQHP/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Narendra</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/153PG_IoVmqoZCCZGbHohzoN_euIRivaQ/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Goswami Pranav</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/16pUIMieERLnzC32VgU5Ff0hlqN-bQ4-m/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Priyanshi Goyal</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/12dI53akO_KnMPgVNJW3gGfnAJkXlIhJA/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Rahul Barodia</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13HqBLsaWml7xyN2YIhCdZmzOogkjT-n5/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Atul Khobragade </p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10kmtC4r9TdSu7yTuFxkWurVq5xxJEfLC/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Deepanshu</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/12SGRR2jFPvRNhey83i6ed519Ri45dhrP/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Haifa</p>
            <p class="branch">Bioengineering</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11ykiJc79dEL71gsQ77gMPpjdgtoH9jDk/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Sakshi Jain</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1081cJ5xhhQ7yXtmaXJasV2DHzP7Oyb7W/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Ankit Prakash</p>
            <p class="branch">Civil and Infrastructure Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1A_PHiUIEHNcoicgtszXB-ejUCrjMrh3s/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Susim Mukul Roy</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/12-Olm3TtGC3HdFLIWTrCpE3iygfdUYor/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Sawan Patel</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13HpHYw6uyiHHShvaQT2e14qFWS1UDixz/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Shreya Shukla</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/15VYg-G04-0QffjVlVyP2s2AsBI3L3PpN/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Goswami Pranav</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/17oaRUJiSS_drT3hlkZ5PITRyLGWnP8X6/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Yash Ruhatiya </p>
            <p class="branch">Bioengineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-1Qs4biyOKRWRdisFlh7cG_bz_qSRvFM/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Patel kalash rohitbhai</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/12ThQyxOLXuWqjao6piDVyjEMWQvvGh6t/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Dhruv Agarwal</p>
            <p class="branch">Materials Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-hCwQ_ckIV8N934OiQDvUZbq537urXAn/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Dwimalu Boro</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/15VoIh9CN_as7DVeWCofZs-LMFQ6KLpbm/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Shatakshi</p>
            <p class="branch">Electrical Engineering</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1xrh6HmrnDgd58YNnqqPN_1DmRYa5ONQo/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Poonam Suthar </p>
            <p class="branch">Civil and Infrastructure Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10hzl6BCEzHRJc7hgGNvVCZVJgThqKESl/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">NITIN SANKHALA</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1UktMDRAtGgPb_o97MLt_WSwPGJuRT92J/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Soumil Sinha</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1cAjhRSk2JADkfmaSBNuyDd9NDDiqQ1fs/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">SAMYAK BAFNA</p>
            <p class="branch">Materials Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10b9Ax0n9KZM3Wm2buOdLzz7OyYftprF3/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">ATHARVA PANDEY</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1459dyKa_2WpL-R68c7Gpgz4kEizNr0mo/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Rajesh kumar mina</p>
            <p class="branch">Electrical Engineering</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13f_VCoGfQnXMxgshcPy27M33Qfpw-gos/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Divyanshu Pandey</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-w29z6ufpBkS5Mj_Cd16OPHAfl8C03T0/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Aryan Tiwari</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10hd9yWE_XWNzTiro-PE1jEeIbHU30Eyz/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Bhavya soni</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1YbtdlDGUuFoGl2b1o-ElH9algxxrtDs0/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Niharika manhar</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10yL1tkLicIS8fPHX2N1oyfVW33lWRxJv/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Vedasamhitha challapalli </p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://www.youtube.com/embed/ccmJ4cXoD6I" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Abhinav Singh Tawar</p>
            <p class="branch">Civil and Infrastructure Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/15SOm4J7sB-i6zODPjW7JAlTEvJzUyF5C/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">RIHANSH MEENA</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/15Lee1v4bzL3yHI2xYDoaxKwJCKNrWabn/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">RIHANSH MEENA</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1dTsHgQdvyp8niRbaX7DQng6m1EgQzABl/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Abhishek Rajora</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13CU4RGOdGTa0i2-nHOCXZyyerhRs6GFj/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Suyash Surana </p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-SSbt_-53DaTT4gq9WMkR20MbkCaLP57/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Vidhi Gupta</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/15Un5whcxwUCXzJqt-2ed22JH4HheKSRa/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Aditya Narayan</p>
            <p class="branch">Bioengineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1BDXnB4EalF6BxdxD40CjfPmEXlAuSA4V/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Tejas Ingale</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13n8-UpeKOjIvXcweyn2tWdrI0jhRomhz/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Kunj Golwala</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10WvKb9jh4ILaeRCJRxo9WA7Ig18SnPK6/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Parth Yaduvanshi</p>
            <p class="branch">Civil and Infrastructure Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/164VfDdaPQBQ5M94Klaf0dbRsanytoe1c/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Jaimin Gajjar</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/169GFPVYlN0_1Wj0AhJ5iBKg-5TjcfMXO/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Jaimin Gajjar</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1r7aJ4GPYzUjuHpdTmHllvP_Z2rilmfG-/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Bhavneet Kaur</p>
            <p class="branch">Chemical Engineering</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://www.youtube.com/embed/WCoTUa4zq_s" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Paras</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/10g4xsNIwdzfszEMUQKV5r3vRTEtR5Njp/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Ayush abad</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1B30HTQoWTGUTZ6GiseawQ7bWCxMKdHvj/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">VIKASH YADAV</p>
            <p class="branch">Mechanical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1HavDMHTuBZMiZyqRXqFXFUOzzTUbDhbY/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Saurabh Modi</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1ekCi4xNlWiIlcDDZZSlh_-0_84mh2k60/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Nitin Prasad</p>
            <p class="branch">Chemical Engineering</p>
        </div>
        <!-- <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-mjkKavs9JOWOs74FZpGPRaPjzAnwtDv/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Sonam sahu</p>
            <p class="branch">Electrical Engineering</p>
        </div> -->
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1qCc7ixriSdgl6GZfJpvUBBYnzRrTWxlF/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Anirudh Srikanth</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11odE1LpOuJGV3xJm3hgVAczx32vMTEcP/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Ghelani Shubham Bhaveshbhai</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11zh5_wuiWcMUTE7yfxIXYgnssGVTr3Ms/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Karan Singh Kushwah</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/11MOdp0WA3rCLOB80rcErxR_MNKJC83qA/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Soumik Roy</p>
            <p class="branch">Artificial Intellingence and Data Science</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1X15jxgmokpvKmGd9No2x3ZrTnKvIQgiH/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Arjun Singh</p>
            <p class="branch">Electrical Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/13_D82i1EcQy2PmEyDtU-8aDh6aV8rvcu/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Atul khobragade </p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/12xeLNTdylDObFrViVh4aAlGCGItHjhnH/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Panyala Sainath Reddy</p>
            <p class="branch">Computer Science & Engineering</p>
        </div>
        <div class="col-lg-4 col-md-12 video-entry">
            <iframe src="https://drive.google.com/file/d/1-WMtnMeraiokWlFX_ZK3YXjxSBzt5KUi/preview" width="440" height="280" frameborder="0" loading="lazy"> </iframe>
            <p class="name">Yash Anand</p>
            <p class="branch">Bioengineering</p>
        </div>

    </div>
    <!--/Container to center the content-->

    <!--Footer-->
    <?php
    include 'footer.html';
    ?>
</body>