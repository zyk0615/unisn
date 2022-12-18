<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use ZYKUtil\UniSn\IUniSn;
use ZYKUtil\UniSn\ResolverTrait;

abstract class AbstractUniSn implements IUniSn
{
    use ResolverTrait;

    /**
     * Generate UNI SN
     * @return string
     */
    abstract public function generate(): string;
}
