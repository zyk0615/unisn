<?php

namespace ZYKUtil\UniSn;


use ZYKUtil\UniSn\DPFactory\Factory\AbstractUniSn;

abstract class AbstractDPFactory
{
    use ResolverTrait;

    public function __construct()
    {
    }

    /**
     * Too Generate UNI SN
     *
     * @return string
     */
    abstract public function getSN(): string;


    /**
     * Get UNI SN Type Factory
     * @param int $type
     * @param ParameterResolver $resolver
     * @return AbstractUniSn
     */
    abstract public function getFactory(int $type, ParameterResolver $resolver): AbstractUniSn;
}
