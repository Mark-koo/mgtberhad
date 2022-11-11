<?php

require_once __DIR__ . '/router.php';

get('/', 'views/home.php');
get('/about', 'views/about.php');
get('/services', 'views/services.php');

get('/contingency-trust', 'views/contingencyTrust.php');
get('/personal-trust', 'views/personalTrust.php');
get('/corporate-trust', 'views/corporateTrust.php');
get('/will-writing', 'views/willWriting.php');
get('/administration-of-estate', 'views/administrationOfEstate.php');
get('/interest-scheme', 'views/interestScheme.php');
get('/escrow-services', 'views/escrowServices.php');

post('/contingency-trust', 'views/contingencyTrust.php');
post('/personal-trust', 'views/personalTrust.php');
post('/corporate-trust', 'views/corporateTrust.php');
post('/will-writing', 'views/willWriting.php');
post('/administration-of-estate', 'views/administrationOfEstate.php');
post('/interest-scheme', 'views/interestScheme.php');
post('/escrow-services', 'views/escrowServices.php');

get('/career', 'views/career.php');
post('/career', 'views/career.php');

get('/privacy-policy', 'views/privacyPolicy.php');
get('/anti-bribery-corruption-policy', 'views/antiBriberyCorruptionPolicy.php');

get('/contact', 'views/contact.php');
post('/contact', 'views/contact.php');

get('/thank-you', 'views/thankYou.php');

any('/404', 'views/404.php');