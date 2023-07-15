<?php
/*
 * This file is part of the ReelPay SDK-PHP package.
 *
 * (c) ReelPay <support@reelpay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
