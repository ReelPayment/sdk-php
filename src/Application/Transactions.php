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


class Transactions extends Client
{
    const API_URL = 'https://pay.reelpay.com';

    function __construct(string $appID, $appKey)
    {
        $this->baseUrl = self::API_URL;
        $this->appID   = $appID;
        $this->appKey  = $appKey;
    }

    public function Pay(array $req): array
    {
        return $this->request('/v1/transactions/pay', $req);
    }

    public function Amount(array $req): array
    {
        return $this->request('/v1/transactions/amount', $req);
    }

    public function Transaction(array $req): array
    {
        return $this->request('/v1/transactions', $req);
    }

    public function Close(array $req): array
    {
        return $this->request('/v1/transactions/close', $req);
    }

    public function Currency(): array
    {
        return $this->request('/v1/transactions/currency', []);
    }

    public function Refund(array $req): array
    {
        return $this->request('/v1/transactions/refund', $req);
    }
   
     /**
     * EntrustPay
     * @param string $out_trade_no
     * @param string $symbol Legal currency unit
     * @param string $amount Product price
     * @param string $name Product name
     * @param string $image Product image
     * @return array
     */
    public function EntrustPay($out_trade_no, $symbol, $amount, $name, $image): array
    {
        $req = [
            'out_trade_no' => $out_trade_no,
            'symbol'       => $symbol,
            'amount'       => $amount,
            'name'         => $name,
            'image'        => $image
        ];
        return $this->request('/v1/transactions/entrust', $req);
    }
}
