<?php

namespace Reelpay;

use Reelpay\Application\Transactions;

/**
 * Class Reelpay
 * @package Reelpay
 */
class Reelpay
{
    /**
     * @param string $baseUrl
     * @param string $appID
     * @param string $appKey
     * @return Transactions
     */
    public static function Transaction(string $appID, $appKey) : Transactions
    {
        return new Transactions($appID, $appKey);
    }
}
