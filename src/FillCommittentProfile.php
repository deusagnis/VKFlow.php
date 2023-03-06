<?php

namespace MGGFLOW\VKFlow;

use MGGFLOW\VK\API;
use MGGFLOW\VKFlow\Exceptions\VKError;
use MGGFLOW\VKFlow\VK\GetApiUser;

class FillCommittentProfile
{
    use ThrowVKApiError;

    protected object $profile;
    protected API $api;

    public function __construct(API $api, object $profile)
    {
        $this->profile = $profile;

        $this->api = $api;
    }

    /**
     * Fill committent profile object.
     * @return object
     * @throws VKError
     */
    public function fill(): object
    {
        $this->setVK();
        $this->setRang();
        $this->setStatus();

        return $this->profile;
    }

    /**
     * @throws VKError
     */
    protected function setVK()
    {
        $profileVK = GetApiUser::get($this->api);
        self::catchVKApiError($this->api->response);

        $this->profile->vk_id = $profileVK->id;
    }

    protected function setRang()
    {
        $this->profile->rang_id = 2;
    }

    protected function setStatus()
    {
        $this->profile->status_id = 0;
    }

}