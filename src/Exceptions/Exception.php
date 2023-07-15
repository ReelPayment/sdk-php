<?php
/*
 * This file is part of the ReelPay SDK-PHP package.
 *
 * (c) ReelPay <support@reelpay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reelpay\Exceptions;

class Exception extends \Exception
{
    const UNKNOWN_ERROR = 9999;

    /**
     * parameter error
     */
    const INVALID_PARAMETER = 1;

    /**
     * config error
     */
    const INVALID_CONFIG = 2;
    /**
     * result error
     */
    const INVALID_RESULT = 3;

    /**
     * Raw error info.
     *
     * @var array
     */
    public $raw;

    /**
     * Bootstrap.
     *
     * @param string       $message
     * @param array|string $raw
     * @param int|string   $code
     */
    public function __construct($message = '', $raw = [], $code = self::UNKNOWN_ERROR)
    {
        $message = '' === $message ? 'Unknown Error' : $message;
        $this->raw = is_array($raw) ? $raw : [$raw];

        parent::__construct($message, intval($code));
    }
}
