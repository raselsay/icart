<?php

namespace Cart;
use DI\ContainerBuilder;
use Slim\App as DIBridge;
class App extends DIBridge
{
    protected function configureContainer(ContainerBuilder $builder)
    {
           $builder->addDefinitions([
                'settings.displayErrorDetails'=>true,
           ]);
    }
}
