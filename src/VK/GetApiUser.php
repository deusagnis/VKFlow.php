<?php

namespace MGGFLOW\VKFlow\VK;

use MGGFLOW\VK\API;

class GetApiUser
{
    public static function get(API $api){
        $user = $api->users->get()->expore(true,3,true);

        return $user[0];
    }
}