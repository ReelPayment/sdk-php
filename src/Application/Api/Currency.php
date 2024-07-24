<?php
/*
 * This file is part of the ReelPay SDK-PHP package.
 *
 * (c) ReelPay <support@reelpay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Reelpay\Application\Api;
/*
 * Get the list of supported cryptocurrencies for you (the cryptocurrency you selected when creating the API KEY on the merchant platform)
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class Currency implements ApiInterface
{
    public function url()
    {
        return "/v1/transactions/currency";
    }

    public function parameter()
    {
        return array();
    }
}
