<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use Carbon\Carbon;
use ZYKUtil\UniSn\Exceptions\ParameterException;

class TimestampOnly extends AbstractUniSn
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
        return $this->resolver->getArgs()['default']['prefix'] . Carbon::now()->timestamp . $this->resolver->getArgs()['interval_symbol'] . abs(crc32(uniqid(microtime(true))));
    }
}
