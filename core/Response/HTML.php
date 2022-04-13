<?php

namespace Core\Response;

use GuzzleHttp\Psr7\Response;

class HTML extends Response
{
    public function __construct($body = null, $status = 200, $headers = [])
    {
        parent::__construct(
            $status,
            array_merge(
                [
                    'Content-type' => 'text/html',
                ],
                $headers
            ),
            $body,
        );
    }
}