<?php

namespace VaidasRuskys\SymfonySettings\SettingsBundle\Service;

use VaidasRuskys\SymfonySettings\SettingsBundle\Storage\SettingsStorageInterface;

class SettingsService
{
    /** @var SettingsStorageInterface[] */
    private $storages = [];

    public function has(?string $key)
    {
        //TODO add caching

        foreach ($this->storages as $storage) {
            if ($storage->has($key)) {
                return true;
            }
        }

        return false;
    }

    public function get(?string $key)
    {
        //TODO add caching

        foreach ($this->storages as $storage) {
            if ($storage->has($key)) {
                return $storage->get($key);
            }
        }
    }

    public function addStorage(SettingsStorageInterface $settingsStorage)
    {
        $this->storages[] = $settingsStorage;
    }
}