<?php

namespace VaidasRuskys\SymfonySettings\SettingsBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use VaidasRuskys\SymfonySettings\SettingsBundle\DependencyInjection\Compiler\SetSettingsPass;
use VaidasRuskys\SymfonySettings\SettingsBundle\DependencyInjection\SymfonySettingsExtension;

class SettingsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass($translatorPass = new SetSettingsPass());
    }

    public function getContainerExtension()
    {
        return new SymfonySettingsExtension();
    }
}
