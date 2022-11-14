<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Interest Scheme - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <meta name="description"
        content="Interest Scheme is governed under Section 84 of the Companies Act 1965 and it involves the promotion of a particular scheme to the public who shall be the investors by contributing financially in exchange for an interest unit in a particular scheme. Investors do not have day-to-day control over the operations of the scheme.">
<script defer src="./dist/common.c67a30c833b616740c79.js"></script><script defer src="./dist/interestScheme.ef8de18b8f202bde2dfa.js"></script></head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Interest Scheme";
    include('lib/navigationBar.php'); ?>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-lg-8">
                    <div class="title">
                        <img src="https://www.megatrustee.com.my/dist/de3d07384d89a7c27ecc.png" alt="icon" width="1" height="1">
                        <h1>Interest Scheme</h1>
                    </div>
                    <div class="content">
                        <p>Interest Scheme is governed under Section 84 of the Companies Act 1965 and it involves
                            the promotion of a particular scheme to the public who shall be the investors by
                            contributing financially in exchange for an interest unit in a particular scheme.
                            Investors do not have day-to-day control over the operations of the scheme.</p>
                        <p>The role of Mega Trustee is to protect the interest of the public who invests in any
                            approved interest scheme.</p>
                    </div>
                </div>
                <!-- talk with us -->
                <div class="col-12 col-lg-4">
                    <div class="title">
                        <img src="https://www.megatrustee.com.my/dist/2720393c1321bf57c573.png" alt="icon" width="1" height="1">
                        <h1>Talk with us</h1>
                    </div>
                    <?php $serviceForm = true;
                    $contactForm = false;
                    $careerForm = false;
                    include('lib/form.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('lib/footer.php'); ?>
</body>