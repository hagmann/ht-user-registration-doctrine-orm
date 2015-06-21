<?php

namespace HtUserRegistrationDoctrineORM\Mapper;

use ZfcUser\Entity\UserInterface;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;

class UserRegistrationMapper implements
    UserRegistrationMapperInterface,
    ObjectManagerAwareInterface
{
    protected $objectManager;
    protected $entityClass;

    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;

        return $this;
    }

    public function getEntityClass()
    {
        return $this->entityClass;
    }

    /**
     * Set the object manager
     *
     * @param ObjectManager|EntityManagerInterface $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager|EntityManagerInterface
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    public function findByUser(UserInterface $user)
    {
        $this->getObjectManager()->getRepository($this->getEntityClass())->
            findOneBy(array(
                'user' => $user,
            ))
        ;

    }

}
