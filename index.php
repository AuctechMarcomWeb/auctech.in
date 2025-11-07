<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Basic Page Needs -->
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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate2.min.css" />

    <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="icons/icomoon/style.css" />
    <link rel="stylesheet" type="text/css" href="icons/flaticon/font/flaticon_saylo.css" />

    <!-- Favicon and Touch Icons  -->
    <!--<link rel="shortcut icon" href="images/logo/new-logo.png" />-->
    <!--<link rel="apple-touch-icon-precomposed" href="images/logo/new-logo.png" />-->
  <link rel="icon" type="image/png" sizes="32x32" href="/images/logo/new-logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/logo/new-logo.png">
<link rel="apple-touch-icon" href="/images/logo/new-logo.png">


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--Google Map API Key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnJ6wqD5RHEOoZEhjBaJ2HnajGTA3Rzkw&libraries=places"></script>
</head>

<body class="counter-scroll-2">


    <!-- #Wrapper -->
    <div id="wrapper">

        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div class="loader-container">
                    <div class="wrap-loader">
                        <div class="loader">
                        </div>
                        <div class="icon">
                            <img src="images/logo/new-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Preloader -->

        <!-- Topbar -->
        <div class="tf-topbar style-2 auctech-bg">
            <div class="tf-container w-1780">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topbar-inner">
                            <div class="topbar-left">
                                <ul class="infor-list">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-open-mail"></i>
                                        </div>
                                        <a href="mailto:info@auctech.in" target="_blank"> info@auctech.in</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <a href="tel:919838075493" target="_blank"> Phone No : +91 9838075493 </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-right">
                                <ul class="infor-list">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <a href="https://maps.app.goo.gl/DPJwrRKGzfMFzVFv6" target="_blank">
                                             New Jiamau, 1090 Chauraha, 167/101, Shaligram Building, Hazratganj, Lucknow, Uttar Pradesh
                                            226001</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Topbar -->

        <header id="header" class="tf-header style-2">
            <?php
            include('header.php');
            ?>
        </header>


        <!-- Page-title-home-2 -->
        <div class="page-title-home-2">
            <div class="tf-container w-1780">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container slider-home-2">
                            <div class="swiper-wrapper">

                                <?php
                                include('db_con.php');
                                $result = $con->query("SELECT image_path, title FROM add_banner");

                                while ($row = $result->fetch_assoc()):
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="slide-home-2">
                                            <div class="tf-overlay"></div>
                                            <div class="image">
                                                <img src="admin/<?php echo ($row['image_path']); ?>"
                                                    data-src="images/img-1/1.png" alt=""
                                                    class="tf-animate-zoom-in-out lazyload">
                                            </div>
                                            <div class="content-wrap">
                                                <div class="content">
                                                    <p
                                                        class="s-sub-title text-white mb-20 tf-trainsition-draw-left access-trainsition ">
                                                        <i class="icon-angles-right moveLeftToRight"></i>
                                                        Auctech MarCom
                                                    </p>
                                                    <p
                                                        class="s-title text-fs-75 text-white mb-50 tf-fade-right fade-item-2 ">

                                                        <?php echo ($row['title']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>

                            <div class="swiper-pagination tf-pagination style-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Page-title-home-2 -->

        <!-- Main-content -->
        <div class="main-content style-2 pb-0">

            <!-- Section-about-company -->
            <section class="s-about-company-2 tf-spacing-3 ">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="wrap">
                                <div class="">
                                    <p class="s-sub-title mb-15">
                                        <i class="icon-angles-right moveLeftToRight"></i>
                                        about us
                                    </p>
                                    <p class="s-title mb-70 auctech-color">
                                        We Help

                                        <br>
                                        Businesses Grow
                                        <span>
                                            with Smart Strategies & Solutions
                                        </span>
                                    </p>
                                    <div class="image-1 tf-hover">
                                        <div class="hover-1">

                                            <img src="images/img-1/4.png" data-src="images/img-1/4.png" alt=""
                                                class="lazyload tf-animate-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="image-right tf-hover">
                                    <div class="image-2 hover-1">
                                        <img src="images/img-1/3.png" data-src="images/img-1/3.png" alt=""
                                            class="lazyload tf-animate-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="content">
                                <div class="wg-curve-text style-2 mb-50">
                                    <div class="icon">
                                        <img style="height: 60px;" src="images/logo/new-logo.png" alt="">
                                    </div>
                                    <div class="text-rotate">
                                        <div class="circle">
                                            <div class="text" id="circularText"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text mb-40 text-justify">
                                    Auctech Marcom is a global strategic management consulting group that serves leading
                                    businesses, multi-national companies, small and medium enterprises, NGO's and
                                    start-ups.
                                </p>
                                <a href="marcom-lab" class="tf-btn style-14 text-anime-style-1">
                                    Read More
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section-about-company -->

            <!-- Section-counter -->
            <section class="s-counter">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <h2 class="title auctech-color">
                                    Our Growth
                                </h2>
                                <div class="counter-wrap">
                                    <div class="wg-counter style-2">
                                        <span class="sub-odo auctech-color">2000</span>
                                        <span class="sub-odo auctech-color">+</span>
                                    </div>
                                    <h4 class=" mt-5">
                                        Project Completed
                                    </h4>
                                </div>
                                <div class="counter-wrap">
                                    <div class="wg-counter style-2">
                                        <span class="sub-odo auctech-color">19</span>
                                        <span class="sub-odo auctech-color">+</span>
                                    </div>
                                    <h4 class=" mt-5">
                                        Years Of Experience
                                    </h4>
                                </div>
                                <div class="counter-wrap">
                                    <div class="wg-counter style-2">
                                        <span class="sub-odo auctech-color">6</span>
                                        <span class="sub-odo auctech-color">+</span>
                                    </div>
                                    <h4 class=" mt-5">
                                        Global Presence
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section-counter -->


            <!-- Section-service -->
            <section class="s-service tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="content">
                                <p class="s-sub-title mb-17">
                                    <i class="icon-angles-right moveLeftToRight"></i>
                                    Our Services
                                </p>
                                <p class="s-title mb-70 auctech-color">
                                    Providing End-to-End Business, <span>Marketing & Consulting Support</span>
                                </p>
                                <div class="image tf-hover mb-40">
                                    <div class="hover-1 hover-14">
                                        <img src="images/img-2/1.png" data-src="images/img-2/1.png" alt=""
                                            class="lazyload tf-animate-2">
                                    </div>
                                </div>
                                <p class="text mb-30">
                                    We offer end-to-end solutions that combine design, marketing, and
                                    technology to help businesses grow. <br>
                                    From eye-catching visuals to smart digital campaigns and custom tech tools — we
                                    handle it all.
                                </p>
                                <div class="bot">
                                    <div class="counter-wrap">
                                        <div class="wg-counter">
                                            <div class="odometer">2000</div>
                                            <span class="sub-odo">+</span>
                                        </div>
                                        <p class="sub-counter font-main-3 lh-21">
                                            Happy Clients
                                        </p>
                                    </div>
                                    <span class="line style-stand">

                                    </span>
                                    <a href="tech-consulting" class="tf-btn style-3 text-anime-style-1">Explore All
                                        Services <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="box-icon default tf-hover-icon mb-20 wow fadeInUp" data-wow-delay="0s">
                                <div class="icon hover-icon-2">
                                    <i class="flaticon-data-management"></i>
                                </div>
                                <a href="#" class="title fw-7">
                                    Design
                                </a>
                                <p class="text text-justify">
                                    Visuals are the most striking approach to leave an enduring impression in the
                                    viewer's psyche essentially in light of the fact that they are so prompt. More
                                    importantly, the human mind forms pictures 60,000 times quicker than it does text,
                                    and 93% of all human communication is visual.
                                </p>
                                <a href="our-service" class="tf-btn-readmore style-3">
                                    Read More
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>
                            <div class="box-icon default tf-hover-icon mb-20 wow fadeInUp" data-wow-delay="0s">
                                <div class="icon hover-icon-2">
                                    <i class="flaticon-human-resources"></i>
                                </div>
                                <a href="#" class="title fw-7">
                                    Marketing
                                </a>
                                <p class="text text-justify">
                                    We can play a vital role in finding that balance for you between that hardly any
                                    digital presence and confusing your customers with too many information and
                                    decisions (analysis paralysis). Auctech Marcom with its full suite of tailor-made
                                    Digital marketing services can be your trusted outsourced partner or extended
                                    in-house team.
                                </p>
                                <a href="our-service" class="tf-btn-readmore style-3">
                                    Read More
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>
                            <div class="box-icon default tf-hover-icon mb-20 wow fadeInUp" data-wow-delay="0s">
                                <div class="icon hover-icon-2">
                                    <i class="flaticon-target-1"></i>
                                </div>
                                <a href="#" class="title fw-7">
                                    Technology
                                </a>
                                <p class="text text-justify">
                                    we’re able to create cutting-edge custom technology infrastructure for the modern
                                    marketers. Some of these vital technology pieces where Auctech Digital has its
                                    expertise include responsive websites, user interface design for the greater user
                                    experience, branded mobile apps, e-commerce websites and content management systems.
                                </p>
                                <a href="our-service" class="tf-btn-readmore style-3">
                                    Read More
                                    <i class="icon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section-service -->


            <!-- Section-why-choose -->
            <section class="s-why-choose tf-spacing-1">
                <div class="mb-100">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content">
                                    <p class="s-sub-title mb-17">
                                        <i class="icon-angles-right moveLeftToRight"></i>
                                        Why choose us
                                    </p>
                                    <p class="s-title text-main-green-3 mb-30 auctech-color">
                                        Why we are the Right <br> Choice
                                        <span>
                                            for Your Business
                                        </span>
                                    </p>
                                    <p class="text mb-40 text-justify">
                                        Choosing the right partner can make all the difference in your business growth.
                                        <br>
                                        We blend creativity, strategy, and technology to deliver
                                        real, measurable results. <br>
                                        Our team works closely with each client, understanding their unique needs and
                                        building tailored solutions. <br>
                                        Whether you’re a startup, SME, or large enterprise, we bring the same level of
                                        dedication and innovation.
                                        With us, it’s not just about services — it’s about building long-term success
                                        together.


                                    </p>
                                    <ul class="list">
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check-2"></i>
                                            </div>
                                            <p>
                                                End-to-End Business Solutions
                                            </p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check-2"></i>
                                            </div>
                                            <p>
                                                Creative & Strategic Thinking
                                            </p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check-2"></i>
                                            </div>
                                            <p>
                                                Latest Tools, Tech & Trends
                                            </p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check-2"></i>
                                            </div>
                                            <p>
                                                Long-Term Partnership Focused on Growth
                                            </p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="video-wrap style-2 ">
                                    <img src="images/img-2/2.png" data-src="images/img-2/2.png" alt=""
                                        class="lazyload tf-animate-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box-icon style-2 tf-hover-icon  wow fadeInUp" data-wow-delay="0s">
                                <div class="icon style-circle">
                                    <i class="flaticon-rocket-1 hover-icon-2"></i>
                                </div>
                                <a href="mission-vision" class="title fw-7 auctech-color">
                                    Strategic Expertise
                                </a>
                                <p class="text text-clamp-3 text-justify ">
                                    We plan smart strategies that help your business grow faster and stand out in the
                                    market.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-icon style-2 tf-hover-icon wow fadeInUp" data-wow-delay="0.1s">
                                <div class="icon style-circle">
                                    <i class="flaticon-efficiency hover-icon-2"></i>
                                </div>
                                <a href="mission-vision" class="title fw-7 auctech-color">
                                    Creative Solutions
                                </a>
                                <p class="text text-clamp-3">
                                    We design unique ideas that match your brand and connect well with your target
                                    audience.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-icon style-2 tf-hover-icon last wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon style-circle">
                                    <i class="flaticon-pie-chart hover-icon-2"></i>
                                </div>
                                <a href="mission-vision" class="title fw-7 auctech-color">
                                    Tech-Driven Approach
                                </a>
                                <p class="text text-clamp-3">
                                    We use modern technology to build strong digital solutions that improve your
                                    business performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-overlay"></div>
            </section><!-- /.Section-why-choose -->

            <!-- Section-value -->
            <section class="s-value tf-spacing-2">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading mb-70">
                                <p class="s-sub-title mb-15 justify-center ">
                                    <i class="icon-angles-right moveLeftToRight"></i>
                                    INDUSTRIES
                                </p>
                                <div class="d-flex justify-content-center">
                                    <p class="s-title text-center auctech-color">
                                        Areas we
                                        <span>
                                            work into
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="grid-layout-3">
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-market-1 hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        E-COMMERCE & IT INFRASTRUCTURE
                                    </a>
                                    <p class="text-justify">
                                        Auctech offers strategy consulting, operations support, and digital tools to
                                        improve e-commerce and IT systems. We help businesses build efficient,
                                        user-friendly platforms and restructure their processes for growth and better
                                        performance.


                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-excellent hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        CAPITAL PROJECTS & INFRASTRUCTURE
                                    </a>
                                    <p class="text-justify">
                                        Auctech helps reduce waste in infrastructure projects by applying innovation,
                                        strategic planning, and expert execution. We work to solve access issues, drive
                                        progress, and support secure, resilient communities through smart infrastructure
                                        solutions.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-integration hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        IT PRODUCTS LIKE SMART CLASS
                                    </a>
                                    <p class="text-justify">
                                        We offer a wide range of smart classroom solutions, including digital teaching
                                        tools, interactive boards, podiums, visual presenters, and video conferencing
                                        systems to modernize learning environments and boost education quality.
                                    </p>

                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-integrity hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        TRAVEL, TRANSPORT & LOGISTICS
                                    </a>
                                    <p class="text-justify">
                                        Auctech aligns IT strategies with business goals for logistics, freight, and
                                        travel companies. We deliver reliable tech solutions that improve operations,
                                        support decision-making, and create strong value in a highly competitive sector.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-teamwork hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        FMCG
                                    </a>
                                    <p class="text-justify">
                                        We help FMCG companies connect directly with consumers through digital
                                        engagement. Our strategies improve brand communication, strengthen market
                                        position, and create lasting impressions that support long-term customer
                                        loyalty.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-dna hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        RETAIL
                                    </a>
                                    <p class="text-justify">
                                        Auctech helps retail clients create smart sales strategies, build omnichannel
                                        networks, localize inventory, and develop new store formats. Our support ensures
                                        efficient operations, better customer experiences, and stronger brand presence.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-dna hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        PUBLIC SECTOR
                                    </a>
                                    <p class="text-justify">
                                        We support government organizations in improving transparency, performance, and
                                        digital adoption. Auctech enables PSUs to manage growth, deliver citizen-centric
                                        services, and contribute effectively to the country’s economic development.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-dna hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        FINANCIAL SERVICES
                                    </a>
                                    <p class="text-justify">
                                        We help financial businesses use new government schemes, improve planning, and
                                        identify growth opportunities. Our insights maximize profits, reduce risks, and
                                        help compare performance against competitors for better outcomes.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-dna hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        TELECOMMUNICATIONS
                                    </a>
                                    <p class="text-justify">
                                        Auctech partners with telecom companies to provide insights, tech strategies,
                                        and innovation support. Our team of industry experts brings deep knowledge to
                                        help navigate change and build smarter communication networks.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-dna hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        SOCIAL SECTOR / NGOS
                                    </a>
                                    <p class="text-justify">
                                        We work with NGOs and social organizations by offering consulting from
                                        professionals in policy, economics, and management. Our goal is to support
                                        impactful programs and drive sustainable, measurable change.
                                    </p>
                                </div>
                                <div class="box-icon style-6 type-2 tf-hover-icon ">
                                    <div class="icon">
                                        <i class="flaticon-dna hover-icon-2"></i>
                                    </div>
                                    <a href="#" class="title fw-7 fs-22 auctech-color">
                                        MEDIA & ENTERTAINMENT
                                    </a>
                                    <p class="text-justify">
                                        Auctech helps media and entertainment businesses grow in today’s digital world.
                                        We offer strategy, technology, and creative solutions that improve profits,
                                        handle market shifts, and drive audience engagement across platforms.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section-value -->


  <!-- Section-partner -->
            <section class="s-partner mt-5 mb-1">

                <div style="text-align: center; width: 100%;">
                    <p class="s-title  mb-30 auctech-color">
                        Our Partners
                    </p>
                </div>

                <div class="swiper-container slider-partner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <span class="tf-overlay"></span>
                                <img class="img1" src="https://www.auctech.in/images/partner/1.jpg" alt="">
                                <img class="img2" src="https://www.auctech.in/images/partner/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <span class="tf-overlay"></span>
                                <img class="img1" src="https://www.auctech.in/images/partner/2.jpg" alt="">
                                <img class="img2" src="https://www.auctech.in/images/partner/2.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <span class="tf-overlay"></span>
                                <img class="img1" src="https://www.auctech.in/images/partner/3.jpg" alt="">
                                <img class="img2" src="https://www.auctech.in/images/partner/3.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <span class="tf-overlay"></span>
                                <img class="img1" src="https://www.auctech.in/images/partner/4.jpg" alt="">
                                <img class="img2" src="https://www.auctech.in/images/partner/4.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <span class="tf-overlay"></span>
                                <img class="img1" src="https://www.auctech.in/images/partner/5.jpg" alt="">
                                <img class="img2" src="https://www.auctech.in/images/partner/5.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <span class="tf-overlay"></span>
                                <img class="img1" src="https://www.auctech.in/images/partner/6.jpg" alt="">
                                <img class="img2" src="https://www.auctech.in/images/partner/6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section-partner -->
        </div><!-- /.Main-content -->


        <!-- Footer -->
        <footer id="footer" class="tf-footer style-3 auctech-bg pt-0 mt-0">
            <?php
            include('footer.php');
            ?>
        </footer><!-- /.Footer -->

    </div><!-- /#Wrapper -->

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

    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/swiper.js"></script>
    <script type="text/javascript" src="js/odometer.min.js"></script>
    <script type="text/javascript" src="js/counter.js"></script>
    <script type="text/javascript" src="js/magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/gsap-animation.js"></script>
    <script type="text/javascript" src="js/gsap.min.js"></script>
    <script type="text/javascript" src="js/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="js/Splitetext.js"></script>
    <script type="text/javascript" src="js/rellax.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <!-- /Javascript -->
</body>

</html>