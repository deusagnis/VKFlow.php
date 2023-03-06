<?php

namespace MGGFLOW\VKFlow\Policies;

use MGGFLOW\ExceptionManager\Interfaces\UniException;
use MGGFLOW\ExceptionManager\ManageException;

class Ownership
{
    /**
     * True if user owns something.
     * @param object $something
     * @param object $user
     * @return void
     * @throws UniException
     */
    public static function belongsTo(object $something, object $user)
    {
        if ($user->id != $something->owner_id) {
            throw ManageException::build()
                ->log()->info()->b()
                ->desc()->denied('Access')
                ->context($something, 'something')
                ->context($user, 'user')->b()
                ->fill();
        }
    }
}