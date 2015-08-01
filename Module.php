<?php

namespace APISkeletons\HtUserRegistrationDoctrineORM;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use APISkeletons\HtUserRegistrationDoctrineORM\EventListener\DynamicMappingSubscriber;

class Module
{
    public function onBootstrap($e)
    {
        $app = $e->getApplication();
        $sm = $app->getServiceManager();
        $options = $sm->get('HtUserRegistration\ModuleOptions');


        if ($options->getEnableDefaultEntities()) {
            $chain = $sm->get($options->getDoctrineDriver());
            $chain->addDriver(
                new XmlDriver(__DIR__ . '/config/orm'),
                'APISkeletons\HtUserRegistrationDoctrineORM\Entity'
            );
        }

        if ($options->getEnableDynamicMapping()) {
            $userClientSubscriber = new DynamicMappingSubscriber(
                $options->getDynamicMappingConfig()
            );

            $eventManager = $sm->get($options->getDoctrineObjectManager())->getEventManager();
            $eventManager->addEventSubscriber($userClientSubscriber);
        }
    }


    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/',
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
