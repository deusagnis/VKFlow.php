<?php

namespace MGGFLOW\VKFlow\Interfaces;

interface ProfileData
{
    /**
     * Get Profile by id.
     * @param $vkId
     * @return mixed
     */
    public function getById($vkId);
}