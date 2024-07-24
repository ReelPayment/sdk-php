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
 * The merchant can refund the payment to the user's address through this interface. (When refunding, the user's address must be actual; the contract address may result in the user not receiving the correct payment.)
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class Refund implements ApiInterface
{
    /**
     * The payment order ID returned to you by Reelpay (required)
     * @param $tradeNo string
     */
    public $tradeNo;
    /**
     * GAS fee deduction method「1: merchant 2: user」
     * @param $fuel int
     */
    public $fuel;
    
    public function url()
    {
        return "/v1/transactions/refund";
    }

    public function parameter()
    {
        return array(
            "trade_no" => $this->tradeNo,
            "fuel"   => $this->fuel,
        );
    }
}
