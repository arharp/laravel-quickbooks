<?php

namespace LifeOnScreen\LaravelQuickBooks\Resources;

use LifeOnScreen\LaravelQuickBooks\QuickBooksResource;
use QuickBooksOnline\API\Facades as QuickBooksFacades;

class QuickBookClass extends QuickBooksResource
{
    /**
     * The name of this resource.
     *
     * @var string
     */
    protected $name = 'Class';

    /**
     * QuickBooks Online API Facade
     *
     * @var string
     */
    protected $facade = QuickBooksFacades\QuickBookClass::class;
}