<?php
include 'head.html';
?>

<head>
    <title>Activities - Freshers Group Performance</title>
    <style>
        .navbar-margin {
            margin-top: 6rem;
        }

        .video-container {
            height: auto;
            padding: 0.5rem;
            flex-wrap: wrap;
        }

        .video-entry {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-bottom: 36px;
        }

        .video-entry>.iframe-holder {
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 280px;
            border-radius: 16px;
        }

        .video-entry>.iframe-holder>iframe {
            border: 0;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .video-entry>.name {
            font-family: 'Roboto';
            margin-top: 20px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .video-entry>.branch {
            font-family: 'Roboto';
            font-size: 12px;
        }

        .video-entry>iframe {
            border-radius: 16px;
        }

        .page-bar {
            margin: 6px;
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
    <div class="divider-new" style="margin-bottom: 10px;">
        <h2 class="h2-responsive" style="text-align: center;">Freshers Group Performance <p style="font-size: 18px;">Freshers' 2021</p>
        </h2>
    </div>
    <div id="vid-container" class="flex-center video-container">
        <?php
        $content = json_decode(file_get_contents('./freshers_grp_activity.json'), true);
        $total = count($content);

        parse_str($_SERVER['QUERY_STRING'], $query);
        $page = $query["page"];
        if ($page == NULL) $page = 1;
        $page = (int)$page;
        if ($page == 1) $prev_disabled = 'disabled';
        if ($page == 7) $next_disabled = 'disabled';

        $page_navigation = '<nav aria-label="navigation" class="col-lg-12 page-bar">
                <ul class="pagination justify-content-center">
                    <li class="page-item ' . $prev_disabled . '"><a class="page-link" href="?page=' . ($page - 1) . '">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a></li>
                    <li class="page-item"><a class="page-link">' . $page . '</a></li>
                    <li class="page-item ' . $next_disabled . '"><a class="page-link" href="?page=' . ($page + 1) . '">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a></li>
                </ul>
            </nav>';

        echo $page_navigation;

        $page--;
        $entry_per_page = 6;
        $start = $page * $entry_per_page;
        if ($start < 0) $start = $total;
        for ($i = $start; $i < min($total, $start + $entry_per_page); $i++) {
            $entry = $content[$i];
            echo '<div class="col-lg-4 col-md-12 video-entry">';
            echo '<div class="iframe-holder">';
            echo '<iframe src="' . $entry["link"] . '" width="440" height="280" frameborder="0" loading="lazy" allowfullscreen> </iframe>';
            echo '</div>';
            echo '<p class="name">' . $entry["name"] . '</p>';
            echo '<p class="branch">' . $entry["category"] . '</p>';
            echo '</div>';
        }

        echo $page_navigation;
        ?>
    </div>

    <!--Footer-->
    <?php
    include 'footer.html';
    ?>
</body\