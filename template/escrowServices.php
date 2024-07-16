<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('lib/htmlHead.php'); ?>
    <title>Escrow Services - Trustee Company in Malaysia - Mega Trustee Berhad</title>
    <meta name="description"
        content="Escrow service is an agreement made between the trustee acting as the escrow agent and the primary contracting parties, for the trustee to hold and disburse money or documents or source codes or other items at the appropriate time. Upon fulfilment of the conditions stated in the arrangement by either both or one of the primary contracting parties, the trustee shall hand over the documents or items or disburse the money to the rightful parties after receiving the appropriate written instructions.">
</head>

<body>
    <?php include ('lib/header.php'); ?>
    <?php
    $title = "Escrow Services";
    include ('lib/navigationBar.php'); ?>

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

                        <br>

                        <h3>Government Projects</h3>
                        <p>We provide comprehensive services as an engineering contractor and consulting firm for
                            government-related projects.</p>

                        <h3>Paymaster Escrow Accounts</h3>
                        <p>Our paymaster escrow services ensure secure and efficient financial transactions.</p>

                        <h3>Foreign Goods Purchases</h3>
                        <p>We specialize in bulk purchases of foreign goods, ensuring quality and cost-effectiveness.
                        </p>

                        <h3>Commodity Purchases</h3>
                        <p>Our team handles commodity purchases with expertise and reliability.</p>

                        <h3>Real Estate Escrow Services</h3>
                        <p>We offer escrow services for real estate purchases and construction, both locally and
                            internationally.</p>

                        <h3>Acquisition & Business Deals</h3>
                        <p>We facilitate acquisitions and business deals, providing support and expertise for
                            transactions
                            both locally and abroad.</p>

                        <h3>Project Financing</h3>
                        <p>Our project financing services cater to both local and international projects, ensuring
                            smooth
                            and successful funding processes.</p>


                        <br>
                        <br>
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
                    include ('lib/form.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include ('lib/footer.php'); ?>
</body>