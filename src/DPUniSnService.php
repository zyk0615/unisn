<?php

namespace ZYKUtil\UniSn;

use ZYKUtil\UniSn\DPFactory\DPFactory;

class DPUniSnService
{
    private ParameterResolver $resolver;
    private AbstractDPFactory $factory;

    public function __construct()
    {
        $this->resolver = new ParameterResolver();
        $this->factory = (new DPFactory())->setResolver($this->resolver);
    }

    /**
     * @throws Exception\ParameterException
     */
    public function execute(): string
    {
        $this->factory->checkResolver();
        return $this->factory->getSN();
    }

    /**
     * @param AbstractDPFactory $factory
     * @return $this
     */
    public function setFactory(AbstractDPFactory $factory): static
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @param ParameterResolver $resolver
     * @return $this
     */
    public function setResolver(ParameterResolver $resolver): static
    {
        $this->resolver = $resolver;
        $this->factory->setResolver($resolver);
        return $this;
    }

    /**
     * @return ParameterResolver
     */
    public function getResolver(): ParameterResolver
    {
        return $this->resolver;
    }

    /**
     * @return AbstractDPFactory|DPFactory
     */
    public function getFactory(): DPFactory|AbstractDPFactory
    {
        return $this->factory;
    }
}
