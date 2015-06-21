<?php

namespace HtUserRegistrationDoctrineORM\Options;

interface DoctrineORMOptionsInterface
{
    public function setObjectManager($objectManager);
    public function getObjectManager();
}
