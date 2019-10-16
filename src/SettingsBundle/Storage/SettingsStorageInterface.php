<?php

namespace VaidasRuskys\SymfonySettings\SettingsBundle\Storage;

interface SettingsStorageInterface
{
    public function get(?string $key);

    public function has(?string $key);
}