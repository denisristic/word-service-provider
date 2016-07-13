# Silex WordServiceProvider

## Introduction

This service provider for Silex allows you to quickly generate Word (*.doc) documents. Either pass in a query result
set, and a list of headers, or use the Doctrine functionality to convert a html to a document.


## Installation

Require the provider using `composer`:

        composer require denisristic/word-service-provider
        
Register the provider in your application somewhere:

        $app->register(new \denisristic\WordServiceProvider\Provider\WordServiceProvider());

## Usage

Generate a document from HTML:

```php
        $word = $app['word']->generateDOC('<h1>Test HTML header</h1>');
```        

        
Forcing a download of the spreadsheet:

```php
        $controllers->get('/download', function () use($app) {
        
            $word = $app['word']->generateDOC('<h1>Test HTML header</h1>');

            $docName = 'entries-' . date('Y-m-dhis') . '.doc';
            $response = new Response($word);
            $response->headers->add(array(
                'Content-Type' => 'application/vns.ms-word'
                ,'Content-Disposition' => 'inline; filename="' . $docName . '"'
                ,'Pragma' => 'no-cache'
                ,'Expired' => 0
            ));
            return $response;
                
        })->bind('download');
```