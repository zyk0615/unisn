<?php

namespace ZYKUtil\UniSn;

use Illuminate\Support\Facades\Facade;

class UniSnFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return DPUniSnService::class;
    }
}
