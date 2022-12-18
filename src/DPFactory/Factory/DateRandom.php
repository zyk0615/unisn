<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use Carbon\Carbon;
use ZYKUtil\UniSn\Exceptions\ParameterException;

class DateRandom extends AbstractUniSn
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
        $date = Carbon::now()->format($this->resolver->getArgs()['date_format']);
        return $this->resolver->getArgs()['default']['prefix'] . $date . $this->resolver->getArgs()['interval_symbol'] . abs(crc32(uniqid()));
    }
}
