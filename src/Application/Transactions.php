<?php

namespace Reelpay\Application;

use Reelpay\HttpRequest\Client;


class Transactions extends Client
{
    const APIURL = 'https://api.reelpay.com';

    function __construct(string $appID, $appKey)
    {
        $this->baseUrl = self::APIURL;
        $this->appID = $appID;
        $this->appKey = $appKey;
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

}
