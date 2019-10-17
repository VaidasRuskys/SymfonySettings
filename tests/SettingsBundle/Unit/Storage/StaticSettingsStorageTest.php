<?php

namespace VaidasRuskys\SymfonySettings\Tests\SettingsBundle\Unit\Storage;

use PHPUnit\Framework\TestCase;
use VaidasRuskys\SymfonySettings\SettingsBundle\Service\SettingsService;
use VaidasRuskys\SymfonySettings\SettingsBundle\Storage\StaticSettingsStorage;

class StaticSettingsStorageTest extends TestCase
{
    const KEY = 'KEY';
    const VALUE = 'VALUE';

    private $storage;

    private $service;

    public function testService()
    {
        self::assertEquals(self::VALUE, $this->service->get(self::KEY));
    }

    public function testStorage()
    {
        self::assertEquals(self::VALUE, $this->storage->get(self::KEY));
    }

    public function setUp(): void
    {
        $this->storage = new StaticSettingsStorage();
        $this->storage->setSettings($this->getSettings());
        $this->service = new SettingsService();

        $this->service->addStorage($this->storage);
    }

    private function getSettings()
    {
        return [
            self::KEY => self::VALUE
        ];
    }
}