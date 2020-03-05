<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * このアプリケーションで信用するプロキシ
     *
     * @var string|array
     */
    protected $proxies = '*';

    /**
     * プロキシを検出するために使用するヘッダ
     *
     * @var string
     */
    Request::HEADER_X_FORWARDED_AWS_ALL;
}