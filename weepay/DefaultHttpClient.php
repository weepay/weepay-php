<?php

namespace weepay;

class DefaultHttpClient implements HttpClient
{
    private $curl;

    public function __construct($curl = null)
    {
        if (!$curl) {
            $curl = new Curl();
        }
        $this->curl = $curl;
    }

    public static function create($curl = null)
    {
        return new DefaultHttpClient($curl);
    }

    public function get($url)
    {

    }

    public function post($url, $header = null, $content=null)
    {
        return $this->curl->exec($url, array(
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $content,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_VERBOSE => false,
            CURLOPT_HTTPHEADER => array("Content-Type:application/json"),
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HEADER => false,
            // CURLOPT_HTTPHEADER => $header,
        ));
    }

    public function put($url, $header, $content)
    {
    }

    public function delete($url, $header, $content = null)
    {
    }
}
