<!-- Header -->
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

<div class="float-sm">
    <a class="fl-fl float-tt" href="https://www.facebook.com/auctechmarketing" target="_blank">
        <div>
            <img width="38" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new">
            Like us!
        </div>
    </a>
    <a class="fl-fl  float-fb" href="https://www.instagram.com/auctech.marcom/" target="_blank">
        <div>
            <img width="38" height="38" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new">
            Follow us!
        </div>
    </a>
    <a class="fl-fl  float-tw" href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd"
        target="_blank">
        <div>
            <img width="38" height="38" src="https://img.icons8.com/3d-fluency/94/linkedin--v1.png" alt="">
            Follow Us!
        </div>
    </a>
    <a class="fl-fl float-rs" href="https://www.youtube.com/@auctechmarketingcommunication/" target="_blank">
        <div>
            <img width="34" height="34"
                src="https://img.icons8.com/external-those-icons-flat-those-icons/50/external-YouTube-Logo-social-media-those-icons-flat-those-icons.png"
                alt="youtube">
            Subscribe!
        </div>
    </a>

    <a class="fl-fl float-ig" href="https://wa.me/919838075493" target="_blank">
        <div>
            <img width="38" height="38" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp">
            Contact us!
        </div>
    </a>

    <a class="fl-fl float-yt" href="https://x.com/auctechmarcom" target="_blank">
        <div>
            <img width="38" height="38" src="https://img.icons8.com/3d-fluency/x.png" alt="">
            Follow Us!
        </div>
    </a>

</div>


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
                                    <img width="20" height="20"
                                        src="https://img.icons8.com/material-outlined/FFFFFF/new-post.png"
                                        alt="new-post" />
                                </div>
                                <a href="mailto:info@auctech.in" target="_blank"> info@auctech.in</a>
                            </li>
                            <li>
                                <div class="icon">
                                    <img width="20" height="20"
                                        src="https://img.icons8.com/forma-light/FFFFFF/phone.png" alt="phone" />
                                </div>
                                <a href="tel:919838075493" target="_blank"> Customer Care Helpline : +91
                                    9838075493 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="infor-list">
                            <li>
                                <a href="https://www.facebook.com/auctechmarketing"
                                    target="_blank">
                                    <div>
                                        <img width="28" src="https://img.icons8.com/color/48/facebook-new.png"
                                            alt="facebook-new">
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/auctech.marcom/"
                                    target="_blank">
                                    <div>
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/fluency/48/instagram-new.png"
                                            alt="instagram-new">
                                        
                                    </div>
                                </a>
                                <a 
                                    href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd"
                                    target="_blank">
                                    <div>
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/3d-fluency/94/linkedin--v1.png" alt="">
                                        
                                    </div>
                                </a>
                                <a  href="https://www.youtube.com/@auctechmarketingcommunication/"
                                    target="_blank">
                                    <div>
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/external-those-icons-flat-those-icons/50/external-YouTube-Logo-social-media-those-icons-flat-those-icons.png"
                                            alt="youtube">
                                       
                                    </div>
                                </a>

                                <a href="https://wa.me/919838075493" target="_blank">
                                    <div>
                                        <img width="28" height="28"
                                            src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp">
                                      
                                    </div>
                                </a>

                                <a  href="https://x.com/auctechmarcom" target="_blank">
                                    <div>
                                        <img width="28" height="28" src="https://img.icons8.com/3d-fluency/x.png"
                                            alt="">
                                       
                                    </div>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.Topbar -->

<header id="header" class="tf-header style-2">
    <div class="tf-container w-1780">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-inner">
                    <div class="header-left">
                        <div class="logo-site">
                            <a href="index">
                                <img src="images/logo/new-logo.png" alt="" />
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
                                    <a href="About-Auctech">
                                        <span>
                                            About Us
                                        </span>
                                    </a>
                                </li>
                                <li class="item has-child">
                                    <a href="javascript:void(0)">
                                        <span>
                                            Solutions
                                        </span>
                                    </a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="Martech-Solutions">
                                                <span> MarTech Solutions</span></a>
                                        </li>
                                        <li>
                                            <a href="AI-&-Automation"><span> AI & Automation </span></a>
                                        </li>
                                        <li>
                                            <a href="Tech-Consulting-&-Managed-Services"><span> Tech Consulting &
                                                    Managed
                                                    Services</span></a>
                                        </li>
                                        <li>
                                            <a href="Custom-Web-&-Mobile-Applications"><span>Custom Web & Mobile
                                                    Applications
                                                </span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item ">
                                    <a href="Industries">
                                        <span>
                                            Industries
                                        </span>
                                    </a>
                                </li>

                                <li class="item ">
                                    <a href="Case-Studies">
                                        <span>
                                            Case Studies
                                        </span>
                                    </a>
                                </li>
                                <li class="item ">
                                    <a href="Global-Presence">
                                        <span>

                                            Global Presence
                                        </span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="Insights">
                                        <span>
                                            Insights
                                        </span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="Contact">
                                        <span>
                                            Contact
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <a href="Contact" class="tf-btn style-9 small">
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
                                        <a class="item-menu-mobile" href="About-Auctech">
                                            About us
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="javascript:void(0)">
                                            Solutions
                                            <i class="icon-chevron-down"></i>
                                        </a>
                                        <ul class="sub-menu-mobile">
                                            <li class="menu-item">
                                                <a href="Martech-Solutions  ">
                                                    <span>
                                                        MarTech Solutions
                                                    </span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="AI-&-Automation"><span>
                                                        AI & Automation
                                                    </span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="Tech-Consulting-&-Managed-Services"><span>
                                                        Tech Consulting & Managed Services
                                                    </span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="Custom-Web-&-Mobile-Applications"><span>
                                                        Web & Mobile Applications
                                                    </span></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="Industries">Industries</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="Case-Studies"> Case
                                            Studies</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="Global-Presence">
                                            Global Presence
                                        </a>
                                    </li>

                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="Insights"> Insights
                                        </a>
                                    </li>

                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="Contact"> Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                        <div class="bottom">
                            <div class="wrap">

                                <ul class="social-list mt-0 mb-0">
                                    <span class="fw-bold">Follows Us:</span>
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
                                        <a
                                            href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd">
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
</header>