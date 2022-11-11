<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Corporate Trust - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/service.css">
</head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Corporate Trust";
    include('lib/navigationBar.php'); ?>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-lg-8">
                    <div class="title">
                        <img src="/img/icon-corporate-trust.png">
                        <h1>Corporate Trust</h1>
                    </div>
                    <div class="content">
                        <p>Corporate Trusts is a trust established and maintained by a corporation. It allows the
                            corporation to turnover management of financial resources to another corporation that is
                            charged with specific task in handling the assets.</p>
                        <p>The purpose of Corporate Trusts includes <strong>asset protection</strong>,
                            <strong>efficient tax planning</strong> and <strong>business succession
                                aspirations</strong>.
                        </p>
                        <p>Mega Trustee’s Corporate Trust should hold shares in a private company at the same time
                            to distribute dividends to the trusts beneficiaries. The growth of the company will be
                            retained within the trust and not to the former shareholder.</p>
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