<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->


    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
    $(document).ready(function() {
        // Allowed extensions
        const allowed = [
            '.jpg', '.jpeg', '.png', '.webp', '.gif', '.pdf', '.docx', '.heic', '.heif'
        ];

        // Convert to accept string for HTML input
        const acceptStr = allowed.join(',');

        // Apply to all file inputs on page load
        $('input[type="file"]').attr('accept', acceptStr);

        // Optional: prevent pasting/dragging of disallowed files
        $(document).on('change', 'input[type="file"]', function() {
            const files = this.files;
            if (!files) return;
            for (let i = 0; i < files.length; i++) {
                const f = files[i];
                const ext = '.' + f.name.split('.').pop().toLowerCase();
                if (allowed.indexOf(ext) === -1) {
                    alert('Only image/PDF/DOCX files are allowed!');
                    $(this).val(''); // reset input
                    return;
                }
            }
        });
    });
    </script>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap");

    body,
    a,
    table,
    tr,
    td,
    th,
    span,
    div,
    ul,
    li,
    button,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "IBM Plex Sans", sans-serif;
    }


    a {
        color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
        text-decoration: none !important;
    }

    .content-wrapper {
        min-height: 100vh;
    }
    </style>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">
                        <img src="./assets/img/logo.png" alt="" width="80px;" height="50px">
                    </span>
                    <span class="brand-mini"> <img src="./assets/img/logo.png" alt="" width="90px;"
                            height="50px"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/favicon.png"
                                alt="Stylized green letter A with a green leaf overlay, representing an eco-friendly or nature-focused organization. The background is white and there is no additional text." />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active mt-5" href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="javascript:(0);"><img width="30" height="30"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/old-shop.png" /></i>
                            <span class="nav-label"> &nbsp;&nbsp;Banner</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_banner.php">Add New Banner</a>
                            </li>
                            <li>
                                <a href="banner_list.php">Banner List</a>
                            </li>
                        </ul>
                    </li>

                    <li class="mt-2">
                        <a href="javascript:(0);"><img width="30" height="30"
                                src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/FFFFFF/external-Blog-online-streaming-smashingstocks-mixed-smashing-stocks-2.png" /></i>
                            <span class="nav-label"> &nbsp;&nbsp;Insights</span><i
                                class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_blog.php">Add New Insights</a>
                            </li>
                            <li>
                                <a href="blog_list.php">Insights List</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="" href="querylist.php"><img width="25" height="25"
                                src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                alt="question-shield" />
                            <span class="nav-label"> &nbsp;&nbsp;Query List</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>