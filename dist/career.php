<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Trustee Company in Malaysia - Career - Mega Trustee Berhad</title>
    <meta name="description" content="Alone We Can Do So Little, Together We Can Do So Much !">
<script defer src="./dist/common.c67a30c833b616740c79.js"></script><script defer src="./dist/career.c52dc14a3386d6f489a8.js"></script></head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Career";
    include('lib/navigationBar.php'); ?>

    <div class="headerTitle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="title">Alone We Can Do So Little, Together We Can Do So Much !</p>
                </div>
            </div>
        </div>
    </div>
    <div class="career">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="https://www.megatrustee.com.my/dist/915c4d1b28f8f294b068.jpg" alt="career image" width="1" height="1">
                    <div class="formArea">
                        <p class="h1">Join Us Now !!</p>
                        <div class="subtitle">Welcome to Join Our Team</div>
                        <?php $serviceForm = false;
                        $contactForm = false;
                        $careerForm = true;
                        include('lib/form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('lib/footer.php'); ?>
</body>