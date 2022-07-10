<?php

namespace MGGFLOW\VKFlow\Interfaces;

interface TaskResultHandler
{
    /**
     * Handle result of task execution.
     * @return mixed
     */
    public function handle();
}