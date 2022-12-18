<?php

namespace ZYKUtil\UniSn;


class ParameterResolver
{
    private array $args = [];

    /**
     */
    public function __construct()
    {
        $this->args = config('unisn');
    }

    public function getArgs(): array
    {
        return $this->args;
    }

    public function setIntervalSymbol($value): static
    {
        $this->args['interval_symbol'] = $value;
        return $this;
    }

    public function setMaxLength($value): static
    {
        $this->args['max_length'] = $value;
        return $this;
    }

    public function setDateFormat($value): static
    {
        $this->args['date_format'] = $value;
        return $this;
    }

    public function setFactoryType($value): static
    {
        $this->args['default']['factory_type'] = $value;
        return $this;
    }


    public function setTable($value): static
    {
        $this->args['default']['table'] = $value;
        return $this;
    }

    public function setTableColumn($value): static
    {
        $this->args['default']['column'] = $value;
        return $this;
    }

    public function setPrefix($value): static
    {
        $this->args['default']['prefix'] = $value;
        return $this;
    }

    public function setPadLength($value): static
    {
        $this->args['default']['pad_length'] = $value;
        return $this;
    }
}
