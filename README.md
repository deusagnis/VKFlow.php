# VKFLOW core
## About
This package is core of backend logic of [VKFLOW](https://mggflow.in/vkflow) service.
## Usage
To install:
```
composer require mggflow/vkflow
```

Example of performing Task:
```
// Implements Interfaces/TaskQueue.
$taskQueue = new TaskQueue();
// Implements Interfaces/TaskFabric.
$taskFabric = new TaskFabric();
// Implements Interfaces/TaskResultHandlerFabric.
$taskResultHandlerFabric = new TaskResultHandlerFabric();
// Implements Interfaces/ProfileData.
$profileData = new ProfileData();

$worker = new Worker($profileData, $taskQueue, $taskFabric, $taskResultHandlerFabric);
$worker->perform();
```