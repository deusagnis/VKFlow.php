<?php

namespace MGGFLOW\VKFlow\Interfaces;

interface TaskQueue
{
    public function shiftTask(): ?object;
}