<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('lib/htmlHead.php'); ?>
    <title>Trustee Company in Malaysia - Contact - Mega Trustee Berhad</title>
    <meta name="description"
        content="Mega Trustee Berhad always listens to its clients and carefully provide professional advice without any conflict. We at Mega Trustee Berhad, envision building and maintaining a continuous and mutually beneficial relationship with our clients.">
<script defer src="./dist/common.229efc96d34a340a8338.js"></script><script defer src="./dist/contact.b8b32b1223031b5d7c0b.js"></script></head>

<body>
    <?php include('lib/header.php'); ?>
    <?php
    $title = "Contact";
    include('lib/navigationBar.php'); ?>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="info col-12 col-md-6 col-lg-4">
                    <img src="./dist/images/icon-mail-286a8f6c7eb39d9a665a.png" alt="icon">
                    <div class="wrap">
                        <p class="h2">Email</p>
                        <a href="mail:info@megatrustee.com.my">info@megatrustee.com.my</a>
                    </div>
                </div>
                <div class="info col-12 col-md-6 col-lg-4">
                    <img src="./dist/images/icon-phone-3-b83be0a728fd37715d09.png" alt="icon">
                    <div class="wrap">
                        <p class="h2">Phone</p>
                        <a href="tel:+60397794892">+60 3 9779 4892/3</a>
                    </div>
                </div>
                <div class="info col-12 col-lg-4">
                    <img src="./dist/images/icon-location-2e41533454bed4a0a738.png" alt="icon">
                    <div class="wrap">
                        <p class="h2">Address</p>
                        <a href="https://www.google.com.my/maps/search/Suite+11-10,+11+Floor,+Wisma+UOA++II,+No,+Jalan+Pinang,+50450+Kuala+Lumpur,+Wilayah+Persekutuan+Kuala+Lumpur/@3.1527076,101.7117251,19.22z"
                            target="_blank">B-06-14,
                            MEGAN AVENUE II, <br>12 JALAN YAP KWAN SENG, <br>50450 KUALA LUMPUR</a>
                    </div>
                </div>
            </div>
            <div class="formAndMap row">
                <div class="formArea col-12 col-lg-6">
                    <p class="h1">Let's Talk With Us</p>
                    <?php $serviceForm = false;
                    $contactForm = true;
                    $careerForm = false;
                    include('lib/form.php'); ?>
                </div>
                <div class="mapArea col-12 col-lg-6">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include('lib/footer.php'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtLcWNkp0mcBIZRJkA7OpPeCG3NEKbUtA&callback=initMap"
        defer></script>
    <script>
        window.initMap = function initMap() {
            const myLatLng = { lat: 3.161549, lng: 101.71186 };

            const map = new google.maps.Map(
                document.getElementById("map"),
                {
                    zoom: 16,
                    center: myLatLng,
                }
            );

            new google.maps.Marker({
                position: myLatLng,
                map,
            });
        };
    </script>

</body>