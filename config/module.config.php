<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'HtUserRegistration\UserRegistrationMapper' =>
                'HtUserRegistrationDoctrineORM\Mapper\UserRegistrationMapperFactory',

            'HtUserRegistration\ModuleOptions' =>
                'HtUserRegistrationDoctrineORM\Options\ModuleOptionsFactory',
        ),
    ),
);
