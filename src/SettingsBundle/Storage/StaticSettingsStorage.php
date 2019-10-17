<?php

namespace VaidasRuskys\SymfonySettings\SettingsBundle\Storage;

class StaticSettingsStorage implements SettingsStorageInterface
{
    private $settings = [];

    public function has(?string $key)
    {
        return isset($this->settings[$key]);
    }

    public function get(?string $key)
    {
        return $this->settings[$key] ?? null;
    }

    public function setSettings(array $settings)
    {
        $this->settings = $settings;
    }
}