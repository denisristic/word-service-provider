<?php

namespace denisristic\WordServiceProvider\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class WordServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['word'] = $app->share(function ($app) {
            return new \denisristic\WordServiceProvider\Generator\Word();
        });
    }

    public function boot(Application $app)
    {
    }
}
