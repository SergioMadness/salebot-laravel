Library to communicate with [Salebot](https://salebot.pro/)
====

[![Latest Stable Version](http://poser.pugx.org/professionalweb/laravel-salebot/v)](https://packagist.org/packages/professionalweb/laravel-salebot) 
[![Total Downloads](http://poser.pugx.org/professionalweb/laravel-salebot/downloads)](https://packagist.org/packages/professionalweb/laravel-salebot) 
[![Latest Unstable Version](http://poser.pugx.org/professionalweb/laravel-salebot/v/unstable)](https://packagist.org/packages/professionalweb/laravel-salebot) 
[![License](http://poser.pugx.org/professionalweb/laravel-salebot/license)](https://packagist.org/packages/professionalweb/laravel-salebot)


Requirements
------------
- PHP 7.1.3+


Installation
------------
Module is available through [composer](https://getcomposer.org/)

composer require professionalweb/laravel-salebot "dev-develop"

Alternatively you can add the following to the `require` section in your `composer.json` manually:

```json
"professionalweb/laravel-salebot": "dev-develop"
```
Run `composer update` afterwards.

Using
-----------
At first you have to publish config. Add set API key in it.

Use professionalweb\salebot\Interfaces\Services with dependency injection.

```php
<?php use professionalweb\salebot\Interfaces\Services\Salebot;

class Test 
{
    /** @var Salebot */
    private $saleBotService;

    public function __construct(Salebot $service)
    {
        $this->saleBotService = $service;
    }
}
```

Not all methods are tested.


The MIT License (MIT)
---------------------

Copyright (c) 2021 Sergey Zinchenko

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.