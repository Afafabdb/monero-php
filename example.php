<?php
require "vendor/autoload.php";

use Monero\Wallet;

$wallet = new Monero\Wallet();

$destination1 = (object) [
    'amount' => '0.01',
    'address' => 'adarshmishra.101998@gmail.com'
];

$options = [
    'destinations' => $destination1
];

echo $wallet->transfer($options);

