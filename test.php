<?php

require_once('src/HttpRequest/Cover.php');
require_once('src/HttpRequest/Client.php');
require_once('src/Application/Transactions.php');
require_once('src/Reelpay.php');

use Reelpay\Reelpay;

$transactionObj = Reelpay::Transaction('sffkuubyosc9i63w','8b4jSWfrolOTYuUwkJbdw9IJUBeVWK3O');

var_dump($transactionObj->Currency());

$res = $transactionObj->Amount([
        'currency_id'=>'7bifjodnuQvsyU7umAiveISacVbBQT7A',
        'fiat_name' => 'USD',
        'fiat_amount' =>'0.001'
    ]);

var_dump($res);






