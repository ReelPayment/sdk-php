<?php


namespace Reelpay\HttpRequest;

use Reelpay\Exceptions\Exception;


class Cover
{
    /**
     * Cover timestamp.
     *
     * @var string
     */
    public $timestamp;
    /**
     * Cover body.
     *
     * @var string
     */
    public $body;
    /**
     * Cover sign.
     *
     * @var string
     */
    public $sign;
    /**
     * Cover appKey.
     *
     * @var string
     */
    private $appKey;

    function __construct($appkey, $body)
    {
        $this->appKey = $appkey;
        $jsonStr = '{}';
        if (!empty($body)) {
            $jsonStr = json_encode($body);
        }
        if ($jsonStr == false) {
            return new Exception('json_encode fail', [], INVALID_PARAMETER);
        }
        $this->timestamp = time();
        $this->body = $jsonStr;
    }

    public function ValidateSign($signParam)
    {
        $this->hmacSHA256Sign();
        if ($signParam === $this->sign) {
            return true;
        }
        return false;
    }

    public function HmacSHA256Sign()
    {
        $this->sign = hash_hmac('sha256', $this->body.$this->timestamp, $this->appKey);
    }
}
