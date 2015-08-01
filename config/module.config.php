<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'HtUserRegistration\UserRegistrationMapper' =>
                'APISkeletons\HtUserRegistrationDoctrineORM\Mapper\UserRegistrationMapperFactory',

            'HtUserRegistration\ModuleOptions' =>
                'APISkeletons\HtUserRegistrationDoctrineORM\Options\ModuleOptionsFactory',
        ),
    ),
);
