<?php

namespace MGGFLOW\VKFlow\Interfaces;

interface TaskResultHandlerFabric
{
    /**
     * Make handler for task result.
     * @param $taskNote
     * @param $profile
     * @param $api
     * @param $result
     * @return TaskResultHandler
     */
    public function make($taskNote,$profile,$api,$result): TaskResultHandler;
}