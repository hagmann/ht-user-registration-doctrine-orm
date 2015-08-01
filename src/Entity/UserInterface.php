<?php

namespace APISkeletons\HtUserRegistrationDoctrineORM\Entity;

use HtUserRegistration\Entity\UserRegistrationInterface;

interface UserInterface
{
    public function getUserRegistration();
    public function setUserRegistration(UserRegistrationInterface $value);
}
