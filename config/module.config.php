<?php

return array(
    'asdf' => array(
        'object_manager' => 'doctrine.entitymanager.orm_default',
    ),
    'service_manager' => array(
        'factories' => array(
            'HtUserRegistration\UserRegistrationMapper' =>
                'HtUserRegistrationDoctrineORM\Mapper\UserRegistrationMapperFactory',
            'HtUserRegistration\ModuleOptions' => 
                'HtUserRegistrationDoctrineORM\Options\ModuleOptions',
        ),
    ),
);
