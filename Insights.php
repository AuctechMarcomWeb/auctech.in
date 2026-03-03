<!DOCTYPE html>
<html lang="en-US">
<!--
    █████╗ ██╗   ██╗ ██████╗████████╗███████╗ ██████╗██╗  ██╗
    ██╔══██╗██║   ██║██╔════╝╚══██╔══╝██╔════╝██╔════╝██║  ██║
    ███████║██║   ██║██║        ██║   █████╗  ██║     ███████║
    ██╔══██║██║   ██║██║        ██║   ██╔══╝  ██║     ██╔══██║
    ██║  ██║╚██████╔╝╚██████╗   ██║   ███████╗╚██████╗██║  ██║
    ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   ╚══════╝ ╚═════╝╚═╝  ╚═╝

        A U C T E C H   M A R K E T I N G   C O M M U N I C A T I O N
        Digital • Technology • Marketing • Software Solutions
-->

<head>

    <meta charset="utf-8" />
    <title>AucTech MarCom: Digital & IT Solutions in Lucknow</title>
    <meta name="description"
        content="AucTech MarCom offers digital marketing, branding, SEO, web development, and IT solutions, specializing in real estate, healthcare and travel software.">
    <meta name="keywords"
        content="digital marketing company, best digital marketing agency in lucknow, website development company in lucknow, IT services for NGOs, Digital Marketing Strategies, Branding and Advertising Services, Social Media Management, SEO and SEM Services, Pay-Per-Click (PPC) Advertising, Reputation Management, Video Marketing Solutions, Event Planning and Promotion, Corporate Event Marketing, Marketing and Communication Services, Real Estate Management Software, Real Estate CRM Software, Lead Management Software, Lead Generation and Conversion Software,Hospital Management Software,Healthcare CRM Solutions, Online Learning Management System, School Administration Software, Travel Management Software, Tour Booking Software, Travel Agency Software Solutions, Online Travel Booking Platform, MLM Software Solutions, Network Marketing Software, MLM Business Software, Learning Management System, E-Learning Software, 3D Walkthrough Services, Professional PPT Design, Business Presentation Design, Visual Presentation Services,Professional Logo Services, Branding and Logo Design, Logo and Brand Development, Business Logo Design, Responsive Website Design, Custom Website Development, E-commerce Website Design,Website Redesign Services, Website Maintenance and Support, Mobile-Friendly Web Design, Graphic Design Services, Brochure and Flyer Design, Marketing Collateral Design, Banner and Ad Design, Packaging Design Services, Illustration and Artwork, Animation and Motion Graphics, Content Creation Services, Mobile App Development">
    <meta name="author" content="auctech.in">
    <link rel="canonical" href="https://auctech.in/" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/odometer.min.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate2.min.css" />

    <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="icons/icomoon/style.css" />
    <link rel="stylesheet" type="text/css" href="icons/flaticon/font/flaticon_saylo.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="icon" href="images/logo/favicon.png" sizes="any">

    <!-- PNG Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon.png">

    <!-- Apple Devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#ffffff">

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>


    <style>

    </style>

</head>

<body class="counter-scroll-8">


    <!-- #Wrapper -->
    <div id="wrapper">

        <?php include('header.php'); ?>

        <!-- Page-title -->
        <div class="tf-page-title">
            <div class="content-wrap">
                <div class="bg-image">
                    <div class="rellax" data-rellax-speed="-10">
                        <img src="images/section/breadcrumb-bg.png" alt="">
                    </div>
                </div>
                <div class="tf-overlay"></div>
                <div class="content">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class=" title">
                                    Insights
                                </p>
                                <div class="breadcrums">
                                    <a href="index">
                                        Home
                                    </a>
                                    <div class="icon">
                                        <i class="icon-chevron-r"></i>
                                    </div>
                                    <a href="#" class="current">
                                        Insights
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.Page-title -->


        <!-- Main-content -->
        <div class="main-content padding-0">

            <section class="s-service-4 tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading mb-70">
                                <p class="s-sub-title mb-15 justify-center">
                                    <i class="icon-angles-right moveLeftToRight"></i>
                                    Insights
                                </p>
                                <p class="s-title text-center text-anime-wave">
                                    Discover articles, updates, and insights <br> focused on modern business growth and
                                    innovation.
                                </p>
                            </div>
                            <div class="grid-layout-3">

                                <?php
                                include('db_con.php');

                                /* same reference query */
                                $sql = "SELECT 
                                            blogs.blog_heading AS heading,
                                            blogs_images.image,
                                            blogs.blog_desc_first,
                                            blogs.blog_url,
                                            created_at
                                        FROM blogs
                                        INNER JOIN blogs_images 
                                            ON blogs.id = blogs_images.blog_id
                                        GROUP BY blogs.id";

                                $result = $con->query($sql);


                                /* 9 WORD LIMIT FUNCTION */
                                function limitWords($text, $limit = 9)
                                {
                                    $words = explode(' ', strip_tags($text));

                                    if (count($words) > $limit) {
                                        return implode(' ', array_slice($words, 0, $limit)) . '...';
                                    }
                                    return $text;
                                }


                                if ($result && $result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        $heading = $row['heading'];
                                        $image = $row['image'];
                                        $desc = limitWords($row['blog_desc_first'], 9);
                                        $blog_url = $row['blog_url'];
                                ?>

                                <!-- Service Card Dynamic -->
                                <div class="card-service-2 tf-hover">

                                    <div class="image hover-1 hover-14">
                                        <img style="height: 260px; object-fit: cover;" src="blog/blog_uploads/<?php echo $image; ?>"
                                            data-src="blog/blog_uploads/<?php echo $image; ?>"
                                            alt="<?php echo $heading; ?>" class="lazyload">
                                    </div>

                                    <div class="content">

                                        <a href="blog/<?php echo $blog_url; ?>" class="title fw-7">
                                            <?php echo $heading; ?>
                                        </a>

                                        <p class="text">
                                            <?php echo $desc; ?>
                                        </p>

                                        <a href="blog/<?php echo $blog_url; ?>" class="tf-btn-readmore style-3">
                                            Read More
                                            <i class="icon-chevron-right"></i>
                                        </a>

                                    </div>

                                </div>

                                <?php
                                    }
                                }
                                else
                                {
                                ?>
                                <p>No Content Found</p>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.Main-content -->



    </div><!-- /#Wrapper -->
    <!-- Footer -->
    <footer id="footer" class="tf-footer style-3 auctech-bg pt-0 mt-0">
        <?php
            include('footer.php');
            ?>
    </footer><!-- /.Footer -->

    <!-- Prograss -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div><!-- /.Prograss -->

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/swiper.js"></script>
    <script type="text/javascript" src="js/odometer.min.js"></script>
    <script type="text/javascript" src="js/magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/gsap-animation.js"></script>
    <script type="text/javascript" src="js/gsap.min.js"></script>
    <script type="text/javascript" src="js/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="js/Splitetext.js"></script>
    <script type="text/javascript" src="js/rellax.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>