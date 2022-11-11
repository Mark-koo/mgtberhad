<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Trustee Company in Malaysia - Career - Mega Trustee Berhad</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/career.css">
</head>

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
                    <img src="/img/career.jpg">
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