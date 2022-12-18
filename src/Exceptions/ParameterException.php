<?php

namespace ZYKUtil\UniSn\Exceptions;

use Exception;

class ParameterException extends Exception
{
    public function __construct($message = null)
    {
        $this->message = $message == null ? 'Parameter setting error' : $message;
        parent::__construct();
    }
}
