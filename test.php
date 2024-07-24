<?php
/*
 * This file is part of the ReelPay SDK-PHP package.
 *
 * (c) ReelPay <support@reelpay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once('src/HttpRequest/Cover.php');
require_once('src/HttpRequest/Client.php');
require_once('src/Application/Transactions.php');
require_once('src/Reelpay.php');
require_once('src/Application/Api/ApiInterface.php');
require_once('src/Application/Api/Currency.php');
require_once('src/Application/Api/OTCEntrustPay.php');
require_once('src/Application/Api/EntrustPay.php');
require_once('src/Application/Api/Pay.php');

use Reelpay\Reelpay;
use Reelpay\Application\Api\Currency;
use Reelpay\Application\Api\OTCEntrustPay;
use Reelpay\Application\Api\EntrustPay;
use Reelpay\Application\Api\Pay;

$transactionObj = Reelpay::Transaction('mklggmqkgg2qffm7','J2BDWEwF75wNHRiKi2qzQzULnxZCQEI9');

$currency = new Currency;
$currencyList = $transactionObj->call($currency);
if (empty($currencyList["code"]) || $currencyList["code"] != 200) {
    print_r($currencyList["message"]);
    return;
}
if (!isset($currencyList["data"]) && count($currencyList["data"]) == 0) {
    print_r("You haven't set the currency yet��");
  return;
}

$pay = new Pay;
$pay->currencyID = $currencyList["data"][0]["currency_id"];
$pay->outTradeNo = "jSWfrolOTdsadcYuUwkJbdw9IJUBeV";
$pay->fiatAmount = "100";
$pay->fiatName = "USD";
$pay->callbackUrl = "http://test.callbackUrl.com";
var_dump($transactionObj->call($pay));

$entrustPay = new EntrustPay;
$entrustPay->callbackUrl = "http://test.callbackUrl.com";
$entrustPay->outTradeNo = "jSWfrolOTdsadcYuUwkJbdw9IJUBeV";
$entrustPay->fiatName = "USD";
$entrustPay->fiatAmount = "100";
var_dump($transactionObj->call($entrustPay));

$otcEntrustPay = new OTCEntrustPay;
$otcEntrustPay->outTradeNo = "jSWfrolOTdsadcYuUwkJbdw9IJUBeV";
$otcEntrustPay->amount = "100";

var_dump($transactionObj->call($otcEntrustPay));