<?php

namespace MGGFLOW\VKFlow\VK;

use MGGFLOW\VK\API;

class GetApiUser
{
    /**
     * Get VK user object for API.
     * @param API $api
     * @return mixed
     */
    public static function get(API $api){
        $user = $api->users->get()->explore(true,3,true);

        return $user[0];
    }
}