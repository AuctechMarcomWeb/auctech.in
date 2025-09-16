<!-- Header -->

<style>
    .auctech-bg {
        background: linear-gradient(45deg, #b93e76, #f49e33);
    }

    .auctech-color {
        background: linear-gradient(45deg, #c12e88, #f1592a, #f5b316);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
        font-weight: 600;
        text-decoration: none;
    }

    #logo_header {
        height: 80px;
        padding: 8px;
        object-fit: contain;
    }

    .mobile-nav-wrap .inner-mobile-nav {
        justify-content: flex-start;
    }

    .mobile-nav-wrap .inner-mobile-nav .logo img {
        max-width: 70px;
    }

    .text-justify {
        text-align: justify;
    }

    .tf-page-title .content-wrap {
        min-height: 450px !important;
    }
    
    /* --A_CSS--- */
    .mb-8r {
        margin-bottom: 8rem;
    }

    .s-cta-2 .content {
        background-color: black;
    }

    .s-about-company {
        padding-bottom: 0px;
    }


    /* -----==BOTTOM NAVIGATION CSS BY : ZAID==------ */

    .sticky-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 50px;
        border-top: 1px solid #ddd;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .phone-link {
        flex: 1;
        text-decoration: none;
        color: #f0571f;
        font-size: 1rem;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        height: 100%;
        background-color: white;
    }

    .demo-btn {
        flex: 1;
        height: 100%;
        color: #ffffff;
        font-size: 1rem;
        font-weight: bold;
        border: none;
        cursor: pointer;
        background: linear-gradient(to right, #f0571f, #faa419);
        transition: all 0.3s ease;
        text-transform: uppercase;
    }

    /* ---=====MEDIA QUERY====== */

    @media (max-width: 768px) {
        .sticky-footer {
            height: 50px;

        }

        footer {
            margin-bottom: 50px;
        }

        .brochure-btn {
            position: fixed;
            bottom: 144px;
        }

        .phone-link,
        .demo-btn {
            font-size: 1.2rem !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .whatsapp-float {
            bottom: 130px;
        }

        .achievement-wrapper.style3 .achievement-contact-meta {
            margin-top: -195px;
        }

        .footer-inner-wrap {
            margin-bottom: 30px;
        }

        .bottom .wrap .social-list {
            margin-bottom: 70px;
            margin-top: 30px;
        }
    }

    @media screen and (min-width:500px) {
        .res-dd-none {
            display: none !important;
        }

    }

    /* ----END BOTTOM NAV---- */

    @media (min-width:1000px) {
        .s-title {
            font-size: 38px;
        }
    }

    @media (max-width: 575px) {
        .footer-inner {
            gap: 50px !important;
        }

        .tf-collapse-content {
            display: block !important;
        }
    }
</style>

<div class="tf-container w-1780">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-inner">
                <div class="header-left">
                    <div class="logo-site">
                        <a href="index">
                            <img id="logo_header" src="images/logo/new-logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="header-center">
                    <nav class="main-nav">
                        <ul class="nav-list">
                            <li class="item">
                                <a href="index">
                                    <span>
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="marcom-lab">
                                    <span>
                                        MarCom Lab
                                    </span>
                                </a>
                            </li>
                            <li class="item has-child">
                                <a href="javascript:void(0)">
                                    <span>
                                        Department
                                    </span>
                                </a>
                                <ul class="sub-nav">
                                    <li>
                                        <a href="creative-production">
                                            <span> Creative Production</span></a>
                                    </li>
                                    <li>
                                        <a href="marcom-consulting"><span> MarCom Consulting </span></a>
                                    </li>
                                    <li>
                                        <a href="tech-consulting"><span> Tech Consulting</span></a>
                                    </li>
                                    <li>
                                        <a href="system-integration"><span>System Integration</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item ">
                                <a href="partner">
                                    <span>
                                        Partners
                                    </span>
                                </a>
                            </li>

                            <li class="item ">
                                <a target="_blank" href="https://auctechmarketing.com/">
                                    <span>
                                        Marketing
                                    </span>
                                </a>
                            </li>
                            <li class="item ">
                                <a href="https://www.auctech.in/portfolio">
                                    <span>

                                        Inventions
                                    </span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="career">
                                    <span>

                                       Career
                                    </span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="contact">
                                    <span>
                                        Contact
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="contact" class="tf-btn style-9 small">
                        Get In Touch
                        <i class="icon-chevron-right"></i>
                    </a>
                    <div class="union style-2 mobile-button">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>

            <div class="mobile-nav-wrap">
                <div class="overlay-mobile-nav"></div>
                <div class="inner-mobile-nav overflow-y-auto">
                    <div class="top">
                        <div class="logo">
                            <a href="index" rel="home" class="main-logo">
                                <img id="mobile-logo_header" alt="" src="images/logo/new-logo.png" />
                            </a>
                            <div class="mobile-nav-close">
                                <i class="icon-xmark"></i>
                            </div>
                        </div>
                        <nav id="mobile-main-nav" class="mobile-main-nav">
                            <ul id="menu-mobile-menu" class="menu">
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="index">
                                        Home
                                    </a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="marcom-lab">
                                        MarCom Lab
                                    </a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="javascript:void(0)">
                                        Department
                                        <i class="icon-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item">
                                            <a href="creative-production">
                                                <span>
                                                    Creative Production
                                                </span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="marcom-consulting"><span>
                                                    MarCom Consulting
                                                </span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="tech-consulting"><span>
                                                    Tech Consulting
                                                </span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="system-integration"><span>
                                                    System Integration
                                                </span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="partner"> Partners</a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="https://auctechmarketing.com/"> Marketing</a>
                                </li>

                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="https://www.auctech.in/portfolio">Inventions
                                    </a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="javascript:void(0)">Whitepapers
                                    </a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="contact">Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="bottom">
                        <div class="wrap">
                            <p class="title">
                                Contact Us
                            </p>
                            <ul class="contact-list mb-20">
                                <li>
                                    <p>
                                        Address: <a href="https://maps.app.goo.gl/DPJwrRKGzfMFzVFv6" target="_blank">
                                            Flat 101,
                                            Shaligram Building, New Jiamau, 1090 Chauraha, Lucknow, Uttar
                                            Pradesh
                                            226001</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Email: <a href="mailto:info@auctech.in">
                                            info@auctech.in
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Call: <a href="tel:+916386452123">
                                            +91 6386452123,
                                        </a>
                                        <a href="tel:+919838075490">
                                            +91 9838075490
                                        </a>
                                    </p>
                                </li>
                            </ul>
                            <ul class="social-list">
                                <li>
                                    <a href="https://www.facebook.com/auctechmarketing">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/auctechmarcom">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/auctech.marcom/">
                                        <i class="icon-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>