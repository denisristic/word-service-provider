<?php

namespace denisristic\WordServiceProvider\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class WordServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['word'] = function ($app) {
            return new \denisristic\WordServiceProvider\Generator\Word();
        };
    }

}
