<?php

namespace HtUserRegistrationDoctrineORM\Mapper;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class UserRegistrationMapperFactory implements FactoryInferface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        die('user mapper facotry init');

        $options = $serviceLocator->get('HtUserRegistration\ModuleOptions');
        $entityClass = $options->getRegistrationEntityClass();

        $mapper = new UserRegistrationMapper();
        $mapper->setObjectManager($serviceLocator->find($options->getObjectManager));
        $mapper->setEntityClass($entityClass);
die('mapper created');
        return $mapper;
    }
}
