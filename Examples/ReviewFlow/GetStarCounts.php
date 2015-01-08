<?php
require '../Auth.php';
require '../../vendor/autoload.php';

use BrightLocal\Api;

$api = new Api(API_KEY, API_SECRET, API_ENDPOINT);
$counts = $api->get('/v4/rf/reviews/stars/count', [
    'report-id'  => 1
]);
print_r($counts);