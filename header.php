<!-- Header -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
          /* floting-icon */
        .fl-fl {
            background:  linear-gradient(45deg, #c12e88, #f1592a, #f5b316);
        }

        .fl-fl {
           color:white;
            text-transform: uppercase;
            letter-spacing: 3px;
            padding: 15px;
            width: 200px;
            position: fixed;
            right: -153px;
            z-index: 1000;
            font: normal normal 10px Arial;
            -webkit-transition: all .25s 
        ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s 
        ease;
        display: flex
        ;
            align-items: center;
            gap:40px;
        }
        .float-fb {
            top: 160px;
        }
        .float-tw {
            top: 220px;
        }
        .float-rs {
            top: 280px;
        }
        .float-ig {
            top: 340px;
        }
        .float-wh {
            top: 400px;
        }
        .fl-fl i {
        
          font-size: 26px;
        }
        .fl-fl:hover {
          transform: translateX(-130px);
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

    @media (max-width: 875px) {
        .fl-fl {
            padding: 8px;
            width: 190px;
        }
        .float-tw {
            top: 205px;
        }
        .float-rs {
            top: 250px;
        }
        .float-ig {
            top: 295px;
        }
        .float-wh {
            top: 340px;
        }
    }
</style>
        <div class="float-sm ">
      <div class="fl-fl float-fb">
        <i class="fa fa-facebook"></i>
        <a href="https://www.facebook.com/auctechmarketing" target="_blank" style="color: white;">
          Like us!</a>
      </div>
      <div class="fl-fl float-tw">
        <i class="fa fa-instagram"></i>
        <a href="https://www.instagram.com/auctech.marcom/" target="_blank" style="color: white; ">Follow us!</a>
      </div>

      <div class="fl-fl float-rs">
        <i class="fa fa-linkedin"></i>
        <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd" target="_blank"
          style="color: white; ">Follow us !</a>
      </div>
      <div class="fl-fl float-ig">
      <img width="26" height="26" src="https://img.icons8.com/ios-filled/FFFFFF/youtube-play.png" alt=""/>
        <a href="https://www.youtube.com/@auctechmarketingcommunication/" target="_blank" style="color: white; ">Follow us!</a>
      </div>
      <div class="fl-fl float-wh">
        <i class="fa fa-whatsapp"></i>
        <a href="https://wa.me/919616171814" target="_blank" style="color: white; ">Contact us!</a>
      </div>
    </div>
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
                                <a href="partner" target="_blank">
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
                                <a href="https://www.auctech.in/portfolio" target="_blank">
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
                                    <a class="item-menu-mobile" href="https://www.auctech.in/portfolio" target="_blank">Inventions
                                    </a>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="career">Career
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
                                            New Jiamau, 1090 Chauraha, 167/101, Shaligram Building, Hazratganj, Lucknow, Uttar Pradesh
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
                                        Call: <a href="tel:+919616171814">
                                            +91 9616171814,
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