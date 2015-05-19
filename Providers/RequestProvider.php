<?php

namespace EXS\RequestProvider\Providers;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use EXS\RequestProvider\Services\RequestService;

/**
 * Description of ServiceProvider
 *
 * Created 1-May-2015
 * @author Charles Weiss <charlesw@ex-situ.com>
 * @copyright   Copyright 2015 ExSitu Marketing.
 */
class RequestProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['exs.serv.request'] = ( function ($app) {
            return new RequestService($app['request_stack']->getCurrentRequest());
        });
    }
}
