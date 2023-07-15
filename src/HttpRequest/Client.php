<?php


namespace Reelpay\HttpRequest;

/**
 * Class Client
 * @package Reelpay\HttpRequest
 */
class Client
{
    protected $baseUrl;
    protected $appID;
    protected $appKey;

    /**
     * @param $url
     * @param array $data
     * @param int $second
     * @return bool|string
     */
    protected function request($url, $data, $second = 30)
    {
        $cover = new Cover($this->appKey, $data);
        $cover->HmacSHA256Sign();
        $header = array(
            'content-type:application/json',
            "X-Timestamp:{$cover->timestamp}",
            "X-Appid:{$this->appID}",
            "X-Sign:{$cover->sign}"
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        curl_setopt($ch, CURLOPT_URL, $this->baseUrl.$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->baseUrl.$url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $cover->body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
}