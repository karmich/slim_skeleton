<?php

namespace Core\Response;

use GuzzleHttp\Psr7\Response;

class Json extends Response
{
    public function __construct($body = null, $status = 200, $headers = [])
    {
        parent::__construct(
            $status,
            array_merge(
                [
                    'Content-type' => 'application/json',
                ],
                $headers
            ),
            json_encode($body),
        );
    }
}