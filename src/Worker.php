<?php

namespace MGGFLOW\VKFlow;

use MGGFLOW\ExceptionManager\Interfaces\UniException;
use MGGFLOW\ExceptionManager\ManageException;
use MGGFLOW\Tools\TimeMeter;
use MGGFLOW\VKFlow\Interfaces\ProfileData;
use MGGFLOW\VKFlow\Interfaces\TaskFabric;
use MGGFLOW\VKFlow\Interfaces\TaskQueue;
use MGGFLOW\VKFlow\Interfaces\TaskResultHandlerFabric;

/**
 * Worker to perform Tasks.
 */
class Worker
{
    protected TaskQueue $taskQueue;
    protected TaskFabric $taskFabric;
    protected ProfileData $profileData;
    protected TaskResultHandlerFabric $taskResultHandlerFabric;
    protected TimeMeter $timeMeter;

    public function __construct(
        ProfileData $profileData,
        TaskQueue $taskQueue, TaskFabric $taskFabric, TaskResultHandlerFabric $taskResultHandlerFabric
    )
    {
        $this->timeMeter = new TimeMeter();
        $this->profileData = $profileData;
        $this->taskQueue = $taskQueue;
        $this->taskFabric = $taskFabric;
        $this->taskResultHandlerFabric = $taskResultHandlerFabric;
    }

    /**
     * Perform one task.
     * @return void
     * @throws UniException
     * @throws UniException
     */
    public function perform()
    {
        $taskNote = $this->taskQueue->shiftTask();
        if (empty($taskNote)) {
            throw ManageException::build()
                ->log()->info()->b()
                ->desc()->not('Task')->found()->b()
                ->fill();
        }

        $profile = $this->profileData->getById($taskNote->profile_id);
        if (empty($profile)) {
            throw ManageException::build()
                ->log()->info()->b()
                ->desc()->not('Profile')->found()
                ->context($taskNote, 'taskNote')->b()
                ->fill();
        }

        $task = $this->taskFabric->make($taskNote, $profile);

        $result = $task->execute();
        $result->elapsedTime = $this->timeMeter->timeBetween();

        $resultHandler = $this->taskResultHandlerFabric->make($taskNote, $profile, $this->taskFabric->getApi(), $result);
        $resultHandler->handle();
    }
}