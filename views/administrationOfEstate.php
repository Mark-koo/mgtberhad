<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Administration of Estate - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/service.css">
</head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Administration of Estate";
    include('lib/navigationBar.php'); ?>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-lg-8">
                    <div class="title">
                        <img src="/img/icon-administration-of-estate.png">
                        <h1>Administration of Estate</h1>
                    </div>
                    <div class="content">
                        <p>Administration of Estate is to appoint an Executor to carry out the instructions of the
                            testator in a professional and timely manner.</p>
                        <p>The executor must have the following qualities and expertise:</p>
                        <ul>
                            <li>Knowledge in legal, accounting, investment, and taxation matters.</li>
                            <li>Continuity in the administration of estate.</li>
                            <li>Able to act impartially between various parties and beneficiaries.&nbsp;</li>
                        </ul>
                        <br>
                        <p>Executor is to ensure that the assets and income of the testator are protected, accounted
                            for and duly accountable for taxes.</p>
                        <p>Mega Trustee’s appointment as Executor or
                            Administrator as our team are well trained and experienced in every aspect.</p>
                    </div>
                </div>
                <!-- talk with us -->
                <div class="col-12 col-lg-4">
                    <div class="title">
                        <img src="/img/icon-information.png">
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