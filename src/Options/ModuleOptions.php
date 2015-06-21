<?php

namespace HtUserRegistrationDoctrineORM\Options;

use HtUserRegistration\Options\ModuleOptions as HtUserRegistrationModuleOptions;

class ModuleOptions extends HtUserRegistrationModuleOptions implements DoctrineORMOptionsInterface
{
    protected $objectManager = 'doctrine.entitymanager.orm_default';

    public function setObjectManager($objectManager)
    {
        $this->objectManager = $objectManager;

        return $this;
    }

    public function getObjectManager()
    {
        return $this->objectManager;
    }
}
