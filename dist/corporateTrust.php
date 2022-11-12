<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Corporate Trust - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <meta name="description"
        content="Corporate Trusts is a trust established and maintained by a corporation. It allows the corporation to turnover management of financial resources to another corporation that is charged with specific task in handling the assets.">
<script defer src="./dist/common.229efc96d34a340a8338.js"></script><script defer src="./dist/corporateTrust.76917838b5b656fa18f2.js"></script></head>

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
                        <img src="./dist/images/icon-corporate-trust-723b9b0ad45db727e706.png" alt="service image">
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
                        <img src="./dist/images/icon-information-2720393c1321bf57c573.png" alt="icon">
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