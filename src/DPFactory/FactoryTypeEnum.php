<?php

namespace ZYKUtil\UniSn\DPFactory;

use ZYKUtil\UniSn\DPFactory\Factory\DateDataCount;
use ZYKUtil\UniSn\DPFactory\Factory\DateRandom;
use ZYKUtil\UniSn\DPFactory\Factory\TimestampOnly;
use ZYKUtil\UniSn\DPFactory\Factory\UuidDate;
use ZYKUtil\UniSn\DPFactory\Factory\UuidDateDataCount;
use ZYKUtil\UniSn\DPFactory\Factory\UuidOnly;

class FactoryTypeEnum
{
    const TIMESTAMP_ONLY = 0;
    const DATE_RANDOM = 1;
    const DATE_DATA_COUNT = 2;
    const UUID_ONLY = 3;
    const UUID_DATE = 4;
    const UUID_DATE_DATA_COUNT = 5;

    public static array $Arr = [
        self::TIMESTAMP_ONLY =>  TimestampOnly::class,
        self::DATE_RANDOM => DateRandom::class,
        self::DATE_DATA_COUNT => DateDataCount::class,
        self::UUID_ONLY => UuidOnly::class,
        self::UUID_DATE => UuidDate::class,
        self::UUID_DATE_DATA_COUNT => UuidDateDataCount::class
    ];
}
