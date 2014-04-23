<?php

namespace ProxyManagerModule\Factory;

/**
 * Creates \ProxyManager\Factory\NullObjectFactory with given configuration
 *
 * @author oprokidnev <aa@oprokidnev.ru>
 */
class NullObjectFactory implements \Zend\ServiceManager\FactoryInterface
{

    /**
     *
     * @param  \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return \ProxyManager\Factory\NullObjectFactory      Description
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator;

        $proxyManagerConfig = $serviceLocator->get('ProxyManagerConfig');

        return new \ProxyManager\Factory\NullObjectFactory($proxyManagerConfig);
    }

}
