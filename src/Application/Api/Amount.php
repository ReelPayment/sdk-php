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
 * Interface Description: Get the current exchange price between TOKEN and fiat currency.
 * API document address
 * https://docs.reelpay.com/payment-api/api-interface
*/
class Amount implements ApiInterface
{
    /**
     * currencyID  (Required)
     * @param $currencyID string
     */
    public $currencyID;
    /**
     * FiatName(logogram)  (Required)
     * @param $fiatName string
     */
    public $fiatName;
    /**
     * FiatAmount  (Required)
     * @param $fiatAmount string
     */
    public $fiatAmount;

    public function url()
    {
        return "/v1/transactions/amount";
    }

    public function parameter()
    {
        return array(
            "currency_id" => $this->currencyID,
            "fiat_name"   => $this->fiatName,
            "fiat_amount" => $this->fiatAmount,
        );
    }
}
