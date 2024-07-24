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
 * Hosted payment Submit the information you want to receive payment to reelpay It will return you a payment address You guide users to pay cryptocurrency to this address
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class EntrustPay implements ApiInterface
{
    /**
     * Your order ID
     * @param $outTradeNo string
     */
    public $outTradeNo;
    /**
     * FiatName(logogram) Required
     * @param $fiatName string
     */
    public $fiatName;
    /**
     * FiatAmount (Required)
     * @param $fiatAmount string
     */
    public $fiatAmount;
    /**
     * Your store name (This name will be displayed on the payment interface to make users trust you)
     * @param $name string
     */
    public $name;
    /**
     * product picture
     * @param $image string
     */
    public $image;
    /**
     * product description
     * @param $describe string
     */
    public $describe;
    /**
     * Payment result callback address If you do not provide this parameter, we will use the callback address you filled in when you created the API KEY
     * @param $describe string
     */
    public $callbackUrl;
    
    public function url()
    {
        return "/v1/transactions/entrust";
    }

    public function parameter()
    {
        return array(
            "out_trade_no" => $this->outTradeNo,
            "symbol" => $this->fiatName,
            "amount" => $this->fiatAmount,
            "name" => $this->name,
            "describe" => $this->describe,
            "image" => $this->image,
            "callback_url" => $this->callbackUrl,
        );
    }
}