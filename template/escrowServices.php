<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Escrow Services - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <meta name="description"
        content="Escrow service is an agreement made between the trustee acting as the escrow agent and the primary contracting parties, for the trustee to hold and disburse money or documents or source codes or other items at the appropriate time. Upon fulfilment of the conditions stated in the arrangement by either both or one of the primary contracting parties, the trustee shall hand over the documents or items or disburse the money to the rightful parties after receiving the appropriate written instructions.">
</head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Escrow Services";
    include('lib/navigationBar.php'); ?>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-lg-8">
                    <div class="title">
                        <img src="/img/icon-escrow-services.png" alt="icon" width="1" height="1">
                        <h1>Escrow Services</h1>
                    </div>
                    <div class="content">
                        <p>Escrow service is an agreement made between the trustee acting as the escrow agent and the
                            primary contracting parties, for the trustee to hold and disburse money or documents or
                            source codes or other items at the appropriate time. Upon fulfilment of the conditions
                            stated in the arrangement by either both or one of the primary contracting parties, the
                            trustee shall hand over the documents or items or disburse the money to the rightful parties
                            after receiving the appropriate written instructions.</p>
                        <p>Mega Trustee provide excellent service to our client to properly account for the escrow
                            account money and ensure that usage of money is explicity for the purposes intended.</p>
                    </div>
                </div>
                <!-- talk with us -->
                <div class="col-12 col-lg-4">
                    <div class="title">
                        <img src="/img/icon-information.png" alt="icon" width="1" height="1">
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