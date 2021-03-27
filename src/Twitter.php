<?php

declare(strict_types=1);

namespace Atymic\Twitter;

use Atymic\Twitter\Contract\Configuration;
use Atymic\Twitter\Contract\Querier;
use InvalidArgumentException;

interface Twitter
{
    public const API_DOMAIN = 'api.twitter.com';
    public const API_VERSION_1 = '1.1';
    public const API_VERSION_2 = '2';

    public const VERSION = '3.x-dev';

    public const KEY_REQUEST_FORMAT = Querier::KEY_REQUEST_FORMAT;
    public const KEY_RESPONSE_FORMAT = Querier::KEY_RESPONSE_FORMAT;
    public const KEY_FORMAT = Querier::KEY_FORMAT;

    public const REQUEST_FORMAT_JSON = Querier::REQUEST_FORMAT_JSON;
    public const REQUEST_FORMAT_MULTIPART = Querier::REQUEST_FORMAT_MULTIPART;

    public const RESPONSE_FORMAT_ARRAY = Querier::RESPONSE_FORMAT_ARRAY;
    public const RESPONSE_FORMAT_OBJECT = Querier::RESPONSE_FORMAT_OBJECT;
    public const RESPONSE_FORMAT_JSON = Querier::RESPONSE_FORMAT_JSON;

    public const REQUEST_METHOD_GET = Querier::REQUEST_METHOD_GET;
    public const REQUEST_METHOD_POST = Querier::REQUEST_METHOD_POST;

    /**
     * @throws InvalidArgumentException
     */
    public function usingCredentials(string $accessToken, string $accessTokenSecret): self;

    /**
     * @throws InvalidArgumentException
     */
    public function usingConfiguration(Configuration $configuration): self;
}
