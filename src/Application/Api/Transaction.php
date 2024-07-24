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
 * Get order information
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class Transaction implements ApiInterface
{
    /**
     * The payment order ID returned to you by Reelpay (Required)
     * @param $tradeNo int
     */
    public $tradeNo;
    
    public function url()
    {
        return "/v1/transactions";
    }

    public function parameter()
    {
        return array(
            "trade_no" => $this->tradeNo,
        );
    }
}
