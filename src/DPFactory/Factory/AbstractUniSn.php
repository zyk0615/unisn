<?php

namespace ZYKUtil\UniSn\DPFactory\Factory;

use ZYKUtil\UniSn\IUniSn;
use ZYKUtil\UniSn\ResolverTrait;
use Illuminate\Support\Facades\DB;

abstract class AbstractUniSn implements IUniSn
{
    use ResolverTrait;

    /**
     * Generate UNI SN
     * @return string
     */
    abstract public function generate(): string;

    protected function checkDataCount($prefix , &$count = 1)
    {
        $sn = $prefix . str_pad(
                $count,
                $this->resolver->getArgs()['default']['pad_length'],
                0,
                STR_PAD_LEFT
            );
        $status = DB::table($this->resolver->getArgs()['default']['table'])->where(
                $this->resolver->getArgs()['default']['column'], $sn
            )->count($this->resolver->getArgs()['default']['column']) > 0;

        if ($status) {
            $count++;
            self::checkDataCount($prefix , $count);
        }
        return $prefix . str_pad(
                $count,
                $this->resolver->getArgs()['default']['pad_length'],
                0,
                STR_PAD_LEFT
            );
    }
}
