<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use ZYKUtil\UniSn\Exceptions\ParameterException;
use Illuminate\Support\Str;

class UuidOnly extends AbstractUniSn
{
    /**
     * @return void
     * @throws ParameterException
     */
    public function checkResolver(): void
    {
        parent::checkResolver();
    }

    public function generate(): string
    {
        return $this->resolver->getArgs()['default']['prefix'] . Str::orderedUuid();
    }
}
