HtUserRegistrationDoctrineORM
=============================

This module extends [HtUserRegistration](https://github.com/hrevert/HtUserRegistration)
by replacing the Zend DB code with Doctrine.

Install
-------

Require with composer
```
composer require apigility-skeletons/ht-user-registration-doctrine-orm
```

Include in config/application.config.php
```
    'modules' => array(
        ...
        'HtUserRegistration',
        'HtUserRegistrationDoctrineORM',  // include after HtUserRegistration
        ...
    ),
```


Configure
----------

Your User entity must implement `HtUserRegistrationDoctrineORM\Entity\UserInterface`.

Copy `ht-user-registration-doctrine-orm/config/ht-user-registration-doctrine-orm.global.php.dist`
to your autoload directory and rename to `ht-user-registration-doctrine-orm.global.php`.

Edit `ht-user-registration-doctrine-orm.global.php` for your configuration.  Dynamic mapping
joins the `UserRegistration` entity to your User entity.  Most important is to edit the
`$userEntity` variable with your Doctrine user entity.