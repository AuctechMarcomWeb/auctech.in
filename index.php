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

</head>

<body class="counter-scroll-2">


    <!-- #Wrapper -->
    <div id="wrapper">

        <?php include('header.php'); ?>

        <!-- Banner Area -->
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
                                                    AucTech MarCom
                                                </p>
                                                <p class="s-title text-fs-75 text-white tf-fade-right fade-item-2 ">

                                                    <?php echo ($row['title']); ?>
                                                </p>
                                                <p
                                                    class="text-white tf-fade-right fade-item-2 banner-text text-justify">
                                                    We design and integrate marketing technology, AI-powered automation,
                                                    and scalable digital platforms to help businesses grow intelligently
                                                    and sustainably.
                                                </p>
                                                <div class="d-flex align-items-center mt-4 tf-fade-right fade-item-2"
                                                    style="gap:6px">
                                                    <a href="Martech-Solutions">
                                                        <div class="form-button mt-0">
                                                            <button type="submit">Our Solutions</button>
                                                        </div>
                                                    </a>


                                                    <a href="Contact">
                                                        <div class="form-button-2">
                                                            <button>Contact Us</button>
                                                        </div>
                                                    </a>
                                                </div>


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
        </div>


        <!-- Section-about-Auctech -->
        <section class="s-about-company-3 tf-spacing-1">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-left">
                            <div class="image s1 tf-hover">
                                <div class="hover-1">
                                    <img src="images/section/about-3.jpg" data-src="images/section/about-3.jpg" alt=""
                                        class="lazyload">
                                </div>
                            </div>
                            <div class="image s2 tf-hover">
                                <div class="hover-1">

                                    <img src="images/section/about-4.jpg" data-src="images/section/about-4.jpg" alt=""
                                        class="lazyload">
                                </div>
                            </div>
                            <div class="image s3 tf-hover">
                                <div class="hover-1">
                                    <img src="images/section/about-5.jpg" data-src="images/section/about-5.jpg" alt=""
                                        class="lazyload">
                                </div>
                            </div>
                            <div class="wg-curve-text style-3 tf-animate__box-2 animate__slow">
                                <div class="icon">
                                    <img style="height:80px" src="images/logo/favicon.png" alt="">
                                </div>
                                <div class="text-rotate">
                                    <div class="circle">
                                        <div class="text" id="circularText"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="content">
                            <p class="s-sub-title mb-15">
                                <i class="icon-angles-right moveLeftToRight"></i>
                                Who We Are
                            </p>
                            <p class="s-title s-title mb-3 auctech-color">
                                Intelligent Growth Infrastructure for Modern
                                Enterprises
                            </p>
                            <p class="text mb-3 text-justify">
                                AucTech is a global MarTech and technology company operating across
                                India, Canada, and the Middle East.

                            </p>
                            <p class="text mb-3 text-justify">
                                We combine marketing strategy, data intelligence, automation frameworks, and custom
                                software engineering to build structured growth ecosystems for forward-thinking
                                businesses.
                            </p>
                            <p class="text mb-40 text-justify">
                                We don’t just run campaigns.
                                We build intelligent growth systems

                            </p>
                            <div class="experience mb-40">

                                <!-- Years of Experience -->
                                <div class="counter-wrap style-3">
                                    <div class="wg-counter style-2 type-2">
                                        <div class="counter-number"></div>
                                        <span class="sub-odo">+ 19</span>
                                    </div>
                                    <p class="sub-counter">
                                        Years Of <br> Experience
                                    </p>
                                </div>

                                <!-- Global Presence -->
                                <div class="counter-wrap style-3">
                                    <div class="wg-counter style-2 type-2">
                                        <div class="counter-number"></div>
                                        <span class="sub-odo">+ 6</span>
                                    </div>
                                    <p class="sub-counter">
                                        Global Presence
                                    </p>
                                </div>

                            </div>


                            <div class="bot">
                                <a href="About-Auctech" class="tf-btn style-15 text-anime-style-1">
                                    Read More
                                    <i class="icon-chevron-right"></i>
                                </a>
                                <div class="author-wrap">
                                    <div class="img-avt">
                                        <img src="images/avatar/entry-author.jpg" alt="">
                                    </div>
                                    <div class="infor">
                                        <a href="#" class="name">
                                            Ali Shamsi
                                        </a>
                                        <div class="duty">
                                            Founder & CEO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Section-about-Auctech -->

        <!-- Section-What-We-Do -->
        <section class="s-pricing tf-spacing-3">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading mb-70">
                            <p class="s-sub-title mb-18 justify-center">
                                <i class="icon-angles-right moveLeftToRight"></i>
                                WHAT WE DO
                            </p>
                            <p class="s-title text-center  s-title mb-3 auctech-color">
                                Integrated MarTech & Technology Solutions
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wg-pricing ">

                            <div class="price-wrap mb-20">
                                <p class="price">
                                    MarTech Solutions
                                </p>
                            </div>
                            <p class="text mb-25">
                                We architect and deploy marketing technology systems that unify strategy, automation,
                                and analytics.
                            </p>

                            <ul class="benefit-list">
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        CRM Implementation & Optimization
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Marketing Automation Systems
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Performance Campaign Architecture
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Lead Management Infrastructure
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Analytics & Reporting Dashboards
                                    </p>
                                </li>
                            </ul>
                            <p class="text">
                                We deliver end-to-end marketing solutions that boost visibility and growth.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wg-pricing ">

                            <div class="price-wrap mb-20">
                                <p class="price">
                                    AI & Intelligent Automation
                                </p>
                            </div>
                            <p class="text mb-25">
                                We integrate AI into marketing and operational workflows to improve efficiency and
                                decision-making.
                            </p>

                            <ul class="benefit-list">
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Predictive Lead Scoring
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        AI-Optimized Campaign Management
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Workflow Automation
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Intelligent Chat & Engagement Systems
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Data Intelligence & Insight Models
                                    </p>
                                </li>
                            </ul>
                            <p class="text">
                                Our AI frameworks are built for measurable business outcomes.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wg-pricing ">

                            <div class="price-wrap mb-20">
                                <p class="price">
                                    Technology Development
                                </p>
                            </div>
                            <p class="text mb-25">
                                We design and develop scalable digital infrastructure to support long-term growth.
                            </p>

                            <ul class="benefit-list">
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Enterprise Web Applications
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Mobile App Development (iOS & Android)
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        CRM & ERP Systems
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        SaaS Platforms
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        Cloud-Based Business Solutions
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                    </div>
                                    <p>
                                        API & System Integrations
                                    </p>
                                </li>
                            </ul>
                            <p class="text">
                                Every solution is engineered for performance, scalability, and security.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /.Section-we-do -->
        <!-- Section-why-choose -->
        <section class="s-why-choose tf-spacing-1 pb-0">
            <div class="mb-100">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="content">
                                <p class="s-sub-title mb-17">
                                    <i class="icon-angles-right moveLeftToRight"></i>
                                    WHY AUCTECH
                                </p>
                                <p class="s-title text-main-green-3 mb-30 auctech-color">
                                    A Structured Approach to Intelligent
                                    Growth
                                </p>
                                <p class="text mb-40 text-justify">
                                    At AucTech, we believe business growth should be planned, organized, and measurable.
                                    We do not just provide services — we create complete systems that help companies
                                    grow step by step. By combining smart strategy, modern technology, and clear
                                    performance tracking, we help businesses build strong foundations for long-term
                                    success.
                                </p>

                                <ul class="list">
                                    <li>
                                        <div class="icon">
                                            <img width="20" height="20"
                                                src="https://img.icons8.com/ios-filled/d43f64/checkmark--v1.png"
                                                alt="" />
                                        </div>
                                        <p style="font-size:13px; font-weight:500">
                                            Integrated Marketing & Technology Expertise
                                        </p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img width="20" height="20"
                                                src="https://img.icons8.com/ios-filled/d43f64/checkmark--v1.png"
                                                alt="" />
                                        </div>
                                        <p style="font-size:13px; font-weight:500">
                                            AI-Enabled Business Systems
                                        </p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img width="20" height="20"
                                                src="https://img.icons8.com/ios-filled/d43f64/checkmark--v1.png"
                                                alt="" />
                                        </div>
                                        <p style="font-size:13px; font-weight:500">
                                            Multi-Country Operational Presence
                                        </p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img width="20" height="20"
                                                src="https://img.icons8.com/ios-filled/d43f64/checkmark--v1.png"
                                                alt="" />
                                        </div>
                                        <p style="font-size:13px; font-weight:500">
                                            Enterprise-Grade Execution Standards
                                        </p>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="video-wrap style-2 ">
                                <img src="images/img-2/2.png" data-src="images/img-2/2.png" alt=""
                                    class="lazyload tf-animate-2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /.Section-why-choose -->
        <!-- Section-achievement -->
        <section class="s-achivement tf-spacing-1" style=" background: #fdf7f7b5;">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="content">
                            <p class="s-sub-title">
                                <i class="icon-angles-right moveLeftToRight"></i>
                                Global Presence
                            </p>
                            <p class="s-title mb-3 auctech-color">
                                Delivering Intelligent Solutions Globally
                            </p>
                            <p class="text mb-40 text-justify">
                                AucTech works with businesses in different countries, helping them grow with smart
                                marketing and technology solutions. We understand international markets and provide
                                structured systems that support business expansion and long-term success. Our team
                                delivers reliable and innovative solutions across borders.
                            </p>
                            <ul class="achievement-list">
                                <li>
                                    <div class="icon">
                                        <h5 class="title">
                                            We operate in:
                                        </h5>
                                    </div>

                                    <p class="text">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/color/india-circular.png"
                                            alt="india-circular" /> India
                                    </p>
                                    <p class="text">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/color/canada-circular.png"
                                            alt="canada-circular" /> Canada
                                    </p>
                                    <p class="text">
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/sf-regular/d43f64/advance.png" alt="advance" />
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/color/48/united-arab-emirates-circular.png"
                                            alt="united-arab-emirates-circular" /> Middle East
                                    </p>
                                </li>

                            </ul>
                            <p class="text mt-5">
                                Serving businesses with integrated MarTech and intelligent technology systems across
                                international markets.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image-wrap tf-hover">
                            <div class="image hover-1 ">
                                <img src="images/widget/achievement.jpg" data-src="./images/./widget/achievement.jpg"
                                    alt="" class="lazyload">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /.Section-achievement -->

        <!-- Section contact -->
        <section class="xp-contact-wrapper">
            <div class="container">

                <div class="row g-4 align-items-stretch">
                    <!-- LEFT CONTACT INFO -->
                    <div class="col-lg-5">
                        <div class="xp-contact-info">

                            <small>CONTACT - INFO</small>
                            <h3 class="xp-info-title">Our Contact Detail</h3>

                            <!--=================INDIA BRANCH=================-->
                            <div class="xp-branch">
                                <h6 class="xp-branch-title"><img width="28" height="28"
                                        src="https://img.icons8.com/color/india-circular.png" alt="india-circular" />
                                    India Headquarters</h6>

                                <div class="xp-info-item">
                                    <div class="xp-info-icon" data-tooltip="Call India Office">
                                        <a href="tel:+919838075490">
                                            <img width="28" height="28"
                                                src="https://img.icons8.com/parakeet-line/FFFFFF/phone.png"
                                                alt="phone" />
                                        </a>
                                    </div>
                                    <div class="xp-info-text">
                                        <h5>Head Office (Lucknow)</h5>
                                        <p class="d-flex align-items-center">
                                            <img width="18" height="18"
                                                src="https://img.icons8.com/forma-light-filled/FFFFFF/phone.png"
                                                alt="" />&nbsp;
                                            <a href="tel:+919838075490">+91 98380 75490</a>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <img width="18" height="18"
                                                src="https://img.icons8.com/material/FFFFFF/mail.png"
                                                alt="mail" />&nbsp;
                                            <a href="mailto:admin@auctech.in">admin@auctech.in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- ================= CANADA BRANCH ================= -->
                            <div class="xp-branch">
                                <h6 class="xp-branch-title"><img width="28" height="28"
                                        src="https://img.icons8.com/color/canada-circular.png" alt="canada-circular" />
                                    Canada Headquarters</h6>

                                <div class="xp-info-item">
                                    <div class="xp-info-icon" data-tooltip="Call Canada Office">
                                        <a href="tel:+919838075490">
                                            <img width="28" height="28"
                                                src="https://img.icons8.com/parakeet-line/FFFFFF/phone.png"
                                                alt="phone" />
                                        </a>
                                    </div>
                                    <div class="xp-info-text">
                                        <h5>Ottawa Office</h5>
                                        <p>
                                            <img width="18" height="18"
                                                src="https://img.icons8.com/forma-light-filled/FFFFFF/phone.png"
                                                alt="" />&nbsp;
                                            <a href="tel:+14377370373">+1 (437) 737-0373</a>
                                        </p>
                                        <p>
                                            <img width="18" height="18"
                                                src="https://img.icons8.com/material/FFFFFF/mail.png"
                                                alt="mail" />&nbsp;
                                            <a href="mailto:admin@auctech.ca">admin@auctech.ca</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- ================= UAE BRANCH ================= -->
                            <div class="xp-branch">
                                <h6 class="xp-branch-title"><img width="28" height="28"
                                        src="https://img.icons8.com/color/48/united-arab-emirates-circular.png"
                                        alt="united-arab-emirates-circular" /> UAE Headquarters</h6>

                                <div class="xp-info-item">
                                    <div class="xp-info-icon" data-tooltip="Call UAE Office">
                                        <a href="tel:+919838075490">
                                            <img width="28" height="28"
                                                src="https://img.icons8.com/parakeet-line/FFFFFF/phone.png"
                                                alt="phone" />
                                        </a>
                                    </div>
                                    <div class="xp-info-text">
                                        <h5>Dubai Office</h5>
                                        <!-- <p>
                                            <img width="18" height="18"
                                                src="https://img.icons8.com/forma-light-filled/FFFFFF/phone.png"
                                                alt="" />&nbsp;
                                            <a href="tel:+919838075490">+971 98380 75490</a>
                                        </p> -->
                                        <p>
                                            <img width="18" height="18"
                                                src="https://img.icons8.com/material/FFFFFF/mail.png"
                                                alt="mail" />&nbsp;
                                            <a href="mailto:admin@auctech.ae">admin@auctech.ae</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- RIGHT FORM -->
                    <div class="col-lg-7">
                        <div class="xp-contact-card h-100">

                            <h2 class="xp-contact-title auctech-color mb-0">Write Us Something</h2>
                            <p class="mb-5 auctech-color">Have a question or project in mind? Let’s connect and
                                build something great together.</p>

                            <form method="post" action="save_contact.php" id="enquiryForm">

                                <div class="row g-3">

                                    <div class="col-md-6 mb-3">
                                        <label class="xp-contact-label">Your Name *</label>
                                        <input type="text" name="name" id="name" class="form-control xp-contact-input"
                                            placeholder="Your name here">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="xp-contact-label">Your Email *</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control xp-contact-input" placeholder="Your email here">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="xp-contact-label">Contact Number *</label>
                                        <input type="number" name="phone" id="phone"
                                            class="form-control xp-contact-input" placeholder="Your phone number here">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="xp-contact-label">Your Address *</label>
                                        <input type="text" name="subject" id="subject"
                                            class="form-control xp-contact-input" placeholder="Enter your address">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="xp-contact-label">Country *</label>
                                        <input type="text" name="subject" id="subject"
                                            class="form-control xp-contact-input" placeholder="Enter your country name">
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="xp-contact-label">Select a Service *</label>
                                        <select class="form-control xp-contact-input" class="wide" name="subject"
                                            required="">
                                            <option value="">Select a Service *</option>
                                            <option value="Branding &amp; Digital PR">Branding &amp; Digital PR
                                            </option>
                                            <option value="Website Development">Website Development</option>
                                            <option value="Customized Software Development">Customized Software
                                                Development
                                            </option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                            <option value="SEO Services">SEO Services</option>
                                            <option value="Social Media Marketing (SMM)">Social Media Marketing
                                                (SMM)
                                            </option>
                                            <option value="Search Engine Marketing (SEM)">Search Engine Marketing
                                                (SEM)
                                            </option>
                                            <option value="Pay-Per-Click (PPC)">Pay-Per-Click (PPC)</option>
                                            <option value="Creative Design">Creative Design</option>
                                            <option value="Logo Design &amp; Identity">Logo Design &amp; Identity
                                            </option>
                                            <option value="E-commerce Solutions">E-commerce Solutions</option>
                                            <option value="Email &amp; WhatsApp Marketing">Email &amp; WhatsApp
                                                Marketing</option>
                                            <option value="Digital Campaign Management">Digital Campaign Management
                                            </option>
                                            <option value="Digital Strategy Consulting">Digital Strategy Consulting
                                            </option>
                                            <option value="Website / App Maintenance">Website / App Maintenance
                                            </option>
                                            <option value="Other / Custom Requirement">Other / Custom Requirement
                                            </option>

                                        </select>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label class="xp-contact-label">Message *</label>
                                        <textarea name="message" id="message"
                                            class="form-control xp-contact-input xp-contact-textarea"
                                            placeholder="Tell us a few words"></textarea>

                                    </div>

                                    <div class="col-12 mt-5">
                                        <div class="header-right">
                                            <a href="Contact" class="tf-btn style-9 small">
                                                Book a Consultation
                                                <i class="icon-chevron-right"></i>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- /.Section-contact -->


        <!-- Section new blog 3 -->
        <section class="s-new-blog-3 tf-spacing-1 " style="background: #fef9f9;">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading mb-70">
                            <div class="">
                                <p class="s-sub-title mb-15">
                                    <i class="icon-angles-right moveLeftToRight"></i>
                                    Insights
                                </p>
                                <p class="s-title text-anime-wave">
                                    Insight AucTech
                                </p>
                            </div>
                            <a href="Insights" class="tf-btn style-7 text-anime-style-1">
                                View More
                                <i class="icon-chevron-right"></i>
                            </a>
                        </div>
                        <div class="swiper-container slider-blog">
                            <div class="swiper-wrapper">

                                <?php
                                include('db_con.php');

                                $sql = "SELECT 
                                            blogs.blog_heading AS heading,
                                            blogs.blog_url,
                                            blogs.created_at,
                                            blogs.blog_desc_first,
                                            blogs_images.image
                                        FROM blogs
                                        INNER JOIN blogs_images 
                                            ON blogs.id = blogs_images.blog_id
                                        GROUP BY blogs.id
                                        ORDER BY blogs.created_at DESC
                                        LIMIT 6";

                                $result = $con->query($sql);

                                if ($result && $result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        $heading = $row['heading'];
                                        $created_at = $row['created_at'];
                                        $image = $row['image'];
                                        $blog_url = $row['blog_url'];
                                ?>

                                <!-- Swiper Slide -->
                                <div class="swiper-slide">
                                    <div class="card-blog-item style-3 style-2 tf-hover">

                                        <a href="blog/<?php echo $blog_url; ?>">
                                            <div class="entry-image hover-1 hover-14">
                                                <img style="height: 260px; object-fit: cover;" src="blog/blog_uploads/<?php echo $image; ?>"
                                                    data-src="blog/blog_uploads/<?php echo $image; ?>"
                                                    alt="<?php echo $heading; ?>" class="lazyload">
                                            </div>
                                        </a>

                                        <div class="content">

                                            <div class="entry-meta mb-20">
                                                <ul>
                                                    <li>
                                                        <p class="sub">AucTech MarCom</p>
                                                    </li>
                                                    <li>
                                                        <span class="dot"></span>
                                                    </li>
                                                    <li>
                                                        <a href="blog/<?php echo $blog_url; ?>">
                                                            <?php echo date("d M Y", strtotime($created_at)); ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <a href="blog/<?php echo $blog_url; ?>" class="title fw-7 mb-30">
                                                <?php echo $heading; ?>
                                            </a>

                                            <a href="blog/<?php echo $blog_url; ?>" class="btn-view has-text">
                                                <span class="plus"> + </span>
                                                <span class="read font-main-2">Read More</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <?php
                                    }
                                }
                                else
                                {
                                    echo '<div class="swiper-slide"><p class="text-center">No Blog Found</p></div>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Section new blog 3 -->

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