<?php

namespace ZYKUtil\UniSn;

use ZYKUtil\UniSn\Exceptions\ParameterException;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait ResolverTrait
{
    protected ParameterResolver $resolver;

    public function setResolver(ParameterResolver $resolver): static
    {
        $this->resolver = $resolver;
        return $this;
    }

    public function getResolver(): ParameterResolver
    {
        return $this->resolver;
    }


    /**
     * Only Check table and column parameters
     * @throws ParameterException
     */
    public function checkResolver(): void
    {
        if ($this->resolver->getArgs()['default']['table'] == null || $this->resolver->getArgs()['default']['column'] == null) {
            throw new ParameterException();
        }

        if (Str::length($this->resolver->getArgs()['default']['table']) > 0) {
            if (!Schema::hasTable($this->resolver->getArgs()['default']['table'])) {
                throw new ParameterException();
            }

            if (!Schema::hasColumn($this->resolver->getArgs()['default']['table'], $this->resolver->getArgs()['default']['column'])) {
                throw new ParameterException();
            }
        }
    }
}
