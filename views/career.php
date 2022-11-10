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
                        <form class="white">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="name" name="name" type="text" placeholder="Your Name(*)">
                                </div>
                                <div class="col-md-6">
                                    <input id="email" name="email" type="email" placeholder="Your Email(*)">
                                </div>
                            </div>
                            <input id="phone" name="text" type="text" placeholder="Your Phone(*)">
                            <textarea id="message" name="message" placeholder="Your Messages" rows="10"></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Your Resume</label>
                                    <input id="attachment" name="attachment" type="file">
                                </div>
                            </div>
                            <button class="button" type="submit">
                                <span>Submit</span>
                                <span style="display:none">Submiting...</span>
                                <span style="display:none">Successfull! We will reply you ASAP.</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('lib/footer.php'); ?>
</body>