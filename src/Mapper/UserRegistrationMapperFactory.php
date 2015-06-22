<?php

namespace HtUserRegistrationDoctrineORM\Mapper;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class UserRegistrationMapperFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $options = $serviceLocator->get('HtUserRegistration\ModuleOptions');
        $entityClass = $options->getRegistrationEntityClass();

        $mapper = new UserRegistrationMapper();
        $mapper->setObjectManager($serviceLocator->get($options->getDoctrineObjectManager()));
        $mapper->setEntityClass($entityClass);

        return $mapper;
    }
}
