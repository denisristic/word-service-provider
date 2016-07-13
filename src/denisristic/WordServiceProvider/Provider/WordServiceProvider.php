<?php

namespace denisristic\WordServiceProvider\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use denisristic\WordServiceProvider\Generator\Word;

class WordServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['word'] = function ($app) {
            return new Word();
        };
    }

}
