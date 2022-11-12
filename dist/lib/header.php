<?php
$url = substr($_SERVER['REQUEST_URI'], 1);
?>

<!-- header -->
<header class="container">

    <!-- logo & contact -->
    <div class="row justify-content-between align-items-center">
        <!-- col -->
        <div class="col-auto">
            <a href="/">
                <img class="logo" src="./dist/images/logo-3974bc2a5a5010dc69e3.png" alt="Mega Trustee Berhad">
            </a>
        </div>
        <!-- col -->
        <div class="col-auto d-none d-md-block">
            <a class="headerContact" href="tel:+60397794892">
                <img class="icon" src="./dist/images/icon-phone-90f676bd8734f3a88bc2.png" alt="icon">
                <div class="headerContactInfo d-none d-lg-block">
                    <p class="text1">Phone Number</p>
                    <p class="text2">+60 3 9779 4892/3</p>
                </div>
            </a>
            <a class="headerContact"
                href="https://www.google.com.my/maps/search/Suite+11-10,+11+Floor,+Wisma+UOA++II,+No,+Jalan+Pinang,+50450+Kuala+Lumpur,+Wilayah+Persekutuan+Kuala+Lumpur/@3.1527076,101.7117251,19.22z"
                target="_blank">
                <img class="icon" src="./dist/images/icon-map-7b4c6b8658ca3b935c82.png" alt="icon">
                <div class="headerContactInfo d-none d-lg-block">
                    <p class="text1">12 JALAN YAP KWAN SENG, KL, MY</p>
                    <p class="text2">MEGAN AVENUE II</p>
                </div>
            </a>
        </div>
        <div class="col-auto d-md-none">
            <button id="toggleNav" class="button-icon">
                <img src="./dist/images/icon-menu-6b22fd8b7f813a9317fd.png" alt="navigation button" alt="icon">
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
                <img src="./dist/images/icon-phone-2-5177d17487ce5e73d51f.png" alt="icon">
                <span>Free Consultation</span>
            </a>
        </div>
    </div>
</header>
<!-- .mobileNav -->
<div id="mobileNav" class="mobileNav">
    <div id="overlay" class="overlay"></div>
    <button id="closeNav" class="button-icon">
        <img src="./dist/images/icon-close-a7d8e964b3cb1127c520.png" alt="close navigation">
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
                    <img src="./dist/images/icon-down-5440e2cf9ec894568007.png" alt="icon">
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
                    <img src="./dist/images/icon-down-5440e2cf9ec894568007.png" alt="icon">
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