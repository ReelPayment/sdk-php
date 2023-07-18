<p align="center">
    <a href="https://reelpay.com/" target="_blank" rel="external">
        <img src="https://github.com/ReelPayment/sdk-php/blob/main/logo.png" height="100px">
    </a>
    <h1 align="center">ReelPay SDK-PHP</h1>
    <br>
</p>

ReelPay is committed to helping users quickly transition from Web 2.0 to Web 3.0, attract new users, and collect mainstream currency protocol gateways like BTC, ETH, BSC, SOL, and TRX. Moreover, it aims to help safeguard payment security and provide services such as contract receiving, notifications for address receiving, QR Code receiving, and social promotion.

Documentation is at <a href="https://docs.reelpay.com/" target="_blank" rel="external">https://docs.reelpay.com/</a>.


Requirements
------------
php: >=7.0.0
ext-json: *
ext-openssl: *
At least reelpay sdk-php version 1.0.0 is required for all components to work properly.

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require reelpay/sdk-php:"~1.0.0"
```

or add

```json
"reelpay/sdk-php": "~1.0.0"
```

to the require section of your composer.json.


Configuration
-------------

To use this extension, you have to configure the Connection class in your application configuration:

```php
require_once('vendor/autoload.php');

use Reelpay\Reelpay;

$transaction = Reelpay::Transaction(
    'eqrbntqbi5uqvkpr',
    'XhAlbICW10VJnWGruPL0NSnvb6946JDQ'
);
$res = $transaction->EntrustPay(
    "out_trade_no", 
    "USD", 
    "1.2", 
    "Product name", 
    "https://reelpay.com/product.jpg"
);
var_dump($res);
// Todo: $payUrl = $res['data']['url'];

```

## Where can I get Appid and Appkey?
Register and open a merchant account, go to application <a href="https://merchant.reelpay.com/" target="_blank" rel="external">management</a> after login background, and create and apply for an application to get the corresponding Appied and Appkey.
