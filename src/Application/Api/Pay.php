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
 * Submit a ReelPay payment order and get an acknowledgment message through this interface.
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class Pay implements ApiInterface
{
    /**
     * Your order ID
     * @param $outTradeNo string
     */
    public $outTradeNo;
    /**
     * The currency ID obtained in the Currency interface. (Required)
     * @param $currencyID string
     */
    public $currencyID;
    /**
     * FiatName(logogram) (Required)
     * @param $fiatName string
     */
    public $fiatName;
    /**
     * FiatAmount (Required)
     * @param $fiatAmount string
     */
    public $fiatAmount;
    /**
     * Payment result callback address If you do not provide this parameter, we will use the callback address you filled in when you created the API KEY
     * @param $callbackUrl string
     */
    public $callbackUrl;

    public function url()
    {
        return "/v1/transactions/pay";
    }

    public function parameter()
    {
        return array(
            "out_trade_no" => $this->outTradeNo,
            "currency_id" => $this->currencyID,
            "fiat_name" => $this->fiatName,
            "fiat_amount" => $this->fiatAmount,
            "callback_url" => $this->callbackUrl,
        );
    }
}