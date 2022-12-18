<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use ZYKUtil\UniSn\Exceptions\ParameterException;

class UuidDateDataCount extends AbstractUniSn
{
    /**
     * @return void
     * @throws ParameterException
     */
    public function checkResolver(): void
    {
        if (Str::length($this->resolver->getArgs()['default']['pad_length']) <= 0 || intval($this->resolver->getArgs()['default']['pad_length']) <= 0 || intval($this->resolver->getArgs()['default']['pad_length']) > intval($this->resolver->getArgs()['max_length'])) {
            throw new ParameterException();
        }
        parent::checkResolver();
    }


    public function generate(): string
    {
        $prefix = $this->resolver->getArgs()['default']['prefix'] . Str::orderedUuid() .
            $this->resolver->getArgs()['interval_symbol'] . Carbon::now()->format($this->resolver->getArgs()['date_format'])
            . $this->resolver->getArgs()['interval_symbol'];

        $count = DB::table($this->resolver->getArgs()['default']['table'])->where(
            $this->resolver->getArgs()['default']['column'],
            'like',
            $prefix . '%'
        )->count($this->resolver->getArgs()['default']['column']);
        if ($count <= 0) {
            $count = 1;
        } else {
            $count++;
        }

        return $prefix . str_pad(
                $count,
                $this->resolver->getArgs()['default']['pad_length'],
                0,
                STR_PAD_LEFT
            );
    }
}
