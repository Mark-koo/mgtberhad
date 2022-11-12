<?php

require_once __DIR__ . '/router.php';

get('/', 'dist/home.php');
get('/about', 'dist/about.php');
get('/services', 'dist/services.php');

get('/contingency-trust', 'dist/contingencyTrust.php');
get('/personal-trust', 'dist/personalTrust.php');
get('/corporate-trust', 'dist/corporateTrust.php');
get('/will-writing', 'dist/willWriting.php');
get('/administration-of-estate', 'dist/administrationOfEstate.php');
get('/interest-scheme', 'dist/interestScheme.php');
get('/escrow-services', 'dist/escrowServices.php');

post('/contingency-trust', 'dist/contingencyTrust.php');
post('/personal-trust', 'dist/personalTrust.php');
post('/corporate-trust', 'dist/corporateTrust.php');
post('/will-writing', 'dist/willWriting.php');
post('/administration-of-estate', 'dist/administrationOfEstate.php');
post('/interest-scheme', 'dist/interestScheme.php');
post('/escrow-services', 'dist/escrowServices.php');

get('/career', 'dist/career.php');
post('/career', 'dist/career.php');

get('/privacy-policy', 'dist/privacyPolicy.php');
get('/anti-bribery-corruption-policy', 'dist/antiBriberyCorruptionPolicy.php');

get('/contact', 'dist/contact.php');
post('/contact', 'dist/contact.php');

get('/thank-you', 'dist/thankYou.php');

any('/404', 'dist/404.php');