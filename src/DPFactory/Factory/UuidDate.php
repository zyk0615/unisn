<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use Carbon\Carbon;
use Illuminate\Support\Str;

class UuidDate extends AbstractUniSn
{
    /**
     * @return void
     * @throws \ZYKUtil\UniSn\Exceptions\ParameterException
     */
    public function checkResolver(): void
    {
        parent::checkResolver();
    }

    public function generate(): string
    {
        $date = Carbon::now()->format($this->resolver->getArgs()['date_format']);
        return $this->resolver->getArgs()['default']['prefix'] . Str::orderedUuid() . $this->resolver->getArgs()['interval_symbol'] . $date;
    }
}
