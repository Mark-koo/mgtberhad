<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Will Writing - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/service.css">
</head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Will Writing";
    include('lib/navigationBar.php'); ?>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-lg-8">
                    <div class="title">
                        <img src="/img/icon-will-writing.png">
                        <h1>Will Writing</h1>
                    </div>
                    <div class="content">
                        <p>A legal document that takes effect upon death of the maker of the will
                            (<strong>Testator</strong>) which contains his last wishes to distribute all his wealth
                            to chosen beneficiaries. During the lifetime of the testator he may revoke the will in
                            totality or amend the will to reflect his last and final Instructions.</p>
                        <p>In addition.<br>• Appointment of the executor(s) to carry out the instructions in a
                            timely and professional manner.<br>• Appointment of the guardian to provide care for the
                            minor children of the testator.<br>• Substitute beneficiaries in the residue of the
                            estate and/or for each particular itemised gifts.</p>
                        <p>Mega Trustee also provides will writing services for Muslims. For Muslim client only
                            <strong>1/3</strong> of the assets can be distributed to the designated beneficiaries
                            based on will writing.
                        </p>
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