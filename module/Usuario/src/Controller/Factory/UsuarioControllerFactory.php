<?php

namespace Usuario\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Usuario\Controller\IndexController as index;
use Zend\Authentication\AuthenticationService as AuthenticationService ;


class UsuarioControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        
        $entityManager= $container->get('doctrine.entitymanager.orm_default');
        $authService = $container->get(AuthenticationService::class);
        return new index($entityManager,  $authService);
    }
}

