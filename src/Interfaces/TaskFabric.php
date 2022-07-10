<?php

namespace MGGFLOW\VKFlow\Interfaces;

use MGGFLOW\VK\API;
use MGGFLOW\VK\Automatic\Interfaces\Task;

interface TaskFabric
{
    /**
     * Make Task for Profile from Task data.
     * @param object $taskNote
     * @param object $profile
     * @return Task
     */
    public function make(object $taskNote,object $profile): Task;

    /**
     * Get API object used in Task.
     * @return API
     */
    public function getApi(): API;
}