<?php

namespace ProxyManagerModule;

class Module implements \Zend\ModuleManager\Feature\AutoloaderProviderInterface, \Zend\ModuleManager\Feature\ConfigProviderInterface
{

    /**
     * 
     * @return array
     */
    public function getConfig()
    {
        return include dirname(dirname(__DIR__)) . '/config/module.config.php';
    }

    /**
     * 
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }


}
