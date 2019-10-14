<?php

namespace VaidasRuskys\SymfonySettings\SettingsBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class SetSettingsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
    }
}
