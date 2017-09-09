<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC6f716b4db945ecbbc9e4aaa133f95932";
$token = "fe41e9dd488b1562c32b73db295d73ba";
$client = new Client($sid, $token);

$client->messages->create(
    "+14438704037 ",
    array(
        'from' => 'Pranked03',
        'body' => "Helo",

    )
);
