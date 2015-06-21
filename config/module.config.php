<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'HtUserRegistration\UserRegistrationMapper' =>
                'HtUserRegistrationDoctrine\Mapper\UserRegistrationMapperFactory',
            ),
        ),
    ),
);
