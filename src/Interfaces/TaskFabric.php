<?php

namespace MGGFLOW\VKFlow\Interfaces;

use MGGFLOW\VK\API;
use MGGFLOW\VK\Automatic\Interfaces\Task;

interface TaskFabric
{
    public function make(object $taskNote,object $profile): Task;
    public function getApi(): API;
}