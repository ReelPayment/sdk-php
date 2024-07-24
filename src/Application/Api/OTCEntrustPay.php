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
 * OTC entrusted payment Submit the information you want to receive to reelpay It will return you a payment address 
 * You guide the user to pay the fiat currency required by reelpay at this address Then your reelpay merchant will 
 * receive the cryptocurrency you want
 * 
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class OTCEntrustPay implements ApiInterface
{
    /**
     * Your order ID
     * @param $outTradeNo string
     */
    public $outTradeNo;
    /**
     * The amount of cryptocurrency you would like to receive
     * @param $amount string
     */
    public $amount;
    /**
     * Payment result callback address If you do not provide this parameter, we will use the callback address you filled in when you created the API KEY
     * @param $callbackUrl string
     */
    public $callbackUrl;
    
    public function url()
    {
        return "/v1/transactions/otc/entrust";
    }

    public function parameter()
    {
        return array(
            "out_trade_no" => $this->outTradeNo,
            "amount"       => $this->amount,
            "callback_url" => $this->callbackUrl,
        );
    }
}