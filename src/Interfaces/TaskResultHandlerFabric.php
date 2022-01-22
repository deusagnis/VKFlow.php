<?php

namespace MGGFLOW\VKFlow\Interfaces;

interface TaskResultHandlerFabric
{
    public function make($taskNote,$profile,$api,$result): TaskResultHandler;
}