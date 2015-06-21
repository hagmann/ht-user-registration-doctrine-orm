<?php

namespace HtUserRegistration\Mapper;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class UserRegistrationMapperFactory implements FactoryInferface 
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $options = $serviceLocator->get('HtUserRegistration\ModuleOptions');
        $mapper = new UserRegistrationMapper();
        $entityPrototypeClass = $options->getRegistrationEntityClass();
        $mapper->setEntityPrototype(new $entityPrototypeClass);

        return $mapper;
    }
}
