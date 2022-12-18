<?php

namespace ZYKUtil\UniSn;

interface IUniSn
{
    /**
     * Too Generate UNI SN
     * 
     * @return string
     */
    public function generate(): string;
}
