<?php
$url = substr($_SERVER['REQUEST_URI'], 1);
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN7TXLW4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
<!-- header -->
<header class="container">

    <!-- logo & contact -->
    <div class="row justify-content-between align-items-center">
        <!-- col -->
        <div class="col-auto">
            <a href="/">
                <img class="logo" src="/img/logo.png" alt="Mega Trustee Berhad" width="4" height="1">
            </a>
        </div>
        <!-- col -->
        <div class="col-auto d-none d-md-block">
            <a class="headerContact" href="tel:+60327243022">
                <img class="icon" src="/img/icon-phone.png" alt="icon"  width="80" height="52">
                <div class="headerContactInfo d-none d-lg-block">
                    <p class="text1">Phone Number</p>
                    <p class="text2">+60 3 2724 3022/3</p>
                </div>
            </a>
            <a class="headerContact"
                href="https://www.google.com.my/maps/search/Suite+11-10,+11+Floor,+Wisma+UOA++II,+No,+Jalan+Pinang,+50450+Kuala+Lumpur,+Wilayah+Persekutuan+Kuala+Lumpur/@3.1527076,101.7117251,19.22z"
                target="_blank">
                <img class="icon" src="/img/icon-map.png" alt="icon" width="80" height="52">
                <div class="headerContactInfo d-none d-lg-block">
                    <p class="text1">NO 21, JALAN PINANG, KL, MY</p>
                    <p class="text2">WISMA UOA II</p>
                </div>
            </a>
        </div>
        <div class="col-auto d-md-none">
            <button id="toggleNav" class="button-icon">
                <img src="/img/icon-menu.png" alt="navigation button" alt="icon" width="1" height="1">
            </button>
        </div>
    </div>
    <!-- nav & button -->
    <div class="nav row d-none d-md-block justify-content-between align-items-center">
        <ul class="firstLayer col-md-auto">
            <li class="<?php if ($url == '') {
                echo "active";
            } ?>">
                <a href="/">Home</a>
            </li>
            <li class="<?php if ($url == 'about') {
                echo "active";
            } ?>">
                <a href="/about">About</a>
            </li>
            <li class="<?php if ($url == 'services' || $url == 'contingency-trust' || $url == 'personal-trust' || $url == 'corporate-trust' || $url == 'will-writing' || $url == 'administration-of-estate' || $url == 'interest-scheme' || $url == 'escrow-services') {
                echo "active";
            } ?>">
                <a href="/services">Services</a>
                <ul class="secondLayer">
                    <li class="<?php if ($url == 'contingency-trust') {
                        echo "active";
                    } ?>">
                        <a href="/contingency-trust">Contingency Trust</a>
                    </li>
                    <li class="<?php if ($url == 'personal-trust') {
                        echo "active";
                    } ?>">
                        <a href="/personal-trust">Personal Trust</a>
                    </li>
                    <li class="<?php if ($url == 'corporate-trust') {
                        echo "active";
                    } ?>">
                        <a href="/corporate-trust">Corporate Trust</a>
                    </li>
                    <li class="<?php if ($url == 'will-writing') {
                        echo "active";
                    } ?>">
                        <a href="/will-writing">Will Writing</a>
                    </li>
                    <li class="<?php if ($url == 'administration-of-estate') {
                        echo "active";
                    } ?>">
                        <a href="/administration-of-estate">Administration of Estate</a>
                    </li>
                    <li class="<?php if ($url == 'interest-scheme') {
                        echo "active";
                    } ?>">
                        <a href="/interest-scheme">Interest Scheme</a>
                    </li>
                    <li class="<?php if ($url == 'escrow-services') {
                        echo "active";
                    } ?>">
                        <a href="/escrow-services">Escrow Services</a>
                    </li>
                </ul>
            </li>
            <li class="<?php if ($url == 'career') {
                echo "active";
            } ?>">
                <a href="/career">Career</a>
            </li>
            <li class="<?php if ($url == 'privacy-policy' || $url == 'anti-bribery-corruption-policy') {
                echo "active";
            } ?>">
                <span>Policy</span>
                <ul class="secondLayer">
                    <li class="<?php if ($url == 'privacy-policy') {
                        echo "active";
                    } ?>">
                        <a href="/privacy-policy">Personal Data Protection Act (PDPA)</a>
                    </li>
                    <li class="<?php if ($url == 'anti-bribery-corruption-policy') {
                        echo "active";
                    } ?>">
                        <a href="/anti-bribery-corruption-policy">Anti-bribery & Corruption Policy</a>
                    </li>
                </ul>
            </li>
            <li class="<?php if ($url == 'contact') {
                echo "active";
            } ?>">
                <a href="/contact">Contact</a>
            </li>
        </ul>
        <div class="col-md-auto d-none d-lg-block">
            <a class="button" href="/contact">
                <img src="/img/icon-phone-2.png" alt="icon" width="1" height="1">
                <span>Free Consultation</span>
            </a>
        </div>
    </div>
</header>
<!-- .mobileNav -->
<div id="mobileNav" class="mobileNav">
    <div id="overlay" class="overlay"></div>
    <button id="closeNav" class="button-icon">
        <img src="/img/icon-close.png" alt="close navigation" width="1" height="1">
    </button>

    <ul class="firstLayer">
        <li class="<?php if ($url == '') {
            echo "active";
        } ?>">
            <a href="/">Home</a>
        </li>
        <li class="<?php if ($url == 'about') {
            echo "active";
        } ?>">
            <a href="/about">About</a>
        </li>
        <li class="gotChildJs <?php if ($url == 'services' || $url == 'contingency-trust' || $url == 'personal-trust' || $url == 'corporate-trust' || $url == 'will-writing' || $url == 'administration-of-estate' || $url == 'interest-scheme' || $url == 'escrow-services') {
            echo "active";
        } ?>">
            <a href="/services">
                <span>Services</span>
                <button>
                    <img src="/img/icon-down.png" alt="icon" width="1" height="1">
                </button>
            </a>
            <ul class="secondLayer">
                <li class="<?php if ($url == 'contingency-trust') {
                    echo "active";
                } ?>">
                    <a href="/contingency-trust">Contingency Trust</a>
                </li>
                <li class="<?php if ($url == 'personal-trust') {
                    echo "active";
                } ?>">
                    <a href="/personal-trust">Personal Trust</a>
                </li>
                <li class="<?php if ($url == 'corporate-trust') {
                    echo "active";
                } ?>">
                    <a href="/corporate-trust">Corporate Trust</a>
                </li>
                <li class="<?php if ($url == 'will-writing') {
                    echo "active";
                } ?>">
                    <a href="/will-writing">Will Writing</a>
                </li>
                <li class="<?php if ($url == 'administration-of-estate') {
                    echo "active";
                } ?>">
                    <a href="/administration-of-estate">Administration of Estate</a>
                </li>
                <li class="<?php if ($url == 'interest-scheme') {
                    echo "active";
                } ?>">
                    <a href="/interest-scheme">Interest Scheme</a>
                </li>
                <li class="<?php if ($url == 'escrow-services') {
                    echo "active";
                } ?>">
                    <a href="/escrow-services">Escrow Services</a>
                </li>
            </ul>
        </li>
        <li class="<?php if ($url == 'career') {
            echo "active";
        } ?>">
            <a href="/career">Career</a>
        </li>
        <li class="gotChildJs <?php if ($url == 'privacy-policy' || $url == 'anti-bribery-corruption-policy') {
            echo "active";
        } ?>">
            <a href="/privacy-policy">
                <span>Policy</span>
                <button>
                    <img src="/img/icon-down.png" alt="icon" width="1" height="1">
                </button>
            </a>
            <ul class="secondLayer">
                <li class="<?php if ($url == 'privacy-policy') {
                    echo "active";
                } ?>">
                    <a href="/privacy-policy">Personal Data Protection Act (PDPA)</a>
                </li>
                <li class="<?php if ($url == 'anti-bribery-corruption-policy') {
                    echo "active";
                } ?>">
                    <a href="/anti-bribery-corruption-policy">Anti-bribery & Corruption Policy</a>
                </li>
            </ul>
        </li>
        <li class="<?php if ($url == 'contact') {
            echo "active";
        } ?>">
            <a href="/contact">Contact</a>
        </li>
    </ul>
</div>