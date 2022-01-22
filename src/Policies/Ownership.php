<?php

namespace MGGFLOW\VKFlow\Policies;

use MGGFLOW\VKFlow\Exceptions\AccessDenied;

class Ownership
{
    public static function belongsTo(object $something,object $user){
        if ($user->id != $something->owner_id) {
            throw new AccessDenied();
        }
    }
}