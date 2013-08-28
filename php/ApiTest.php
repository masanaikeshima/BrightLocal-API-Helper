<?php
require 'BrightLocal.php';

$api = new BrightLocal\Api('YOUR_API_KEY', 'YOUR_API_SECRET');

// get a list of clients
print_r($api->call('/v2/clients/get-all'));

// get a client
print_r($api->call('/v2/clients/get', array(
    'client-id' => 1059
)));

// get LSRC report list
print_r($api->call('/v2/lsrc/get-all'));

// get LSRC report
print_r($api->call('/v2/lsrc/get', array(
    'campaign-id' => 50
)));

// get CT report list
print_r($api->call('/v2/ct/get-all'));

// get a CT report
print_r($api->call('/v2/ct/get', array(
    'report-id' => 259
)));