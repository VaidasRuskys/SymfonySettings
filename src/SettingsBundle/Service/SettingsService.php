<?php

namespace VaidasRuskys\SymfonySettings\SettingsBundle\Service;

use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;
use Symfony\Component\Cache\Simple\NullCache;
use VaidasRuskys\SymfonySettings\SettingsBundle\Storage\SettingsStorageInterface;

class SettingsService
{
    /** @var CacheInterface */
    private $cache;

    /** @var SettingsStorageInterface[] */
    private $storages = [];

    /**
     * SettingsService constructor.
     */
    public function __construct()
    {
        $this->cache = new NullCache();
    }

    /**
     * @param string|null $key
     * @return bool|mixed|null
     * @throws InvalidArgumentException
     */
    public function has(?string $key)
    {
        if ($value = $this->cache->get($key)) {
            return $value;
        }

        foreach ($this->storages as $storage) {
            if ($storage->has($key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string|null $key
     * @return mixed|null
     * @throws InvalidArgumentException
     */
    public function get(?string $key)
    {
        if ($value = $this->cache->get($key)) {
            return $value;
        }

        foreach ($this->storages as $storage) {
            if ($storage->has($key)) {
                return $storage->get($key);
            }
        }
    }

    public function addStorage(SettingsStorageInterface $settingsStorage)
    {
        array_unshift($this->storages, $settingsStorage);
    }
}