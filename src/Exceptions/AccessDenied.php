<?php

namespace MGGFLOW\VKFlow\Exceptions;

use Exception;

class AccessDenied extends Exception
{
    protected $message = 'Access denied.';
}