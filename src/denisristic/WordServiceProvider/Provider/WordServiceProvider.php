<?php

namespace denisristic\WordServiceProvider\Provider;

use Pimple\ServiceProviderInterface;

class WordServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['word'] = $app->share(function ($app) {
            return new \denisristic\WordServiceProvider\Generator\Word();
        });
    }

}
