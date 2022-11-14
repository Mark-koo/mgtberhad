<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Personal Trust - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <meta name="description"
        content="A legal arrangement where assets ownership are transferred from the individual who sets up the trust (Settlor) to another individual or organization (Trustee) for the benefits of one or more people (Beneficiaries).">
<script defer src="./dist/common.c67a30c833b616740c79.js"></script><script defer src="./dist/personalTrust.a599596f3e520203cd4a.js"></script></head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Personal Trust";
    include('lib/navigationBar.php'); ?>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-lg-8">
                    <div class="title">
                        <img src="https://www.megatrustee.com.my/dist/18ebec0b7af756662525.png" alt="icon" width="1" height="1">
                        <h1>Personal Trust</h1>
                    </div>
                    <div class="content">
                        <p>A legal arrangement where assets ownership are transferred from the individual who sets up
                            the trust (<strong>Settlor</strong>) to another individual or organization
                            (<strong>Trustee</strong>) for the benefits of one or more people
                            (<strong>Beneficiaries</strong>).</p>
                        <p>All things considered, Mega Trustee owes fiduciary duty to the beneficiaries, who are the
                            beneficial owners of the trust property and also provides management and administration of
                            trust assets in professional manner. Mega Trustee will follow the instructions given to
                            distribute the particular assets forming part of the trust to the chosen beneficiaries.</p>
                        <p>A trust can help in preparation of changing needs like retirement, remarriage, creditor
                            protection, illness, disability and many more.</p>
                        <ul>
                            <li>Property Trust</li>
                            <li>Investment Trust</li>
                            <li>Education Trust</li>
                            <li>Lifestyle Maintenance Trust</li>
                            <li>Retirement Trust</li>
                            <li>Charitable Trust</li>
                        </ul>
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