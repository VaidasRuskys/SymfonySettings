<?php

namespace VaidasRuskys\DatabaseTranslator\Translation\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use VaidasRuskys\SymfonySettings\SettingsBundle\Translator;

class SetSettingsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
    }
}
