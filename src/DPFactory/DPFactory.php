<?php

namespace ZYKUtil\UniSn\DPFactory;

use ZYKUtil\UniSn\AbstractDPFactory;
use ZYKUtil\UniSn\DPFactory\Factory\AbstractUniSn;
use ZYKUtil\UniSn\Exceptions\ParameterException;
use ZYKUtil\UniSn\ParameterResolver;
use Illuminate\Support\Arr;

class DPFactory extends AbstractDPFactory
{

    /**
     * Check Parameters
     * @throws ParameterException
     */
    public function checkResolver(): void
    {
        if (!Arr::has(FactoryTypeEnum::$Arr, $this->resolver->getArgs()['default']['factory_type'])) {
            throw new ParameterException();
        }
    }

    /**
     * Get UNI SN directly
     *
     * @return mixed
     * @throws ParameterException
     */
    public function getSN(): string
    {
        return $this->getFactory($this->resolver->getArgs()['default']['factory_type'], $this->resolver)->generate();
    }

    /**
     * @param int $type
     * @param ParameterResolver $resolver
     * @return AbstractUniSn
     * @throws ParameterException
     */
    public function getFactory(int $type, ParameterResolver $resolver): AbstractUniSn
    {
        if (Arr::has(FactoryTypeEnum::$Arr, $type)) {
            return app(FactoryTypeEnum::$Arr[$type])->setResolver($resolver);
        } else {
            throw new ParameterException('unique type undefined.');
        }
    }
}
