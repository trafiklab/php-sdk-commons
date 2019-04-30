<?php


namespace Trafiklab\Common\Internal;


class WebResponse
{
    private $_responseCode;
    private $_body;

    public function __construct(int $responseCode,  $body)
    {
        $this->_responseCode = $responseCode;
        $this->_body = $body;
    }

    /**
     * The HTTP body received from the server.
     * @return mixed The HTTP response code received from the server.
     */
    public function getBody()
    {
        return $this->_body;
    }

    /**
     * The HTTP response code received from the server.
     * @return int The HTTP response code received from the server.
     */
    public function getResponseCode(): int
    {
        return $this->_responseCode;
    }


}