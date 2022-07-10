<?php

namespace MGGFLOW\VKFlow\Interfaces;

interface TaskQueue
{
    /**
     * Take data of Task to execution.
     * @return object|null
     */
    public function shiftTask(): ?object;
}