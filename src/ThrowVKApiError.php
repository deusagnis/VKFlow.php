<?php

namespace MGGFLOW\VKFlow;

use MGGFLOW\VKFlow\Exceptions\VKError;

trait ThrowVKApiError
{
    protected static function catchVKApiError(&$response){
        if(isset($response->error)){
            throw new VKError($response->error->error_msg,$response->error->error_code);
        }
    }
}