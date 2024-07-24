<?php
/*
 * This file is part of the ReelPay SDK-PHP package.
 *
 * (c) ReelPay <support@reelpay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reelpay\Application;

use Reelpay\HttpRequest\Client;
use Reelpay\Application\API\ApiInterface;


class Transactions extends Client
{
    public $API_URL = 'https://api.reelpay.com/api';

    function __construct(string $appID, $appKey)
    {
        $this->baseUrl = $this->API_URL;
        $this->appID   = $appID;
        $this->appKey  = $appKey;
    }
    
    public function call(ApiInterface $api)
    {
        return $this->request($api->url(), $api->parameter());
    }
}