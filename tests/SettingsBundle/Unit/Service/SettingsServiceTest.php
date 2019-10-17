<?php

namespace VaidasRuskys\SymfonySettings\Tests\SettingsBundle\Unit\Service;

use PHPUnit\Framework\TestCase;
use VaidasRuskys\SymfonySettings\SettingsBundle\Service\SettingsService;
use VaidasRuskys\SymfonySettings\SettingsBundle\Storage\StaticSettingsStorage;

class SettingsServiceTest extends TestCase
{
    private $service;

    public function testService()
    {
        self::assertEquals('value1_0', $this->service->get('key0'));
        self::assertEquals('value1_2', $this->service->get('key1'));
        self::assertEquals('value2_2', $this->service->get('key2'));
    }

    public function setUp(): void
    {
        $this->service = new SettingsService();

        $storage1 = new StaticSettingsStorage();
        $storage1->setSettings(['key0'=>'value1_0','key1'=>'value1_1']);
        $this->service->addStorage($storage1);

        $storage2 = new StaticSettingsStorage();
        $storage2->setSettings(['key1'=>'value1_2', 'key2' => 'value2_2']);
        $this->service->addStorage($storage2);
    }
}